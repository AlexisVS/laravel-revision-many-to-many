<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article_tag extends Model
{
    use HasFactory;

    public function articles() {
        return $this->hasMany(Article::class);
    }

    public function tags() {
        return $this->hasMany(Tag::class);
    }
}
