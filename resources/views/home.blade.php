@extends('layouts.app')

@section('content')
    <div class="container" id="home">
        <div class="row justify-content-center">
            <div class="col">
                <div class="row">
                    <div class="col-md-6 pt-3">
                        @if (empty($id))
                            <form action="{{ route('agenda') }}" method="post" class="text-center">
                                @csrf
                                <div class="form-group">
                                    {{-- <label for="title">Title</label> --}}
                                    <input type="text" class="form-control" id="title" name="title" placeholder="Title">
                                </div>
                                <div class="form-group mt-3">
                                    {{-- <label for="exampleFormControlTextarea1">Example textarea</label> --}}
                                    <textarea class="form-control" id="description" name="description" rows="10" placeholder="Description"></textarea>
                                </div>
                                <button class="crv-25 px-5 pt-2 mt-4">
                                    <h5>ADD</h5>
                                </button>
                            </form>
                        @else
                            <form action="{{ route('agenda') }}/{{ $id }}" method="post" class="text-center">
                                @csrf
                                @method('put')
                                <div class="form-group">
                                    {{-- <label for="title">Title</label> --}}
                                    <input type="text" class="form-control" id="id" name="id" placeholder="ID"
                                        value="{{ $id }}" hidden>
                                </div>
                                <div class="form-group">
                                    {{-- <label for="title">Title</label> --}}
                                    <input type="text" class="form-control" id="title" name="title" placeholder="Title"
                                        value="{{ $editagenda->title }}">
                                </div>
                                <div class="form-group mt-3">
                                    {{-- <label for="exampleFormControlTextarea1">Example textarea</label> --}}
                                    <textarea class="form-control" id="description" name="description" rows="10" placeholder="Description">{{ $editagenda->description }}</textarea>
                                </div>
                                <button class="crv-25 px-5 pt-2 mt-4">
                                    <h5>SAVE</h5>
                                </button>
                            </form>
                        @endif

                    </div>
                    <div class="col-md-6 pt-3">
                        <div class="card" id="agendas">
                            <div class="card-header">{{ __('Date:') }} ( {{ $time }} )</div>

                            <div class="card-body">
                                @foreach ($agendas as $agenda)
                                    <div
                                        class="w-100 pl-3 bg-white mt-2 crv-8 br-1 display-space-between display-center-y ">
                                        {{ $agenda->title }}

                                        <div class="display-inline-block">
                                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            </a>

                                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item"
                                                    href="{{ route('agenda') }}/{{ $agenda->id }}"
                                                    onclick="event.preventDefault();
                                                                                                     document.getElementById('edit-form-{{ $agenda->id }}').submit();">
                                                    {{ __('Edit') }}
                                                </a>
                                                <a class="dropdown-item"
                                                    href="{{ route('agenda') }}/{{ $agenda->id }}"
                                                    onclick="event.preventDefault();
                                                                                                     document.getElementById('delete-form-{{ $agenda->id }}').submit();">
                                                    {{ __('Delete') }}
                                                </a>

                                                <form id="delete-form-{{ $agenda->id }}"
                                                    action="{{ route('agenda') }}/{{ $agenda->id }}" method="post"
                                                    class="d-none">
                                                    @csrf
                                                    @method('delete')
                                                </form>
                                                <form id="edit-form-{{ $agenda->id }}" action="{{ route('home') }}/{{ $agenda->id }}"
                                                    method="get" class="d-none">
                                                    @csrf
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
