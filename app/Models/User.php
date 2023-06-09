<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'username',
        'email',
        'password',
        'bio',
        'dp'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function myChats()
    {
        return $this->hasMany(Chat::class, 'user1');
    }

    public function chats()
    {
        return $this->hasMany(Chat::class, 'user1')->orWhere('user2', $this->id);
    }

    public function chatRooms()
    {
        return $this->hasMany(ChatRoom::class, 'created_by');
    }

    public static function otherUsers()
    {
        return static::whereNot('id', auth()->id());
    }

    public function invitations()
    {
        return $this->hasMany(ChatInvitation::class, 'inviter');
    }

    public function scopeFilter($query)
    {
        $query->when(request('search'), fn ($query) =>
            $query->where('name', 'like', '%'.request('search').'%'))
                    ->orWhere('username', 'like', '%'.request('search').'%')
        ->when(request('sortBy'), fn ($query) =>
                $query->orderBy(request('sortBy'), request('direction', 'asc')));
    }
}
