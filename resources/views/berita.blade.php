@extends('layouts.main')
@section('content')
    @include('layouts.header')

    <!-- Section Donasi -->
    <section class="py-16 bg-white">
        <div class="container max-w-6xl mx-auto">
            <h2 style="font-family: Poppins;" class="text-4xl font-bold tracking-tight text-center">Berita Satu Benih</h2>
            <p class="mt-2 text-lg text-center text-gray-600">lihat dan baca berbagai kegiatan.</p>

            <div class="grid grid-cols-4 gap-8 mt-10 sm:grid-cols-8 lg:grid-cols-12 sm:px-8 xl:px-0">
                @foreach ($berita as $post)
                    <div
                        class="bg-green-50 relative border-2 border-green-300 rounded-xl shadow-green-700 shadow-lg flex flex-col items-center justify-between col-span-4 px-8 space-y-4 overflow-hidden">

                        <div class="w-96">
                            <img src="https://source.unsplash.com/400x200/?{{ $post->title }}" class="card-img-top"
                                onerror="this.onerror=null;this.src='https://picsum.photos/400/200?random={{ $post->slug }}';">
                            <h2 class="font-bold text-xl text-center mt-6">
                                <h2 class="font-bold text-xl text-center mt-6"><a href="/berita/{{ $post->slug }}"
                                        class="hover:no-underline">
                                        {{ $post->title }}
                                    </a>
                                </h2>
                            </h2>
                        </div>

                        <p>by {{ $post->user->name }}</p>
                        <p> {{ $post->created_at->diffForHumans() }}</p>
                        <p class="text-base text-center">{!! Str::limit($post->excerpt, 75) !!}.</p>
                        <br>
                    </div>
                @endforeach
            </div>

        </div>
    </section>


    {{-- Included my Footer here --}}
    @include('layouts.footer')
@endsection
