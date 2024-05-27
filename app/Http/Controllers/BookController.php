<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function addbook(Request $request)
    {
        Book::newBook($request);
        return redirect()->back()->with('message', 'Book Added Succcessfully');
    }
}

