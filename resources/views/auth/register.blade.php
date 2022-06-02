@extends('layouts.app')

@section('content')
    <div class="container" id="register">
        <div class="row justify-content-center">
            <div class="col">
                <div class="row">
                    <div class="col-md-6 display-center-y">
                        {{-- <div class="card">
                            <div class="card-header">{{ __('Register') }}</div>

                            <div class="card-body"> --}}
                        <div class="row w-100 display-center-x">
                            <div class="col-md-10">
                                <h3 class=" text-center">{{ __('Registration') }}</h3>
                                <form method="POST" action="{{ route('register') }}" class="mt-3">
                                    @csrf

                                    <div class="row mb-3 display-center-x">
                                        {{-- <label for="name"
                                            class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label> --}}

                                        <div class="col-md-6">
                                            <input id="firstname" type="text"
                                                class="form-control @error('firstname') is-invalid @enderror" name="firstname"
                                                value="{{ old('firstname') }}" required autocomplete="firstname" autofocus
                                                placeholder="First Name">

                                            @error('firstname')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3 display-center-x">
                                        {{-- <label for="name"
                                            class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label> --}}

                                        <div class="col-md-6">
                                            <input id="lastname" type="text"
                                                class="form-control @error('lastname') is-invalid @enderror" name="lastname"
                                                value="{{ old('lastname') }}" required autocomplete="lastname" autofocus
                                                placeholder="Last Name">

                                            @error('lastname')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    

                                    <div class="row mb-3 display-center-x">
                                        {{-- <label for="email"
                                            class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label> --}}

                                        <div class="col-md-6">
                                            <input id="email" type="email"
                                                class="form-control @error('email') is-invalid @enderror" name="email"
                                                value="{{ old('email') }}" required autocomplete="email"
                                                placeholder="Email">

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3 display-center-x">
                                        {{-- <label for="name"
                                            class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label> --}}

                                        <div class="col-md-6">
                                            <input id="username" type="text"
                                                class="form-control @error('username') is-invalid @enderror" name="username"
                                                value="{{ old('username') }}" required autocomplete="username" autofocus
                                                placeholder="Username">

                                            @error('username')
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
                                                required autocomplete="new-password"
                                                placeholder="Password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3 display-center-x">
                                        {{-- <label for="name"
                                            class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label> --}}

                                        <div class="col-md-6">
                                            <input id="gender" type="text"
                                                class="form-control @error('gender') is-invalid @enderror" name="gender"
                                                value="{{ old('gender') }}" required autocomplete="gender" autofocus
                                                placeholder="Gender">

                                            @error('gender')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3 display-center-x">
                                        {{-- <label for="name"
                                            class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label> --}}

                                        <div class="col-md-6">
                                            <input id="birthday" type="text"
                                                class="form-control @error('birthday') is-invalid @enderror" name="birthday"
                                                value="{{ old('birthday') }}" required autocomplete="birthday" autofocus
                                                placeholder="Birthday">

                                            @error('birthday')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    {{-- <div class="row mb-3 display-center-x">
                                        <label for="password-confirm"
                                            class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                                        <div class="col-md-6">
                                            <input id="password-confirm" type="password" class="form-control"
                                                name="password_confirmation" required autocomplete="new-password"
                                                placeholder="Confirm Password">
                                        </div>
                                    </div> --}}

                                    <div class="row mb-0 display-center-x">
                                        <div class="col-md-6 text-center">
                                            <button type="submit" class="btn crv-25 px-5">
                                                {{ __('SUBMIT') }}
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        {{-- </div>
                </div> --}}
                    </div>
                    <div class="col-md-6">
                        <img src="img/bg3 1.png" alt="" class="img-fluid bg">

                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
