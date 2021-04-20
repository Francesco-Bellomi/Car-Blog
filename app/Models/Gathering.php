<?php

namespace App\Models;

use App\Models\Car;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Gathering extends Model
{
    protected $fillable = [
        'title',
        'location',
        'date',
        'description',
        'img',
        'user_id',
    ];
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function cars()
    {
        return $this->belongsToMany(Car::class);
    }

}
