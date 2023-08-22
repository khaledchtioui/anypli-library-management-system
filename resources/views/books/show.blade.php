@extends('layouts.admin')
@section('title', 'show book')

@section('content')

    <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item">
            <a href="{{ route('books.index') }}"><i class="bx bx-home-alt fs-lg me-1"></i>Books</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Show Book</li>
    </ol>
    <div class="container">
        <div class="row">

            <div class="col-5">
                <div class="d-none d-lg-block" style="height: 140px;"></div>

                <div class="swiper-slide swiper-slide-active" data-swiper-tab="#project-1" data-swiper-slide-index="0" role="group" aria-label="1 / 3" style="width: 368px; margin-right: 30px;">
                    <h2 class="h1 mb-4">{{ $book->title }}</h2>
                    <p class="pb-3 mb-3">{{ $book->description }}</p>

                    <table class="mb-5">
                        <tbody>
                        <tr>
                            <th class="text-dark fw-bold pb-2" scope="row">Type</th>
                            <td class="ps-3 ps-sm-4 pb-2">{{ $book->type }}</td>
                        </tr>
                        <tr>
                            <th class="text-dark fw-bold pb-2" scope="row">Category</th>
                            <td class="ps-3 ps-sm-4 pb-2">{{ $book->category->name }}</td>
                        </tr>
                        <tr>
                            <th class="text-dark fw-bold pb-2" scope="row">Year</th>
                            <td class="ps-3 ps-sm-4 pb-2">{{ $book->year }}</td>
                        </tr>
                        <tr>
                            <th class="text-dark fw-bold pb-2" scope="row">Availability</th>
                            <td class="ps-3 ps-sm-4 pb-2">{{ $book->availability ? 'In Stock' : 'STOCK OUT' }}</td>
                        </tr>
                        <tr>
                            <th class="text-dark fw-bold pb-2" scope="row">Author</th>
                            <td class="ps-3 ps-sm-4 pb-2">{{ $book->author}}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>

            </div>
            <div class="col-7 d-flex justify-content-center align-items-center" >


                @if($book->image)
                    <img src="{{asset('storage/' . $book->image) }} " height="550px" alt="Book Image" >
                @else
                    <p>No Image</p>
                @endif

            </div>
        </div>
        </div>


@endsection
