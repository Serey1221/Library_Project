<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Author;

class BookAuthor extends Model
{
    use HasFactory;

    public function author()
    {
        return $this->morphMany(Author::class, 'author_id');
    }
}
