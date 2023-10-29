<?php

namespace App\Http\Controllers;

use App\Models\Package;
use App\Models\Book;

use Illuminate\Http\Request;

class BookController extends Controller

{
    /*
        Add data to the db
    */
    public function addData(Request $req){
        $books = new Book;
        $books->packageName = $req->packageName;
        $books->duration = $req->duration;
        $books->name = $req->name;
        $books->save();

        return redirect('/book');

    }
    
    public function book()
    {
        $packages = Package::all();

        return view('books.book', ['packages' => $packages]);
    }
}
