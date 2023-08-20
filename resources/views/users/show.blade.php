@extends('layouts.admin')


@section('content')




    <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item">
            <a href="{{ route('users.index') }}"><i class="bx bx-home-alt fs-lg me-1"></i>Users</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Show User</li>
    </ol>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                @if(isset($user->name) )
                    {{ $user->name }}

                @endif

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email:</strong>
                @if(isset($user->email) )
                    {{ $user->email }}

                @endif
            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Roles:</strong>


            </div>
        </div>
    </div>
@endsection
