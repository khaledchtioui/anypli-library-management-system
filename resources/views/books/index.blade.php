@extends('layouts.admin')
    <!DOCTYPE html>
<html>
<head>
    @section('title', 'Books')
</head>
<body>


@section('content')


    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                            <h6 class="text-white text-capitalize ps-3">Books List
                            </h6>
                        </div>
                    </div>
                    <div class="card-body px-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Id</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Title</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Author</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Year</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Availability</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Type	</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Category</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Image</th>
                                    <th class="text-secondary opacity-7"></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($books as $book)



                                    <tr>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">{{ $book->id_book }}</p>
                                        </td>
                                         <td>
                                            <p class="text-xs font-weight-bold mb-0">{{ $book->title }}</p>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">{{ $book->author }}</p>
                                        </td>

                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">{{ $book->year }}</p>
                                        </td>

                                        <td class="align-middle text-center text-sm">
                                            @if($book->availability)
                                                <span class="badge badge-sm bg-gradient-success">in stock</span>

                                            @else
                                                <span class="badge badge-sm bg-gradient-secondary">stock out</span>
                                            @endif

                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">{{ $book->type }}</p>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">{{ $book->category->name ?? 'Uncategorized' }}</p>
                                        </td>

                                        <td>
                                            @if($book->image)

                                                <div class="d-flex px-2 py-1">
                                                    <div>
                                                        <img src="{{ asset('storage/' . $book->image) }}" class="avatar avatar-sm me-3 border-radius-lg" alt="user1">
                                                    </div>

                                                </div>

                                            @else
                                                <span class="badge badge-sm bg-gradient-secondary">Offline</span>
                                            @endif

                                        </td>
                                        <td class="align-middle">
                                            @can('book-list')
                                            <a class="text-secondary font-weight-bold text-xs" href="{{ url('/books/' . $book->id_book) }}">View</a>
                                            @endcan
                                            @can('book-edit')
                                            <a class="text-secondary font-weight-bold text-xs" href="{{ url('/books/' . $book->id_book . '/edit') }}">Edit</a>
                                                @endcan
                                                @can('book-delete')
                                            <form action="{{ url('/books/' . $book->id_book) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button class="text-secondary font-weight-bold text-xs " type="submit" onclick="return confirm('Are you sure you want to delete this book?')">Delete</button>
                                            </form>
                                                @endcan

                                        </td>

                                    </tr>
                                @endforeach


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="row">

        <div class="col-md-4">
            <!-- Button trigger modal -->
            @can('book-create')
            <a href="{{ url('/books/create') }}"  type="button" class="btn bg-gradient-info btn-block">
                Add New Book
            </a>
            @endcan

            <!-- Modal -->
            <div class="modal fade" id="exampleModalSignUp" tabindex="-1" role="dialog" aria-labelledby="exampleModalSignTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
                    <div class="modal-content">
                        <div class="modal-body p-0">
                            <div class="card card-plain">
                                <div class="card-header pb-0 text-left">
                                    <h5 class="">Add Books</h5>
                                </div>
                                <div class="card-body pb-3">
                                    @if($errors->any())
                                        <ul>
                                            @foreach($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    @endif

                                    <form action="{{ url('/books') }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="input-group input-group-outline my-3">
                                            <label  for="title" class="form-label">Title</label>
                                            <input type="text" id="title" name="title" class="form-control"required>
                                        </div>
                                        <div class="input-group input-group-outline my-3">
                                            <label  for="title" class="form-label">Author</label>
                                            <input type="text" id="title" name="title" class="form-control"required>
                                        </div>

                                        <div class="input-group input-group-outline my-3">
                                            <label  for="title" class="form-label">Author</label>
                                            <input type="text" id="author" name="author"  class="form-control" required>
                                        </div>
                                       <div class="input-group input-group-dynamic">
                                            <textarea  placeholder="description"  type="text" id="description" name="description" class="form-control" required></textarea>
                                        </div>

                                        <div class="input-group input-group-outline my-3">
                                            <label  for="year" class="form-label">year</label>
                                            <input type="number" id="year" name="year" class="form-control" required>
                                        </div>

                                        <div class="form-check">
                                            <input type="checkbox" id="availability" class="form-check-input" name="availability"  value ="1" required>
                                            <label class="custom-control-label" for="availability">Availability</label>

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




                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

</body>
</html>
