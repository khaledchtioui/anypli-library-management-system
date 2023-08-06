<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class VisitorController extends Controller
{


    public function index()
    {
        $books = Book::all();
        $categories = Category::all();
        return view('books.all_books', compact('books','categories'));
    }

    public function show($id)
    {

        $book = Book::findOrFail($id);

        return view('books.visitor', compact('book'));


    }
    public function filterBooks(Request $request)
    {
        $query = Book::query();

        if ($request->has('category')) {
            $category = $request->input('category');
            $query->where('category', $category);
        }

        if ($request->has('availability')) {
            $availability = $request->input('availability');
            $query->where('availability', $availability);
        }

        $books = $query->get();

        return view('books.index', compact('books'));
    }


    //
}
