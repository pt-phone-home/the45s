@extends('master')

@section('title')

@endsection

@section('pageDescription')

@endsection

@section('content')
<div class="h-30r flex items-center justify-start about-hero">
    <h2 class="font-fancy text-gray-100 text-4xl z-10 mb-10 pl-8">
        Who are the 45s?
    </h2>
</div>
<div class="bg-g1 pb-10">
    <div class="container mx-auto flex flex-wrap">
        <div class="w-full md:w-1/2">
            <div class="h-full w-full flex flex-col justify-center">
                <h2 class="font-fancy  text-orange-400 text-3xl mb-4">About Us</h2>
                <p class="p-2 leading-normal font-display">The 45s are a dublin based weddings & events band formed in 2016. Our musicians are passionate about creating memorable events. Their talent and experience guarantees that every 45s event is seamless, so couples & clients can focus on partying rather than stressing over the details.</p>
            </div>
        </div>
        <div class="w-full md:w-1/2 z-10">
            <div class="w-full h-full flex justify-end -mt-8">
                <img src="/images/wedding band Ireland band members.jpg" alt="" class="w-3/4 h-20r object-cover border-4 border-orange-400">
            </div>

        </div>
    </div>
</div>
<div class="-mt-6 bg-g1">
    <div class="container mx-auto ">
        <div class="flex flex-row justify-center">
            <a href="{{ route('contact') }}" class="w-15r text-center px-6 py-4 text-2xl text-orange-400 bg-gray-900 hover:text-gray-900 hover:bg-orange-400">Contact Us</a>
        </div>
    </div>
</div>
<div class="bg-gray-100 -mt-6 pt-12">
    <div class="container mx-auto flex flex-wrap">
        <div class="w-full md:w-1/2 p-4">
            <div class="w-full h-full">
                <img src="/images/wedding band Ireland about the 45s.jpg" alt="" class="h-full w-auto object-cover">
            </div>
        </div>
        <div class="w-full md:w-1/2 p-4 ">
            <div class="flex flex-col">
                <div>
                    <h2>Our Band</h2>
                    <ul>
                        <li>Memeber1</li>
                        <li>Memeber2</li>
                        <li>Memeber3</li>
                        <li>Memeber4</li>
                        <li>Memeber5</li>
                        <li>Memeber6</li>
                    </ul>
                </div>
                <div class="mt-2">
                    <h2>Venues</h2>
                    <ul>
                        <li>Venue1</li>
                        <li>Venue2</li>
                        <li>Venue3</li>
                        <li>Venue4</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
