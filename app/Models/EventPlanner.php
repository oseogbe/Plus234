<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class EventPlanner extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $guard = 'planner';

    protected $fillable = [
        'name',
        'username',
        'code',
        'email',
        'password',
        'bio',
        'dp',
        'bank',
        'account_name',
        'account_no'
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

}
