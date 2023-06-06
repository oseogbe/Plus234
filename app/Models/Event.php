<?php

namespace App\Models;

use App\Traits\FilterableByDates;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory, FilterableByDates;

    protected $guarded = [];
}
