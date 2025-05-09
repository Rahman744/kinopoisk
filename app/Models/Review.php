<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    // Отзыв принадлежит пользователю
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Отзыв принадлежит фильму
    public function movie()
    {
        return $this->belongsTo(Movie::class);
    }
}
