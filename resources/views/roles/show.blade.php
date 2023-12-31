@extends('layouts.admin')


@section('content')
    <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item">
            <a href="{{ route('roles.index') }}"><i class="bx bx-home-alt fs-lg me-1"></i>Roles</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Show Role</li>
    </ol>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Name:</strong>
            {{ $role->name }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Permissions:</strong>
            @if(!empty($rolePermissions))
                @foreach($rolePermissions as $v)
                    <label class="label label-success">{{ $v->name }},</label>
                @endforeach
            @endif
        </div>
    </div>
</div>
@endsection
