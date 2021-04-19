<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{

    protected $fillable = [
        'model',
        'img',
        'description',
        'owner',
        'userimg',
    ];

    use HasFactory;
}
