<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    private static $book;

    public static function newBook($request)
    {
        self::$book = new Book();
        self::$book->title = $request->title;
        self::$book->description = $request->description;
        self::$book->save();
    }
}
