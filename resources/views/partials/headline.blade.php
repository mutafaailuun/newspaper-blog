<div class="flex justify-items-sctretch">
    <div class="w-9/12 mx-4 border-r-2 border-gray-300 pr-8">
        <img src="/img/holy-quran.jpg" alt="girl holding qur'an" class="w-full rounded-md max-w-5xl mx-auto">
        <h1 class="font-sprat-reg text-2xl text-justify my-2">Tiga Amalan Penghapus Kesalahan dan Pengangkat Derajat
        </h1>
        <p class="font-roboto font-thin my-1">Setiap manusia pasti tidak pernah luput dari salah dan dosa,
            meskipun demikian,
            bukan
            berarti
            manusia harus
            pesimis terhadap takdir Allah Swt., sebab rahmat Allah Swt. sangat luas dan di balik kesalahan manusia
            selalu ada hikmahnya.
        </p>
        <ul class="flex justify-between">
            <li class="font-sprat-reg font-medium">
                <a href="">Feb 11 23</a>
            </li>
            <li class="font-sprat-reg">
                <a href="">By: Jaliel</a>
            </li>
        </ul>
    </div>

    <div class="w-3/12 mx-4">
        @foreach ($blogs as $post)
            <div class="mb-5">
                <a href="/blog/{{ $post->slug }}">
                    <img src="img/{{ $post->imageUrl }}.jpg" alt="" class="w-full rounded-xl"></a>
                <a href="/blog/{{ $post->slug }}">
                    <h1 class="font-sprat-reg text-lg text-justify my-2">{{ $post->title }}
                    </h1>
                </a>
                <p class="font-roboto font-thin text-sm text-justify my-1">{{ $post->article }}
                </p>
                <ul class="flex justify-between">
                    <li class="font-sprat-reg font-light text-sm text-gray-700">
                        <a href="">{{ $post->created_at->format('d M Y') }}</a>
                    </li>
                    <li class="font-sprat-reg font-light text-sm text-gray-700">
                        <a href="">By: {{ $post->user->name }}</a>
                    </li>
                </ul>
            </div>
        @endforeach
    </div>
