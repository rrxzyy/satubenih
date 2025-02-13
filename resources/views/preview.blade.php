@extends('layouts.main')
@include('layouts.navigation')
@section('content')
    <section class="text-gray-600 body-font">
        <div class="container mx-auto flex px-5 py-16 md:flex-row flex-col items-center">
            <div
                class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
                <h1 class="title-font sm:text-4xl text-3xl mb-4 font-bold text-gray-900">{{ $campaign->title }}
                </h1>
                <div class="bg-white border-r-4 border-green-400 w-full mb-2">
                    <div>
                        <h1 class="text-gray-600 mb-2 text-sm"><b>Organize by {{ $campaign->user->name }}</b></h1>
                        <p class="text-gray-600 text-sm"><b>{{ $campaign->amount / 2 }} IDR</b> raised of
                            <b>{{ $campaign->amount }} IDR</b>
                        </p>
                    </div>
                </div>
                <p class="mt-8 mb-8 leading-relaxed text-justify">{!! $campaign->description !!}</p>

                <div class="" role="alert">
                    {{-- <p class="text-gray-600 mb-8 text-sm"><b>Organize by</b> {{ Auth::user()->name }}</p> --}}
                    <div class="flex justify-center">
                        <a href="/donate" type="button"
                            class="inline-flex items-center justify-center w-full px-8 py-4 text-base font-bold leading-6 text-white bg-gradient-to-r from-green-500 to-green-800 rounded-full md:w-auto hover:from-green-700 hover:to-green-950 hover:text-white hover:no-underline focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-900">
                            Donasi
                        </a>
                        <!-- Go to www.addthis.com/dashboard to customize your tools -->
                    </div>
                </div>
            </div>
            <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
                <img class="object-cover object-center rounded"
                    src="https://source.unsplash.com/720x720/?{{ $campaign->title }}">
            </div>
        </div>
    </section>
    @include('layouts.footer')
    <!-- Go to www.addthis.com/dashboard to customize your tools -->
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-60660bdb0d2b07ca"></script>
@endsection
