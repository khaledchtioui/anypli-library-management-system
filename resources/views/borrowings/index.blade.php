@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>Borrowings</h1>
        <a href="{{ route('borrowings.create') }}" class="btn btn-primary mb-3">Create Borrowing</a>
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <table class="table">
            <thead>
            <tr>
                <th>Date</th>
                <th>Borrow Date</th>
                <th>Return Date</th>
                <th>Visitor</th>
                <th>Book</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($borrowings as $borrowing)
                <tr>
                    <td>{{ $borrowing->date }}</td>
                    <td>{{ $borrowing->borrowDate }}</td>
                    <td>{{ $borrowing->returnDate }}</td>
                    <td>{{ $borrowing->visitor->name }}</td>
                    <td>{{ $borrowing->book }}</td>
                    <td>
                        <a href="{{ route('borrowings.edit', $borrowing->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('borrowings.destroy', $borrowing->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this record?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
