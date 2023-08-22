@extends('layouts.admin')


@section('content')


    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                            <h6 class="text-white text-capitalize ps-3">Roles List
                            </h6>
                        </div>
                    </div>
                    <div class="card-body px-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                                    <th class="text-secondary opacity-7"></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($roles as $role)



                                    <tr>





                                        <td class="align-middle text-center text-sm" >
                                            <p class="text-xs font-weight-bold mb-0">{{ ++$i }}</p>
                                        </td>

                                        <td class="align-middle text-center text-sm">
                                            <p class="text-xs font-weight-bold mb-0">{{ $role->name }}</p>
                                        </td>





                                        <td>
                                            @can('role-list')

                                            <a class="btn btn-info" href="{{ route('roles.show',$role->id) }}">Show</a>
                                            @endcan
                                            @can('role-edit')
                                                <a class="btn btn-primary" href="{{ route('roles.edit',$role->id) }}">Edit</a>
                                            @endcan
                                            @can('role-delete')
                                                {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline']) !!}
                                                {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                                {!! Form::close() !!}
                                            @endcan
                                     {{--                                            <form action="{{ url('/users/' . $user->id) }}" method="post">--}}
                                            {{--                                                @csrf--}}
                                            {{--                                                @method('DELETE')--}}
                                            {{--                                                <button class="text-secondary font-weight-bold text-xs " type="submit" onclick="return confirm('Are you sure you want to delete this User?')">Delete</button>--}}
                                            {{--                                            </form>--}}


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
            @can('role-create')
                <a class="btn bg-gradient-info btn-block" href="{{ route('roles.create') }}"> Create New Role</a>
            @endcan

            <!-- Modal -->
        </div>




@endsection
