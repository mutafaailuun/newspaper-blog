@extends('layouts.main')

@section('container')
    <div class="container">
        <h1>{{ $name }}</h1>
        <h3>{{ $email }}</h3>
        <img src="img/{{ $image }}" alt={{ $name }} width="200" class="rounded-lg">
    </div>
@endsection
