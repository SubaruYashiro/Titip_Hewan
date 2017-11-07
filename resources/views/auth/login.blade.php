@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row"> 
        <div class="col m6 offset-m3">
            <div class="card">
                <div class="card-content">
                    <span class="card-title center">Login</span>
                    <div class="divider"></div>
                    <div class="row">
                        <form method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}
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

                            <div class="col s12">
                                <input id="test5" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label for="test5">Remember Me</label>
                            </div>

                            <div class="col s12 button">
                                <button type="submit" class="btn waves-effect waves-light btn light-blue darken-1">
                                    Login
                                </button>
                                <a href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection