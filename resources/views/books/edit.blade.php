@extends('layouts.admin')
@section('title', 'Edit New Book')
@section('content')
    <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item">
            <a href="{{ route('books.index') }}"><i class="bx bx-home-alt fs-lg me-1"></i>Books</a>
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

<form action="{{ url('/books/' . $book->id_book) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="input-group input-group-outline my-3">
        <label for="title" class="form-label" >Title:</label>
        <input class="form-control" type="text" id="title" name="title" value="{{ $book->title }}" required><br>

    </div>
    <div class="input-group input-group-outline my-3">
        <label class="form-label" for="author">Author:</label>
        <input class="form-label"  type="text" id="author"  name="author" value="{{ $book->author }}" required><br>

    </div>

    <div class="input-group input-group-dynamic">
        <textarea class="form-control" type="text" id="description" name="description" required>{{ $book->description }}</textarea> <br>
    </div>
    <div class="input-group input-group-outline my-3">
        <label class="form-label" for="year">Year:</label>
        <input class="form-control" type="number" id="year" name="year" value="{{ $book->year }}" required><br>

    </div>



    <div class="form-check">

    <label class="form-check-input" for="availability">Availability:</label>
    <input class="custom-control-label"  type="checkbox" id="availability" name="availability" value="1" {{ $book->availability ? 'checked' : '' }}><br>
    </div>
    <div class="input-group input-group-static mb-4">

    <label class="ms-0" for="type">Type:</label><br>
    <select class="form-control" id="type" name="type">
        <option value="books" {{ old('type') === 'books' ? 'selected' : '' }}>Books</option>
        <option value="audio books" {{ old('type') === 'audio books' ? 'selected' : '' }}>Audio Books</option>
        <option value="magazine" {{ old('type') === 'magazine' ? 'selected' : '' }}>Magazine</option>
    </select>
    </div>


        <br>
    <div class="input-group input-group-static mb-4">

    <label for="category_id" class="ms-0">Category:</label><br>
    <select  class="form-control" id="category_id" name="category_id">
        @foreach($categories as $category)
            <option value="{{ $category->id }}" {{ old('category_id', $book->category_id) == $category->id ? 'selected' : '' }}>
                {{ $category->name }}
            </option>
        @endforeach
    </select>
    </div>



        <br>

    @if($book->image)
        <p>Current Image:</p>
        <img src="{{ asset('storage/' . $book->image) }}" alt="Book Image" width="100">
    @else
        <p>No Image</p>
    @endif

    <div class="mb-3">
        <label for="image" class="form-label">Image</label>
        <input  id="image" name="image" class="form-control" type="file" id="formFile">
    </div>


    <button type="submit">Update Book</button>
</form>


@endsection
