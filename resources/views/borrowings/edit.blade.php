@extends('layouts.admin')
@section('title', 'Edit New Book')
@section('content')
    <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item">
            <a href="{{ route('borrowings.index') }}"><i class="bx bx-home-alt fs-lg me-1"></i>Books</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Edit Book</li>
    </ol>


    @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{route('borrowings.update', $borrowing->id)}}" method="post" >
        @csrf
        @method('PUT')
        <div class="form-group">
                <label for="date">Date:</label>
                <input type="date" name="date" class="form-control" value="{{ $borrowing->date }}" required>
            </div>
            <div class="form-group">
                <label for="borrowDate">Borrow Date:</label>
                    <input type="date" name="borrowDate" value="{{ $borrowing->borrowDate }}" class="form-control"  required>
            </div>
            <div class="form-group">
                <label for="returnDate">Return Date:</label>
                <input value="{{ $borrowing->returnDate }}" type="date" name="returnDate" class="form-control">
            </div>
            <div class="form-group">
                <label for="visitor_id">Visitor:</label>
                <select name="visitor_id" class="form-control" required>
                    <option value="">Select a visitor</option>
                    @foreach($users as $visitor)
                        <option value="{{ $visitor->id }}" @if($visitor->id === $borrowing->visitor->id) selected @endif>{{ $visitor->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="book_id">Book:</label>
                <select name="book_id" class="form-control" required>
                    <option value="">Select a book</option>
                    @foreach($books as $book)
                        <option value="{{ $book->id_book }}" @if($book->id_book === $borrowing->books->id_book) selected @endif>{{ $book->title }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>



@endsection
