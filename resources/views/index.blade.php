@extends('layouts.main')
@section('content')
    @include('layouts.header')
    <!-- Section 1 -->
    <section class="bg-white" style="font-family: Poppins;">

        <!-- Main Hero Content -->
        <div class="w-full bg-no-repeat bg-center bg-cover max-w-xl py-24 md:py-32 mx-auto md:max-w-none md:text-center"
            style="background-image: url('images/carousel 1.png');">
            <h1
                class="text-4xl text-center font-bold leading-10 px-8 tracking-tight text-gray-900 md:leading-none md:text-center md:text-7xl">
                <span class="inline md:block">Donasi untuk Masyarakat</span> <span
                    class="relative mt-2 text-transparent bg-clip-text bg-gradient-to-br from-green-900 to-green-500 md:inline-block">Mulai
                    dari Satu Benih</span>
            </h1>
            <div
                class="font-semibold text-base mx-8 md:mx-auto mt-8 leading-5 text-gray-700 md:mt-12 max-w-lg text-center md:text-lg">
                mari lakukan perubahan dengan mulai membangun kepedulian terhadap lingkungan sekitar anda.
            </div>

            <div class="flex flex-col items-center mt-12 text-center">
                <span class="relative inline-flex w-full md:w-auto">
                    <a href="{{ route('register') }}" type="button"
                        class="inline-flex items-center justify-center md:w-auto w-full mx-20 px-8 py-4 md:text-base font-semibold leading-6 text-white bg-gradient-to-r from-green-500 to-green-800 rounded-full hover:from-green-700 hover:to-green-950 hover:text-white hover:no-underline focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-900">
                        Donasi Sekarang
                    </a>
                </span>
            </div>
        </div>
        <!-- End Main Hero Content -->

        <!-- Section 1 -->
        <section class="px-2 py-16 md:py-24 bg-green-50 md:px-0">
            <div class="container items-center max-w-6xl px-4 mx-auto md:px-6">
                <div class="flex flex-wrap items-center sm:-mx-3">
                    <div class="w-full md:w-1/2">
                        <div
                            class="w-full pb-6 space-y-6 sm:max-w-md lg:max-w-lg md:space-y-4 lg:space-y-8 xl:space-y-9 sm:pr-5 lg:pr-0 md:pb-0">
                            <h1
                                class="text-4xl font-bold tracking-tight text-gray-900 sm:text-5xl md:text-4xl lg:text-5xl xl:text-6xl">
                                <span class="inline md:block">Membantu Semua Untuk</span>
                                <span
                                    class="relative mt-2 text-transparent bg-clip-text text-green-600 md:inline-block">Membuat
                                    Perubahan!</span>
                            </h1>
                            <p class="my-6 text-lg text-gray-900"> Mari bantu sekitar
                                meskipun hanya sedikit.</p>

                            <div class="relative flex flex-row md:flex-row space-x-2">
                                <a href="{{ route('register') }}"
                                    class="flex items-center font-normal text-center w-1/2 md:w-auto px-5 py-3 mb-3 text-lg text-white hover:text-white hover:no-underline bg-gradient-to-r from-green-900 to-green-600 rounded-md md:mb-0 hover:from-green-600 hover:to-green-800">
                                    Mulai Donasi
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ml-1" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <line x1="5" y1="12" x2="19" y2="12"></line>
                                        <polyline points="12 5 19 12 12 19"></polyline>
                                    </svg>
                                </a>
                                <a href="/tentang-kami"
                                    class="items-center text-center font-semibold w-1/2 md:w-auto px-5 py-3 mb-3 text-lg text-gray-700 hover:text-gray-900 hover:no-underline bg-white hover:bg-green-200 rounded-md md:mb-0">
                                    Tentang Kami
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="w-full md:w-1/2">
                        <div class="w-full h-auto overflow-hidden">
                            <img src="images/svg/undraw_collaborators.svg">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Campaign Terbaru -->
        <section class="px-2 py-16 md:py-24 bg-white">
            <div class="container max-w-6xl mx-auto">
                <h1
                    class="text-3xl text-center font-bold leading-10 px-4 tracking-tight text-gray-900 md:leading-none md:text-center md:text-4xl">
                    Campaign Terbaru
                </h1>
                <p class="mt-4 text-lg text-center text-gray-900">Lihat dan berikan donasi kepada yang
                    membutuhkan.</p>
                <div class="grid grid-cols-4 gap-8 mt-10 sm:grid-cols-8 lg:grid-cols-12 sm:px-8 xl:px-0">
                    @foreach ($campaigns as $campaign)
                        <div
                            class="bg-green-50 relative border-2 border-green-300 rounded-xl shadow-green-700 shadow-lg flex flex-col items-center justify-between col-span-4 px-8 space-y-4 overflow-hidden">
                            <div class="w-96">
                                <img src="https://source.unsplash.com/400x200/?{{ $campaign->slug }}" class="card-img-top"
                                    onerror="this.onerror=null;this.src='https://picsum.photos/400/200?random={{ $campaign->id }}';">
                                <h2 class="font-bold text-xl text-center mt-6"><a
                                        href="{{ route('campaign.show', $campaign->id) }}" class="hover:no-underline">
                                        {{ $campaign->title }}
                                    </a>
                                </h2>
                            </div>
                            <p>{{ $campaign->created_at->diffForHumans() }}</p>
                            <p class="text-base text-center">{!! Str::limit($campaign->description, 70) !!}.</p>
                            @php
                                $randomAmount = rand(35, $campaign->amount);
                                $progressPercentage = ($randomAmount / $campaign->amount) * 100;
                            @endphp
                            <div class="shadow w-full bg-white rounded-full">
                                <div class="bg-green-700 rounded-full text-xs leading-none py-1 text-center text-white"
                                    style="width: {{ $progressPercentage }}%">
                                </div>
                            </div>
                            <p><b>{{ $randomAmount }} IDR</b> raised of <b>{{ $campaign->amount }} IDR</b></p>
                            <br>
                        </div>
                    @endforeach
                </div>

                <div class="flex flex-col items-center mt-12 text-center">
                    <span class="relative inline-flex w-full md:w-auto">
                        <a href="/donasi" type="button"
                            class="inline-flex items-center justify-center md:w-auto w-full mx-16 px-6 py-4 md:text-base font-semibold leading-6 text-white bg-gradient-to-r from-green-500 to-green-800 rounded-full hover:from-green-700 hover:to-green-950 hover:text-white hover:no-underline focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-900">
                            Campaign Lainnya
                        </a>
                    </span>
                </div>
            </div>
        </section>

        <!-- Berita Terbaru -->
        <section class="px-2 py-16 md:py-24 bg-green-50">
            <div class="container max-w-6xl mx-auto">
                <h1
                    class="text-3xl text-center font-bold leading-10 px-4 tracking-tight text-gray-900 md:leading-none md:text-center md:text-4xl">
                    Berita Terbaru
                </h1>
                <p class="mt-4 text-lg text-center text-gray-900">Lihat dan baca berbagai kegiatan di Satu Benih.</p>
                <div class="grid grid-cols-4 gap-8 mt-10 sm:grid-cols-8 lg:grid-cols-12 sm:px-8 xl:px-0">
                    @foreach ($posts as $post)
                        <div
                            class="bg-white relative border-2 border-green-300 rounded-xl shadow-green-700 shadow-lg flex flex-col items-center justify-between col-span-4 px-8 space-y-4 overflow-hidden">

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
                            <p>{{ $post->created_at->diffForHumans() }}</p>
                            <p class="text-base text-center">{!! Str::limit($post->excerpt, 75) !!}.</p>
                            <br>
                        </div>
                    @endforeach
                </div>
                <div class="flex flex-col items-center mt-12 text-center">
                    <span class="relative inline-flex w-full md:w-auto">
                        <a href="/berita" type="button"
                            class="inline-flex items-center justify-center md:w-auto w-full mx-16 px-6 py-4 md:text-base font-semibold leading-6 text-white bg-gradient-to-r from-green-500 to-green-800 rounded-full hover:from-green-700 hover:to-green-950 hover:text-white hover:no-underline focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-900">
                            Berita Lainnya
                        </a>
                    </span>
                </div>
        </section>

        <!-- Section 1 -->
        <section class="py-16 leading-7 text-gray-900 bg-white sm:py-12 md:py-16 lg:py-24">
            <div class="container max-w-6xl px-6 mx-auto border-solid">
                <div
                    class="flex flex-col items-start leading-7 text-gray-900 border-0 border-gray-200 lg:items-center lg:flex-row px-4">
                    <div class="box-border flex-1 text-center border-solid sm:text-left">
                        <h2
                            class="m-0 text-3xl md:font-semibold font-bold leading-tight tracking-tight text-left text-black border-0 border-gray-200 sm:text-4xl">
                            Siap Menciptakan Perubahan?
                        </h2>
                        <p class="my-6 md:text-xl text-lg text-left text-gray-900 border-0 border-gray-200 sm:text-1xl">
                            Satu Benih adalah tempat yang tepat untuk menciptakan perubahan dengan menggalang dana, baik
                            secara perorangan, kelompok, atau organisasi.
                        </p>
                    </div>
                    <a href="{{ route('register') }}"
                        class="flex items-center text-center text-lg w-full md:w-auto px-6 justify-center py-4 mb-4 mx-auto text-white hover:text-white hover:no-underline bg-gradient-to-r from-green-900 to-green-600 rounded-md hover:from-green-600 hover:to-green-800">
                        Mulai Satu Benihmu
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ml-2" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                            <polyline points="12 5 19 12 12 19"></polyline>
                        </svg>
                    </a>
                </div>
            </div>
        </section>

        <!-- Section 1 -->
        <section class="flex items-center justify-center py-16 bg-green-50 rounded-2xl min-w-screen">
            <div class="max-w-6xl px-4 mx-auto bg-green-50 md:px-16">
                <div class="flex flex-col items-center lg:flex-row">
                    <div class="flex flex-col items-start justify-center w-full h-full px-6 mb-10 lg:mb-0 lg:w-1/2">
                        <h2 style="font-family: Poppins;"
                            class="text-4xl font-semibold leading-10 tracking-tight text-gray-900 sm:text-5xl sm:leading-none md:text-6xl lg:text-5xl xl:text-6xl">
                            Testimonial</h2>
                        <p class="my-6 md:text-xl text-lg text-left text-gray-900 border-0 border-gray-200 sm:text-1xl">
                            Jangan hanya percaya begitu saja, baca secara lengkap studi
                            kasus dan testimoni dari para pengguna satu benih.
                        </p>

                        <a href="{{ route('register') }}"
                            class="flex items-center justify-center text-lg w-full md:w-auto px-6 py-4 mb-4 mb:mx-auto text-white hover:text-white hover:no-underline bg-gradient-to-r from-green-900 to-green-600 rounded-md hover:from-green-600 hover:to-green-800">
                            Mulai Donasi Sekarang
                        </a>
                    </div>

                    {{-- Testimoni --}}
                    <div class="w-full lg:w-1/2">
                        <blockquote
                            class="flex items-center justify-between w-full col-span-1 p-4 md:p-8 bg-white rounded-lg shadow">
                            <div class="flex flex-col md:pr-4 pr-2">
                                <div class="relative pl-4 md:pl-12">
                                    <svg class="absolute left-0 md:w-10 md:h-10 w-4 h-4 text-green-500 fill-current"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 125">
                                        <path
                                            d="M30.7 42c0 6.1 12.6 7 12.6 22 0 11-7.9 19.2-18.9 19.2C12.7 83.1 5 72.6 5 61.5c0-19.2 18-44.6 29.2-44.6 2.8 0 7.9 2 7.9 5.4S30.7 31.6 30.7 42zM82.4 42c0 6.1 12.6 7 12.6 22 0 11-7.9 19.2-18.9 19.2-11.8 0-19.5-10.5-19.5-21.6 0-19.2 18-44.6 29.2-44.6 2.8 0 7.9 2 7.9 5.4S82.4 31.6 82.4 42z">
                                        </path>
                                    </svg>
                                    <p class="mt-2 text-sm text-gray-600 sm:text-base lg:text-md xl:text-base">Lorem ipsum
                                        dolor amet consectetur adipisicing elit. Amet, quvo virco.</p>
                                </div>
                                <div class="relative pl-4 md:pl-12">
                                    <h3 class="mt-3 text-xs font-medium text-gray-800 md:text-base xl:text-base">
                                        Jane Cooper
                                        <span class="mt-1 text-xs text-gray-500">- CEO SomeCompany</span>
                                    </h3>
                                </div>
                            </div>

                            <img class="flex-shrink-0 bg-gray-300 rounded-full w-20 h-20 md:w-24 md:h-24 xl:w-32 xl:h-32"
                                src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=4&amp;w=256&amp;h=256&amp;q=60"
                                alt="">
                        </blockquote>

                    </div>
                </div>
            </div>
        </section>

        {{-- Included my Footer here --}}
        @include('layouts.footer')
    @endsection
