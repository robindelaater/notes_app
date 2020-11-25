@extends('layouts.app')

@section('content')
<div class="w-screen flex justify-center items-center h-screen bg-indigo-100">
    <div class="w-72 bg-white rounded shadow-md px-6 py-6">
        <div class="font-bold text-xl mb-4">{{ __('Login') }}</div>

        <div class="card-body">
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="form-group mb-4">
                    <label for="email" class="text-gray-600">{{ __('E-Mail Address') }}</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="w-full bg-gray-100 p-1 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group mb-4">
                    <label for="password" class="text-gray-600">{{ __('Password') }}</label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="w-full rounded bg-gray-100 p-1 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-6 offset-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-group row my-2">
                    <div class="col-md-8 offset-md-4">
                        <button type="submit" class="bg-indigo-400 rounded px-4 py-2 shadow-sm text-white hover:shadow-md">
                            {{ __('Login') }}
                        </button>
                        or
                        <a href="{{ route('register') }}" type="button" class="bg-indigo-100 rounded px-4 py-2 shadow-sm text-white hover:shadow-md hover:bg-indigo-400">
                            {{ __('Register') }}
                        </a>
                    </div>
                </div>
                @if (Route::has('register'))

                @endif
                @if (Route::has('password.request'))
                    <a class="w-full btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
            </form>
        </div>
    </div>

</div>
@endsection
