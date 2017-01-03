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
                        <label for="password" class="col-sm-2 control-label">Password</label>
                        <div class="col-sm-10">
                            <input type="password" id="password" name="password" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="password_again" class="col-sm-2 control-label">Password (Again)</label>
                        <div class="col-sm-10">
                            <input type="password" id="password_again" name="password_again" class="form-control">
                        </div>
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
                        <label for="forum_name" class="col-sm-2 control-label">Forum Name</label>
                        <div class="col-sm-10">
                            <input type="text" id="forum_name" name="forum_name" class="form-control" value="{{ old('forum_name') ?? $user->forum_name }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="mta_name" class="col-sm-2 control-label">In-Game Account</label>
                        <div class="col-sm-10">
                            <input type="text" id="mta_name" name="mta_name" class="form-control" value="{{ old('mta_name') ?? $user->mta_name }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="time_zone" class="col-sm-2 control-label">Time Zone</label>
                        <div class="col-sm-10">
                            <input type="text" id="time_zone" name="time_zone" class="form-control" value="{{ old('time_zone') ?? $user->time_zone }}">
                        </div>
                    </div>
                </div>
            </div>
            <div class="box box-primary">
                <div class="box-body">
                    <div class="col-sm-12">
                        <input type="submit" class="btn btn-primary" value="Update User">
                    </div>
                </div>
            </div>
            {{ Form::close() }}
        </div>
        <div class="col-md-4">
            <notes></notes>

            <revisions items="{{ json_encode($revisions) }}"></revisions>
        </div>
    </div>
@endsection