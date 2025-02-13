@extends('layouts.main')
@section('content')
    @include('layouts.header')

    <!-- Section Donasi -->
    <section class="py-16 bg-white">
        <div class="container max-w-6xl mx-auto">
            <h2 style="font-family: Poppins;" class="text-4xl font-bold tracking-tight text-center">Campaign Satu Benih</h2>
            <p class="mt-2 text-lg text-center text-gray-600">lihat dan mari lakukan donasi.</p>


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

        </div>
    </section>


    {{-- Included my Footer here --}}
    @include('layouts.footer')
@endsection
