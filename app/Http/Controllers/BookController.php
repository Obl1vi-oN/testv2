<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('index', ['book' => $books]);
    }



    public function store(Request $request)
    {
        Book::create([
            'name'=>$request->name,
            'description'=>$request->description,
            'options'=>$request->options,
            'view'=>$request->view,
        ]);

        return redirect()->back();
    }
}
