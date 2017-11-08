@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col m6 offset-m3">
            <div class="card email">
                <div class="card-content">
                    <span class="card-title center">Reset Password</span>
                    <div class="divider"></div>
                    <div class="row">
                        <form method="POST" action="{{ route('password.email') }}">
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

                            <div class="col s12 margin-top-add-1">
                                <button type="submit" class="btn waves-effect waves-light btn light-blue darken-1">
                                    Send Password Reset Link
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
