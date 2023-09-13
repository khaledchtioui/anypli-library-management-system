@extends('layouts.admin')

@section('content')


        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card my-4">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                <h6 class="text-white text-capitalize ps-3">Borrowings List
                                </h6>
                            </div>
                        </div>
                        <div class="card-body px-0 pb-2">
                            <div class="table-responsive p-0">
                                <table class="table align-items-center mb-0">
                                    <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Date</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Borrow Date</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Return Date</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Visitor</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Book</th>
                                        <th class="text-secondary opacity-7"></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($borrowings as $borrowing)



                                        <tr>
                                            <td>
                                                <p class="text-xs font-weight-bold mb-0">{{ $borrowing->date }}</p>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-bold mb-0">{{ $borrowing->borrowDate }}</p>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-bold mb-0">{{ $borrowing->returnDate }}</p>
                                            </td>

                                            <td>
                                                <p class="text-xs font-weight-bold mb-0">{{ $borrowing->visitor->name }}</p>
                                            </td>

                                            <td>
                                                <p class="text-xs font-weight-bold mb-0">{{ $borrowing->books->title}}</p>
                                            </td>


                                            <td class="align-middle">
                                                    <a class="btn btn-primary" href="{{ route('borrowings.edit',$borrowing->id) }}">Edit</a>
                                                    <form action="{{ route('borrowings.destroy',$borrowing->id) }}" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-danger" type="submit" onclick="return confirm('Are you sure you want to delete this borrowing?')">Delete</button>
                                                    </form>

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
        <a href="{{route('borrowings.create')}}"  type="button" class="btn bg-gradient-info btn-block">
            Create Borrowing        </a>


    </div>
@endsection
