@extends('layouts.main')
@section('container')
    <div class="container w-max">
        <h1>Post Category: {{ $category }}</h1>
        @foreach ($posts as $post)
            <div class="mb-5">

                <img src="/img/{{ $post->imageUrl }}.jpg" alt="" class="w-full rounded-xl">

                <h1 class="font-sprat-reg text-lg text-justify my-2">{{ $post->title }}
                </h1>
                <p>{{ $post->excerpt }}<a href="/blog/{{ $post->slug }}" class="text-amber-900"> Read more...</a></p>

                <p class="font-roboto font-thin text-sm text-justify my-1">{{ $post->article }}
                </p>
                <ul class="flex justify-between">
                    <li class="font-sprat-reg font-light text-sm text-gray-700">
                        <a href="">{{ $post->created_at->format('d M Y') }}</a>
                    </li>
                    <li class="font-sprat-reg font-light text-sm text-gray-700">
                        <a href="">By: {{ $post->author }}</a>
                    </li>
                </ul>
            </div>
        @endforeach
    </div>
@endsection
