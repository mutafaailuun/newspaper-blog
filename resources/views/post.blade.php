@extends('layouts.main')
@section('container')
    <div class="container">
        <div class="flex items-start">
            <div class="w-7/12 mx-2">
                <img src="/img/{{ $post->imageUrl }}.jpg" alt="{{ $post->alt }}" class="rounded-2xl">

            </div>
            <div class="w-5/12 mx-2">
                <h1 class="font-sprat-reg text-3xl mb-5">{{ $post->title }}</h1>
                <a href="#">
                    <button class="p-2 bg-teal-800 w-fit text-center rounded-md text-white">By: {{ $post->user->name }}
                    </button>
                </a>
                <a href="/categories/{{ $post->category->slug }}">
                    <button class="p-2 bg-teal-800 w-20 text-center rounded-md text-white">{{ $post->category->name }}
                    </button>
                </a><br>
                {!! $post->body !!}
            </div>
        </div>
    </div>
@endsection
