@extends('layouts.admin')
    <!DOCTYPE html>
<html>
<head>
    @section('title', 'Users')
</head>
<body>


@section('content')


    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                            <h6 class="text-white text-capitalize ps-3">Users List
                            </h6>
                        </div>
                    </div>
                    <div class="card-body px-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">User</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Birthdate</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Phone</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Adresse	</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Role</th>
                                    <th class="text-secondary opacity-7"></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $user)



                                    <tr>


<td>
    <div class="d-flex px-2 py-1">

    <div>
        <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3 border-radius-lg" alt={{ $user->name }}>
    </div>

    <div class="d-flex flex-column justify-content-center">
        <h6 class="mb-0 text-sm">{{ $user->name }}</h6>
        <p class="text-xs text-secondary mb-0">{{ $user->email }}</p>
    </div>
    </div>
</td>



                                        <td class="align-middle text-center text-sm" >
                                            <p class="text-xs font-weight-bold mb-0">{{ $user->birthdate }}</p>
                                        </td>

                                        <td class="align-middle text-center text-sm">
                                            <p class="text-xs font-weight-bold mb-0">{{ $user->phone }}</p>
                                        </td>



                                        <td class="align-middle text-center text-sm">
                                            <p class="text-xs font-weight-bold mb-0">{{ $user->address }}</p>
                                        </td>

                                        <td class="align-middle text-center text-sm">
                                            @if(!empty($user->getRoleNames()))
                                                @foreach($user->getRoleNames() as $v)
                                                    <label class="badge bg-success">{{ $v }}</label>
                                                @endforeach
                                            @endif                                        </td>


                                        <td class="align-middle">

                                        </td>

                                        <td class="align-middle">
                                            @can('user-list')
                                            <a class="btn btn-info" href="{{ route('users.show',$user->id) }}">Show</a>
                                            @endcan
                                                @can('user-edit')

                                                <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Edit</a>
                                                @endcan
                                                @can('user-delete')
                                            {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
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
@can('user-create')
            <a class="btn bg-gradient-info btn-block" href="{{ route('users.create') }}"> Create New User</a>
            @endcan

            <!-- Modal -->
        </div>


@endsection

</body>
</html>
