<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookRequest;
use App\Models\Category;
use App\Repositories\BookRepository;
use App\Repositories\CategoryRepository;
use Illuminate\Http\Request;
use App\Models\Book;
use Illuminate\Support\Facades\Storage;

class BookController extends Controller
{
    protected $booksRepository;
    protected $categoryRepository  ;

    function __construct(BookRepository $booksRepository,CategoryRepository $categoryRepository)
    {
        $this->middleware('permission:book|book-list|book-create|book-edit|book-delete', ['only' => ['index','store']]);
        $this->middleware('permission:book-create', ['only' => ['create','store']]);
        $this->middleware('permission:book-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:book-delete', ['only' => ['destroy']]);
        $this->booksRepository = $booksRepository;
        $this->categoryRepository = $categoryRepository;

    }



    public function index()
    {

        $books = $this->booksRepository->getAll();
        $categories = $this->categoryRepository->getAll();
        return view('books.index', compact('books','categories'));

    }

    public function create()
    {
        $categories = $this->categoryRepository->getAll();
        return view('books.create', compact('categories'));
    }

    public function store(BookRequest $request)
    {
        $validatedData = $request->validated();

        $bookAttributes = [
            'title' => $validatedData['title'],
            'author' => $validatedData['author'],
            'year' => $validatedData['year'],
            'availability' => $validatedData['availability'] ?? 0,
            'type' => $validatedData['type'],
            'description' => $validatedData['description'],
            'category_id' => $validatedData['category_id'],
        ];

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('public/books');
            $bookAttributes['image'] = str_replace('public/', '', $path);
        }
      //  dd($path);

       $this->booksRepository->create($bookAttributes);

        return redirect()->route('books.index')->with('success', 'Book created successfully!');
    }/*    public function store(Request $request)
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
    }*/
    public function show($id)
    {
        $book = $this->booksRepository->getById($id);

        return view('books.show', compact('book'));
    }




    public function edit($id)
    {
        $book = $this->booksRepository->getById($id);


        $categories = $this->categoryRepository->getAll();
        return view('books.edit', compact('book', 'categories'));

    }

    public function update(BookRequest $request, $id)
    {
        $book = $this->booksRepository->getById($id);
        $validatedData = $request->validated();
        $book->title = $validatedData['title'];
        $book->author = $validatedData['author'];
        $book->year = $validatedData['year'];
        $book->availability = $validatedData['availability'] ?? 0;
        $book->type = $validatedData['type'];
        $book->description = $validatedData['description'];
        $book->category_id = $validatedData['category_id'];

        $data = $request->all();


        if ($request->hasFile('image')) {
            // Delete the existing image if it exists
            if ($book->image && Storage::exists('public/' . $book->image)) {
                Storage::delete('public/' . $book->image);
            }
            $path = $request->file('image')->store('public/books');
            $book->image = str_replace('public/', '', $path);
            $this->booksRepository->update($id, $data);

        }
         $this->booksRepository->update($id, $data);


      //  $book->save();
        return redirect()->route('books.index')->with('success', 'Book updated successfully!');

    }

    public function destroy($id)
    {
        $this->booksRepository->delete($id);

        return redirect()->route('books.index')
            ->with('success', 'Book deleted successfully.');
    }








}
