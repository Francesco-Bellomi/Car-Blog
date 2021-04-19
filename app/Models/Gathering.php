<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gathering extends Model
{
    protected $fillable = [
        'title',
        'location',
        'date',
        'description',
        'img',
    ];
    use HasFactory;
}
