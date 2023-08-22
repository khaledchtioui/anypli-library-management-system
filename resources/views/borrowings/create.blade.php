@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>Create Borrowing Record</h1>
        <form action="{{ route('borrowings.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="date">Date:</label>
                <input type="date" name="date" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="borrowDate">Borrow Date:</label>
                <input type="date" name="borrowDate" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="returnDate">Return Date:</label>
                <input type="date" name="returnDate" class="form-control">
            </div>
            <div class="form-group">
                <label for="visitor_id">Visitor:</label>
                <select name="visitor_id" class="form-control" required>
                    <option value="">Select a visitor</option>
                    @foreach($users as $visitor)
                        <option value="{{ $visitor->id }}">{{ $visitor->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="book_id">Book:</label>
                <select name="book_id" class="form-control" required>
                    <option value="">Select a book</option>
                    @foreach($books as $book)
                        <option value="{{ $book->id_book }}">{{ $book->title }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection

