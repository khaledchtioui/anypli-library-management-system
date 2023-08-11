@extends('layouts.admin')
@section('title', 'Add New Book')
@section('content')

<h1>Add New Book</h1>
<a href="{{ url('/books') }}">Back to Books List</a>



<form action="{{ route('books.store') }}" method="post"  enctype="multipart/form-data">
    @csrf
    <div class="input-group input-group-outline my-3">
        <label  for="title" class="form-label">Title</label>
        <input type="text" id="title" name="title" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" value="{{ old('title') }}"  autofocus>
        @if ($errors->has('title'))
            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('title') }}</strong>
                                </span>
        @endif
    </div>
    <div class="input-group input-group-outline my-3">
        <label  for="author" class="form-label">Author</label>
        <input type="author" id="author" name="author" class="form-control{{ $errors->has('author') ? ' is-invalid' : '' }}" value="{{ old('author') }}"  autofocus>
        @if ($errors->has('author'))
            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('author') }}</strong>
                                </span>
        @endif
    </div>

{{--    <div class="input-group input-group-outline my-3">--}}
{{--        <label  for="title" class="form-label">Author</label>--}}
{{--        <input type="text" id="title" name="title"  class="form-control{{ $errors->has('author') ? ' is-invalid' : '' }}" value="{{ old('author') }}">--}}
{{--        @if ($errors->has('author'))--}}
{{--            <span class="invalid-feedback" role="alert">--}}
{{--                                    <strong>{{ $errors->first('author') }}</strong>--}}
{{--                                </span>--}}
{{--        @endif--}}

{{--    </div>--}}

    <div class="input-group input-group-dynamic">
        <textarea  placeholder="description"  type="text" id="description" name="description" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" value="{{ old('description') }}" ></textarea>

        @if ($errors->has('description'))
            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('description') }}</strong>
                                </span>
        @endif

    </div>

    <div class="input-group input-group-outline my-3">
        <label  for="year" class="form-label">year</label>
        <input type="number" id="year" name="year" class="form-control{{ $errors->has('year') ? ' is-invalid' : '' }}" value="{{ old('year') }}" autofocus>
        @if ($errors->has('year'))
            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('year') }}</strong>
                                </span>
        @endif


    </div>

    <div class="form-check">
        <input type="checkbox" id="availability" class="form-check-input" name="availability"  value ="1" >
        <label class="custom-control-label"   for="availability">Availability</label>

    </div>


    <div class="input-group input-group-static mb-4">
        <label  for="category_id"  class="ms-0">Category</label>
        <select class="form-control" type="checkbox" id="category_id" name="category_id" >

            @foreach($categories as $category)
                <option value="{{ $category->id }}" >
                    {{ $category->name }}
                </option>
            @endforeach

        </select>
    </div>
    <div class="input-group input-group-static mb-4">
        <label  for="type"  class="ms-0">Type</label>
        <select class="form-control" id="type" name="type" >
            <option value="books" selected>Books</option>
            <option value="audio books" >Audio Books</option>
            <option value="magazine" >Magazine</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="image" class="form-label">Image</label>
        <input  id="image" name="image" class="form-control" type="file" id="formFile">
    </div>
    <button  class="text-primary text-gradient font-weight-bold" type="submit">Add Book</button>












</form>

@endsection
