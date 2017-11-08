@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row"> 
        <div class="col m6 offset-m3">
            <div class="card register">
                <div class="card-content">
                <span class="card-title center">Sign Up</span>
                <div class="divider"></div>
                    <div class="row">
                        <form method="POST" action="{{ route('register') }}">
                            {{ csrf_field() }}
                            <div class="input-field col s12">
                                <input id="name" type="text" class="validate{{ $errors->has('name') ? ' invalid' : '' }}" name="name" value="{{ old('email') }}" required autofocus>
                                <label for="name">Name</label>
                                @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                                @endif
                            </div>

                            <div class="input-field col s12">
                                <input id="email" type="email" class="validate{{ $errors->has('email') ? ' invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                                <label for="email">Email</label>
                                @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>

                            <div class="input-field col s12">
                                <input id="password" type="password" class="validate{{ $errors->has('password') ? ' invalid' : '' }}" name="password" required>
                                <label for="password">Password</label>
                                @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                @endif
                            </div>

                            <div class="input-field col s12">
                                <label for="password-confirm" class="validate">Confirm Password</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>

                            <div class="col s12 margin-top-add-1">
                                <button type="submit" class="btn waves-effect waves-light btn light-blue darken-1">
                                    Register
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection