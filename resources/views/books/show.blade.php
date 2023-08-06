<!DOCTYPE html>
<html>
<head>
    <title>Book Details</title>
</head>
<body>
<h1>Book Details</h1>
<a href="{{ url('/books') }}">Back to Books List</a>

<h2>{{ $book->title }}</h2>
<p><strong>Author:</strong> {{ $book->author }}</p>
<p><strong>description:</strong> {{ $book->description }}</p>
<p><strong>Year:</strong> {{ $book->year }}</p>
<p><strong>Availability:</strong> {{ $book->availability ? 'Available' : 'Not Available' }}</p>
<p><strong>Type:</strong> {{ $book->type }}</p>
<p><strong>Category:</strong> {{ $book->category->name }}</p>

@if($book->image)
    <p><strong>Image:</strong></p>
    <img src="{{ asset('storage/' . $book->image) }}" alt="Book Image" width="300">
@else
    <p>No Image</p>
@endif
</body>
</html>

