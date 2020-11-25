@extends('layouts.app')

@section('content')
<div class="w-screen flex justify-center items-center h-screen bg-indigo-100">
    <div class="w-72 bg-white rounded shadow-md px-6 py-6">
        <div class="font-bold text-xl mb-4">{{ __('Register') }}</div>

        <div class="card-body">
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="form-group mb-4">
                    <label for="name" class="text-gray-600">{{ __('Name') }}</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="w-full bg-gray-100 p-1 @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group mb-4">
                    <label for="email" class="text-gray-600">{{ __('E-Mail Address') }}</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="w-full bg-gray-100 p-1 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                        <input id="password" type="password" class="w-full bg-gray-100 p-1 @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group mb-4">
                    <label for="password-confirm" class="text-gray-600">{{ __('Confirm Password') }}</label>

                    <div class="col-md-6">
                        <input id="password-confirm" type="password" class="w-full bg-gray-100 p-1" name="password_confirmation" required autocomplete="new-password">
                    </div>
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="bg-indigo-400 rounded px-4 py-2 shadow-sm text-white hover:shadow-md">
                            {{ __('Sign up') }}
                        </button>
                        or
                        <a href="{{ route('login') }}" class="bg-indigo-100 rounded px-4 py-2 shadow-sm text-white hover:shadow-md hover:bg-indigo-400">
                            {{ __('Login') }}
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
