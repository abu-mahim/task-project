<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class DashboardController extends Controller
{
    public function index()
    {
        $books = Book::all();        
        return view('dashboard.home', compact('books'));
    }

    public function add()
    {
        return view('dashboard.add');
    }
}
