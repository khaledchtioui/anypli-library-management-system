<?php

namespace App\Http\Controllers;

use App\Models\Borrowing;
use App\Repositories\BookRepository;
use App\Repositories\BorrowingRepository;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;

class BorrowingController extends Controller
{
    protected $userRepository ;
    protected $bookRepository ;
    protected $borrowingRepository ;

    function __construct(UserRepository $userRepository,BookRepository $bookRepository ,BorrowingRepository $borrowingRepository)
    {
        $this->userRepository = $userRepository;
        $this->bookRepository = $bookRepository;
        $this->borrowingRepository = $borrowingRepository;

    }
    public function index()
    {
        $borrowings = $this->borrowingRepository->all();
        return view('borrowings.index', compact('borrowings'));
    }

    public function create()
    {

        $users = $this->userRepository->all();
        $books = $this->bookRepository->getAll();

        return view('borrowings.create',compact('users','books'));

    }
    public function store(Request $request)
    {
 //   dd($request);
        $data = $request->all();


        $this->borrowingRepository->create($data);

        return redirect()->route('borrowings.index')->with('success', 'Borrowing record created successfully.');
    }


    public function edit(Borrowing $borrowing)
    {
        // You can retrieve the necessary data for dropdowns, if needed
        return view('borrowings.edit', compact('borrowing'));
    }

    public function destroy(Borrowing $borrowing)
    {
        $borrowing->delete();

        return redirect()->route('borrowings.index')->with('success', 'Borrowing record deleted successfully.');
    }

}
