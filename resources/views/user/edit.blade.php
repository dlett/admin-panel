@extends('layouts.app')

@section('page-title')
    Users
@endsection

@section('page-description')
    Manage users who exist within the Government website.
@endsection

@section('content')
    <div class="row">
        <div class="col-md-8">
            {{ Form::open(['url' => 'user/' . $user->id, 'method' => 'put', 'class' => 'form-horizontal']) }}
            {{ csrf_field() }}
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Edit User: {{ $user->name }}</h3>
                    <small class="pull-right">Edit the basic information about the user's account.</small>
                </div>
                <div class="box-body">

                    <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                        <label for="name" class="col-sm-2 control-label">Name</label>
                        <div class="col-sm-10">
                            <input type="text" id="name" name="name" class="form-control" value="{{ old('name') ?? $user->name }}">

                            @if ($errors->has('name'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" id="email" name="email" class="form-control" value="{{ old('email') ?? $user->email }}">
                        </div>
                    </div>

                </div>
            </div>
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Reset Password</h3>

                    <small class="pull-right">Reset a user's password. To not reset their password, leave these fields
                        blank.
                    </small>
                </div>
                <div class="box-body">
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Password</label>
                        <div class="col-sm-10">
                            <input type="email" id="email" name="email" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Password (Again)</label>
                        <div class="col-sm-10">
                            <input type="email" id="email" name="email" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">

                    </div>

                </div>
            </div>

            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Out of Character</h3>
                    <small class="pull-right">Out of character information about the user's account.</small>
                </div>
                <div class="box-body">
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Forum Name</label>
                        <div class="col-sm-10">
                            <input type="text" id="name" name="name" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">In-Game Account</label>
                        <div class="col-sm-10">
                            <input type="email" id="email" name="email" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Time Zone</label>
                        <div class="col-sm-10">
                            <input type="email" id="email" name="email" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
            <div class="box box-primary">
                <div class="box-body">
                    <div class="col-sm-12">
                        <button class="btn btn-primary">Update User</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <notes></notes>

            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Revisions</h3>
                </div>
                <div class="box-body">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Action</th>
                            <th>Author</th>
                            <th>Date</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td><a href="">Updated Account</a></td>
                            <td>Thomas Mengele</td>
                            <td>Nov. 26 12:56PM</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        {{ Form::close() }}
    </div>
@endsection