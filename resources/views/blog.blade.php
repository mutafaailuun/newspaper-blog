@extends('layouts.main')

@section('container')
    <div class="container">
        <h1 class="font-sprat-reg text-7xl">Blog</h1>
        <div class="my-5 py-2 border-y-2 border-gray-300 flex justify-between">
            <h3 class="font-sprat-reg text-2xl">TODAY'S TRENDING</h3>
            <a href="#" class="underline underline-offset-2 font-sprat-reg pr-4">View All</a>
        </div>
        {{-- BLOG'S ARTICLE --}}
        <div class="flex items-center justify-between -mx-8">
            <div class=" w-4/12 mx-8">
                <img src="/img/holy-quran.jpg" alt="Alquran" class="rounded-xl">
                <h3 class="font-sprat-reg text-xl my-2">Tiga Amalan Penghapus Kesalahan dan Pengangkat Derajat
                </h3>
                <ul class="flex justify-between">
                    <li class="font-sprat-reg font-light text-sm text-gray-700">
                        <a href="">Feb 11 23</a>
                    </li>
                    <li class="font-sprat-reg font-light text-sm text-gray-700">
                        <a href="">By: Farhan Fadlurohman</a>
                    </li>
                </ul>
            </div>
            <div class="w-4/12 mx-8 justify-start">
                <img src="/img/girl.jpg" alt="Alquran" class=" rounded-xl">
                <h3 class="font-sprat-reg text-xl my-2">Memahami Yang Tak Tersampaikan
                </h3>
                <ul class="flex justify-between">
                    <li class="font-sprat-reg font-light text-sm text-gray-700">
                        <a href="">Feb 11 23</a>
                    </li>
                    <li class="font-sprat-reg font-light text-sm text-gray-700">
                        <a href="">By: Farhan Fadlurohman</a>
                    </li>
                </ul>
            </div>
            <div class="w-4/12 mx-8">
                <img src="/img/masjid.jpg" alt="Alquran" class="rounded-xl">
                <h3 class="font-sprat-reg text-xl my-2">Kas Masjid Sebagai Fungsi Sosial dan Ekonomi Masyarakat

                </h3>
                <ul class="flex justify-between">
                    <li class="font-sprat-reg font-light text-sm text-gray-700">
                        <a href="">Feb 11 23</a>
                    </li>
                    <li class="font-sprat-reg font-light text-sm text-gray-700">
                        <a href="">By: Farhan Fadlurohman</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection
