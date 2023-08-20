<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use App\Repositories\BookRepository;
use App\Repositories\CategoryRepository;
use Illuminate\Http\Request;

class VisitorController extends Controller
{    protected $booksRepository;
    protected $categoryRepository  ;
    function __construct(BookRepository $booksRepository,CategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
        $this->booksRepository = $booksRepository;

    }


    public function index()
    {

        $books=$this->booksRepository->getAll()  ;
        $categories=$this->categoryRepository->getAll();
         return view('books.all_books', compact('books','categories'));
    }

    public function show($id)
    {

        $book=$this->booksRepository->getById($id);


        return view('books.visitor', compact('book'));


    }
///*    public function filterBooks(Request $request)
//    {
//        $query = Book::query();
//
//        if ($request->has('category')) {
//            $category = $request->input('category');
//            $query->where('category', $category);
//        }
//
//        if ($request->has('availability')) {
//            $availability = $request->input('availability');
//            $query->where('availability', $availability);
//        }
//
//        $books = $query->get();
//
//        return view('books.index', compact('books'));
//    }*/


    //
}
