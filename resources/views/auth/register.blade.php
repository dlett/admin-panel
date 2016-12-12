@extends('layouts.auth')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <hr>
                        <h4>OOC Information</h4>

                        <div class="form-group{{ $errors->has('forum_name') ? ' has-error' : '' }}">
                            <label for="forum_name" class="col-md-4 control-label">Forum Name</label>

                            <div class="col-md-6">
                                <input id="forum_name" type="text" class="form-control" name="forum_name" value="{{ old('forum_name') }}" required>

                                @if ($errors->has('forum_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('forum_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('mta_name') ? ' has-error' : '' }}">
                            <label for="mta_name" class="col-md-4 control-label">In-Game Account</label>

                            <div class="col-md-6">
                                <input id="mta_name" type="text" class="form-control" name="mta_name" value="{{ old('mta_name') }}" required>

                                @if ($errors->has('mta_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('mta_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('time_zone') ? ' has-error' : '' }}">
                            <label for="time_zone" class="col-md-4 control-label">Time Zone</label>

                            <div class="col-md-6">
                                <input id="time_zone" type="text" class="form-control" name="time_zone" value="{{ old('time_zone') }}" required>

                                @if ($errors->has('time_zone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('time_zone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
