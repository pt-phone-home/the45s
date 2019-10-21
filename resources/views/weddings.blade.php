@extends('master')

@section('title')

@endsection

@section('pageDescription')

@endsection

@section('content')
<div class="h-30r flex items-center justify-start wedding-hero">
    <h2 class="font-fancy text-gray-100 text-4xl z-10 mb-10 pl-8">
        Your Wedding -
        Our Pleasure
    </h2>
</div>
<div class="flex justify-center bg-gray-100">
    <div class="container mx-auto flex flex-row flex-wrap z-10">
        <div class="w-full md:w-1/2 p-4 flex items-center justify-center py-10">
            <div class="flex justify-center">
                <h2 class="font-fancy text-3xl text-orange-400 flex justify-center">Love the music <i class="fal fa-waveform text-orange-400 text-5xl ml-5"></i></h2>
                {{-- <p class="mb-4">We pride ourselves on knowing just what to play and when to play it. It isn't enough just to fill your dancefloor - we want you to love the music! </p>
                <p>Every song from the start of the day until the big light comes on can be tailored especially for you. Or, if you prefer, just leave it all up to us.</p> --}}
            </div>
        </div>
        <div class="w-full md:w-1/2">
            <div class="w-full h-full flex justify-end -mt-8">
                <img src="/images/wedding band Ireland the 45s bride and groom.jpg" alt="wedding band Ireland the 45s bride and groom" title="wedding band Ireland the 45s bride and groom" class="w-3/4 h-20r object-cover border-4 border-orange-400">
            </div>
        </div>
    </div>
</div>
<div>
    <div class="container mx-auto flex flex-wrap-reverse py-12">
        <div class="w-full md:w-1/3">
            <div class="w-full h-full flex justify-center items-center">
                <img src="/images/wedding band Ireland the 45s bride and groom.jpg" alt="" class="h-full w-auto object-cover">
            </div>
        </div>
        <div class="w-full md:w-2/3 p-6">
            <div class="w-full h-full flex flex-col">
                <p class="leading-normal bg-gray-200 py-2 border-r-2 border-orange-400 pr-4 border-l-2 pl-4">We pride ourselves on knowing just what to play and when to play it. It isn't enough just to fill your dancefloor - we want you to love the music! Every song from the start of the day until the big light comes on can be tailored especially for you. Or, if you prefer, just leave it all up to us.</p>
                <div class="mt-6 ml-8">
                    <h2 class="font-fancy mb-2">Ceremony Music</h2>
                    <p class="leading-normal">Whether you prefer traditional music, classical songs, or modern tunes, we can work with you to set the perfect tone for your day.</p>
                </div>
                <div class="mt-6 ml-8">
                    <h2 class="font-fancy mb-2">Arrival Drinks / Pre-receptions</h2>
                    <p class="leading-normal">Start the party off right with our easy listening trio to accompany your arrival drinks or pre-reception. This is a great way to make everyone relax and unwind!</p>
                </div>
                <div class="mt-6 ml-8">
                    <h2 class="font-fancy mb-2">Reception</h2>
                    <p class="leading-normal">This is where we really shine - amazing dance parties are how the 45s have earned their fantastic reputation! We pride ourselves on our high energy, flawless performance - it’s all about great preparation and a genuine love for what we do to ensure you have the best night of your life.</p>
                    <p class="leading-normal">Keep the party going right to the death with our DJ</p>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection
