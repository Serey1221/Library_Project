<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\BookAuthor;

class Author extends Model
{
    use HasFactory;

    // protected $table = 'cars';


    // protected $fillable = ['name','gender','dob','pod','address','phone','email','photo','image_path'];

    public function bookauthor()
    {
        return $this->morphMany(BookAuthor::class, 'author_id');
    }
}
