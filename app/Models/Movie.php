<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    // Связь многие-ко-многим с актёрами
    public function actors()
    {
        return $this->belongsToMany(Actor::class);
    }

    // Связь один-ко-многим с отзывами
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    // Связь многие-к-одному с жанром (если жанры вынесены в отдельную таблицу)
    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }
}
