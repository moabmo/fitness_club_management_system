<?php

namespace App\Http\Controllers;

use App\Models\Book;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class MybookController extends Controller
{
    public function mybook()
    {
        // $books = Book::all();
        $user_name =  Auth::user()->name;
        $books = Book::where('name', '=', $user_name)
                ->get();

        return view('books.mybook', ['books' => $books]);
    }
}
