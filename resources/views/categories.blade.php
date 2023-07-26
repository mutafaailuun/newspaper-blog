@extends('layouts.main')
@section('container')
    <div class="container w-max">
        @foreach ($categories as $category)
            <ul>
                <a href="/categories/{{ $category->slug }}" class="w-content bg-black">
                    <li class="text-5xl ">{{ $category->name }}</li>
                </a>
            </ul>
        @endforeach
    </div>
@endsection
