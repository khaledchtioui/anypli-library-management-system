<!DOCTYPE html>
<html>
<head>
    <title>Add New Book</title>
</head>
<body>
<h1>Add New Book</h1>
<a href="{{ url('/books') }}">Back to Books List</a>

@if($errors->any())
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form action="{{ url('/books') }}" method="post" enctype="multipart/form-data">
    @csrf
    <label for="title">Title:</label>
    <input type="text" id="title" name="title" required><br>

    <label for="author">Author:</label>
    <input type="text" id="author" name="author" required><br>
    <label for="author">Description:</label>
    <textarea type="text" id="description" name="description" required></textarea><br>

    <label for="year">Year:</label>
    <input type="number" id="year" name="year" required><br>

    <label for="availability">Availability:</label>
    <input type="checkbox" id="availability" name="availability" value="1"><br>
    <label for="category_id">Category:</label><br>
    <select id="category_id" name="category_id">
        @foreach($categories as $category)
            <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                {{ $category->name }}
            </option>
        @endforeach
    </select><br>
    <label for="type">Type:</label><br>
    <select id="type" name="type" >
        <option value="books" selected>Books</option>
        <option value="audio books" >Audio Books</option>
        <option value="magazine" >Magazine</option>
    </select><br>

    <label for="image">Image:</label>
    <input type="file" id="image" name="image"><br>

    <button type="submit">Add Book</button>
</form>
</body>
</html>
