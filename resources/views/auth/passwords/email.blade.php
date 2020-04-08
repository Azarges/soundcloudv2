@extends('layouts.app')

@section('content')
<div class="main-box">
    <div class="box">
        <h2>{{ __('Reset Password') }}</h2>
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <form method="POST" action="{{ route('password.email') }}">
            @csrf
            <input type="hidden" name="token" value="{{ $token }}">
            <div class="inputBox">
                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                <label for="email">{{ __('E-Mail Address') }}</label>
                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                @endif
            </div>
            <input type="submit" name="" value="{{ __('Send Password Reset Link') }}">
        </form>
    </div>
</div>
@endsection
