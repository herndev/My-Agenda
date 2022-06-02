@extends('layouts.app')

@section('content')
    <div class="container" id="mywelcome">
        <div class="row justify-content-center">
            <div class="col">
                <div class="row">
                    <div class="col-md-6 section display-center-y hidden-md">
                        <img src="img/home_bg.png" alt="" class="img-fluid bg">
                    </div>
                    <div class="col-md-6 section crv-25 start display-center">
                        <div class="text-center">
                            <h1 class="font-weight-bold">
                                Welcome to My Agenda
                            </h1>
                            @guest
                                <a href="{{ route('login') }}">
                                    <button class="crv-25 px-5 mt-4 text-white">
                                        <h1>Start</h1>
                                    </button>
                                </a>
                            @else
                                <a href="{{ route('home') }}">
                                    <button class="crv-25 px-5 mt-4 text-white">
                                        <h1>Dashboard</h1>
                                    </button>
                                </a>
                            @endguest
                        </div>
                    </div>
                </div>
                {{-- <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div> --}}
            </div>
        </div>
    </div>
@endsection
