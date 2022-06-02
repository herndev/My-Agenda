@extends('layouts.app')

@section('content')
    <div class="container" id="login">
        <div class="row justify-content-center">
            <div class="col">
                <div class="row">
                    <div class="col-md-6 text-center hidden-md">
                        <h1>Welcome Back</h1>
                        <img src="img/bg1 1.png" alt="" class="img-fluid bg">
                    </div>
                    <div class="col-md-6 display-center-y">
                        {{-- <div class="card">
                            <div class="card-header">{{ __('Login') }}</div>

                            <div class="card-body"> --}}
                        <div class="row w-100 display-center-x">
                            <div class="col-md-10">
                                <h3 class=" text-center">{{ __('Login') }}</h3>
                                <form method="POST" action="{{ route('login') }}" class="mt-3">
                                    @csrf

                                    <div class="row mb-3 display-center-x">
                                        {{-- <label for="email"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label> --}}

                                        <div class="col-md-6">
                                            <input id="email" type="email"
                                                class="form-control @error('email') is-invalid @enderror" name="email"
                                                value="{{ old('email') }}" required autocomplete="email" autofocus
                                                placeholder="Email">

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3 display-center-x">
                                        {{-- <label for="password"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label> --}}

                                        <div class="col-md-6">
                                            <input id="password" type="password"
                                                class="form-control @error('password') is-invalid @enderror" name="password"
                                                required autocomplete="current-password" placeholder="Password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    {{-- <div class="row mb-3 display-center-x">
                                        <div class="col-md-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="remember"
                                                    id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                <label class="form-check-label" for="remember">
                                                    {{ __('Remember Me') }}
                                                </label>
                                            </div>
                                        </div>
                                    </div> --}}

                                    <div class="row mb-0 display-center-x  text-center">
                                        <div class="col-md-8">
                                            <button type="submit" class="btn crv-25 px-5">
                                                {{ __('LOGIN') }}
                                            </button>

                                            {{-- @if (Route::has('password.request'))
                                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                                    {{ __('Forgot Your Password?') }}
                                                </a>
                                            @endif --}}
                                        </div>
                                    </div>
                                    <div class="row mb-0 display-center-x">
                                        <div class="col-md-6 text-center">
                                            <a class="nav-link mt-5 text-dark"
                                                href="{{ route('register') }}">{{ __('Create an Account?') }}</a>
                                            {{-- @if (Route::has('password.request'))
                                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                                    {{ __('Forgot Your Password?') }}
                                                </a>
                                            @endif --}}
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        {{-- </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
