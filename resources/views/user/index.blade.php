@extends('layouts.app')

@section('page-title')
    Users
@endsection

@section('page-description')
    Manage users who exist within the Government website.
@endsection

@section('content')
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Users</h3>
        </div>
        <div class="box-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Registered</th>
                        <th>Role</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->created_at->toDayDateTimeString() }}</td>
                        <td>N/A</td>
                        <td class="text-right">
                            <a href="{{ url("user/{$user->id}/edit") }}" class="btn btn-primary">Edit</a>
                            <a href="{{ url("user/{$user->id}/delete") }}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection