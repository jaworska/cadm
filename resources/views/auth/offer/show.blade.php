@extends('auth.app')

@section('content')
    <div class="my-3 p-3 bg-white rounded shadow-sm">
        <div class="row justify-content-between border-bottom border-gray pb-2 px-3 mb-0">
            <h6 class="">Kandydaci</h6>
        </div>
        <ul>
            @foreach($offer -> cvs as $cv)
                <li class="text-muted p-3 row">
                    <div class="col-md-12 ">
                        <div class="row justify-content-between">
                            <h3 class="d-block text-gray-dark col">{{ $cv -> name }}</h3>
                        </div>
                    </div>
                    <div class="pb-3 mb-0 border-bottom border-gray col-md-12">
                        <p>{{ $cv -> name }}</p>
                        <p>{{ $cv -> phone }}</p>
                        <p>{{ $cv -> email }}</p>
                        <a class="btn btn-primary" href="{{ $cv -> file }}">CV</a>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
@endsection