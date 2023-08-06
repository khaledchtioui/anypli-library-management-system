<!DOCTYPE html>
<html>
<head>
    <title>Books List</title>
</head>
<body>
<h1>Books List</h1>
<a href="{{ url('/books/create') }}">Add New Book</a>

@if(session('success'))
    <p>{{ session('success') }}</p>
@endif

<table border="1">
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Author</th>
        <th>Description</th>
        <th>Year</th>
        <th>Availability</th>
        <th>Type</th>
        <th>Category</th>
        <th>Image</th>
        <th>Actions</th>
    </tr>
    @foreach($books as $book)
        <tr>
            <td>{{ $book->id_book }}</td>
            <td>{{ $book->title }}</td>
            <td>{{ $book->author }}</td>
            <td>{{ $book->description }}</td>
            <td>{{ $book->year }}</td>
            <td>{{ $book->availability ? 'Available' : 'Not Available' }}</td>
            <td>{{ $book->type }}</td>
            <td>{{ $book->category->name ?? 'Uncategorized' }}</td>
            <td>
                @if($book->image)
                    <img src="{{ asset('storage/' . $book->image) }}" alt="Book Image" width="100">
                @else
                    No Image
                @endif
            </td>
            <td>
                <a href="{{ url('/books/' . $book->id_book) }}">View</a>
                <a href="{{ url('/books/' . $book->id_book . '/edit') }}">Edit</a>
                <form action="{{ url('/books/' . $book->id_book) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Are you sure you want to delete this book?')">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>
</body>
</html>
