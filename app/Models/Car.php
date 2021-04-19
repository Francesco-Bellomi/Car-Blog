<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Car extends Model
{

    use HasFactory;

    protected $fillable = [
        'model',
        'img',
        'description',
        'owner',
        'userimg',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
