<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Book;
use Illuminate\Support\Facades\Storage;

class BookController extends Controller
{
    public function index()
    {

        $books = Book::all();
        return view('books.index', compact('books'));

    }

    public function create()
    {
        $categories = Category::all();
        return view('books.create', compact('categories'));
    }

    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'description' => 'required|string|min:25',
            'year' => 'required|integer|min:0',
            'availability' => 'boolean',
            'type' => 'required|string',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'category_id' => 'required|exists:categories,id',

        ]);

        $book = new Book([
            'title' => $request->input('title'),
            'author' => $request->input('author'),
            'year' => $request->input('year'),
            'availability' => $request->input('availability', 0),
            'type' => $request->input('type'),
            'image' => $request->input('image'),
            'description' => $request->input('description'),
            'category_id' => $request->input('category_id'),
        ]);
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('public/books');
            $book->image = str_replace('public/', '', $path);
        }
        $book->save();
        return redirect('/books')->with('success', 'Book created successfully!');
    }

    public function show(Book $book)
    {
        return view('books.show', compact('book'));
    }

    public function edit(Book $book)
    {

     //   $book = Book::findOrFail($id);
        $categories = Category::all();
        return view('books.edit', compact('book', 'categories'));

    }

    public function update(Request $request, Book $book)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'year' => 'required|integer|min:0',
            'description' => 'required|string|min:25',
            'availability' => 'boolean',
            'type' => 'required|string',
            'category_id' => 'required|exists:categories,id',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $book->title = $request->input('title');
        $book->author = $request->input('author');
        $book->year = $request->input('year');
        $book->availability = $request->input('availability', false);
        $book->type = $request->input('type');
        $book->description = $request->input('description');
        $book->category_id = $request->input('category_id');


        if ($request->hasFile('image')) {
            // Delete the existing image if it exists
            if ($book->image && Storage::exists('public/' . $book->image)) {
                Storage::delete('public/' . $book->image);
            }

            // Store the new image and update the image path in the database
            $path = $request->file('image')->store('public/books');
            $book->image = str_replace('public/', '', $path);
        }

        $book->save();
        return redirect('/books')->with('success', 'Book updated successfully!');

    }

    public function destroy(Book $book)
    {
        $book->delete();
        return redirect('/books')->with('success', 'Book deleted successfully!');
    }








}
