<!DOCTYPE html>
<html>
<head>
    <title>Edit Book</title>
</head>
<body>
<h1>Edit Book</h1>
<a href="{{ url('/books') }}">Back to Books List</a>

@if($errors->any())
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form action="{{ url('/books/' . $book->id_book) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <label for="title">Title:</label>
    <input type="text" id="title" name="title" value="{{ $book->title }}" required><br>

    <label for="author">Author:</label>
    <input type="text" id="author" name="author" value="{{ $book->author }}" required><br>
    <label for="description">Description:</label>
    <textarea type="text" id="description" name="description" value="{{ $book->description }}" required></textarea> <br>

    <label for="year">Year:</label>
    <input type="number" id="year" name="year" value="{{ $book->year }}" required><br>

    <label for="availability">Availability:</label>
    <input type="checkbox" id="availability" name="availability" value="1" {{ $book->availability ? 'checked' : '' }}><br>

    <label for="type">Type:</label><br>
    <select id="type" name="type">
        <option value="books" {{ old('type') === 'books' ? 'selected' : '' }}>Books</option>
        <option value="audio books" {{ old('type') === 'audio books' ? 'selected' : '' }}>Audio Books</option>
        <option value="magazine" {{ old('type') === 'magazine' ? 'selected' : '' }}>Magazine</option>
    </select><br>
    <label for="category_id">Category:</label><br>
    <select id="category_id" name="category_id">
        @foreach($categories as $category)
            <option value="{{ $category->id }}" {{ old('category_id', $book->category_id) == $category->id ? 'selected' : '' }}>
                {{ $category->name }}
            </option>
        @endforeach
    </select><br>
    <label for="image">Image:</label>
    <input type="file" id="image" name="image"><br>

    @if($book->image)
        <p>Current Image:</p>
        <img src="{{ asset('storage/' . $book->image) }}" alt="Book Image" width="100">
    @else
        <p>No Image</p>
    @endif

    <button type="submit">Update Book</button>
</form>
</body>
</html>
