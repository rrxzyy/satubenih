@extends('layouts.main')
@section('content')
    @include('layouts.header')

    <!-- Section Donasi -->
    <section class="py-16 bg-white">
        <div class="container max-w-6xl mx-auto">
            <div class="text-center">
                <h2 style="font-family: Poppins;" class="text-4xl font-bold tracking-tight text-center">{{ $post->title }}
                </h2>
                <p class="mb-2 mt-2"><b>by {{ $post->user->name }}</b></p>
                <p class="mb-2 mt-2">{{ $post->created_at->diffForHumans() }}</p>
            </div>
            <div class="px-32">
                <div class="mt-8 mb-8 flex flex-col items-center text-center">
                    <img src="https://source.unsplash.com/1200x400/?{{ $post->title }}" class="rounded-lg">
                </div>
                <div class="text-center">
                    <p class="text-base text-justify mb-8 mt-8">{!! $post->body !!}.</p>
                </div>
            </div>

            <div class="flex flex-col items-center mt-12 text-center">
                <span class="relative inline-flex w-full md:w-auto">
                    <a href="/berita" type="button"
                        class="inline-flex items-center justify-center w-full px-6 py-3 text-base font-bold leading-6 text-white bg-gradient-to-r from-green-500 to-green-800 rounded-full md:w-auto hover:from-green-700 hover:to-green-950 hover:text-white hover:no-underline focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-900">kembali
                        ke halaman berita
                    </a>
                </span>
            </div>

        </div>
    </section>


    {{-- Included my Footer here --}}
    @include('layouts.footer')
@endsection
