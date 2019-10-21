@extends('master')

@section('title')

@endsection

@section('pageDescription')

@endsection

@section('content')
    <div class="flex flex-col h-35r justify-center items-center bg-indigo-100 hero z-0">
        <h2 class="font-fancy text-orange-500 text-6xl z-10 mb-10">
            You gotta go live with the 45s
        </h2>
        {{-- <div class="z-10 h-5r">
            <img src="/images/party band ireland the 45s.png" alt="party band ireland the 45s" title="/party band ireland the 45s" class="z-10 h-5r object-cover">
        </div> --}}
    </div>
    <div class="flex justify-center bg-g2">
        <div class="container mx-auto flex flex-col items-center mt-12 mb-4 p-2">
            <h1 class="font-fancy text-4xl text-orange-400">The 45s - Get your Party Started!</h1>
            <hr class="w-25r text-center mt-8 z-50 border-b-2 border-gray-900">
        </div>
    </div>
    <div class="flex justify-center w-full bg-g2 pb-20">
        <div class="container mx-auto flex flex-wrap">
            <div class="w-full md:w-1/2 flex justify-center items-center">
                <div class="p-5 w-full h-full flex justify-center flex-row flex-wrap">
                    <div class="p-2 flex w-1/2 h-15r border-transparent border-4 hover:border-orange-400">
                        <img src="/images/party band ireland the 45s dancing.jpg" alt="party band ireland the 45s dancing" title="party band ireland the 45s dancing" class="scale w-full object-cover">
                    </div>
                    <div class="p-2 flex w-1/2 h-15r  border-transparent border-4 hover:border-orange-400">
                        <img src="/images/party band ireland the 45s dancing.jpg" alt="party band ireland the 45s dancing" title="party band ireland the 45s dancing" class="border-transparent scale hover:border-orange-400 hover:border-4 w-full object-cover">
                    </div>
                    <div class="p-2 flex w-1/2 h-15r  border-transparent border-4 hover:border-orange-400">
                        <img src="/images/party band ireland the 45s dancing.jpg" alt="party band ireland the 45s dancing" title="party band ireland the 45s dancing" class="border-transparent scale hover:border-orange-400 hover:border-4 w-full object-cover">
                    </div>
                </div>
            </div>
            <div class="w-full md:w-1/2 flex justify-center items-center">
                <section class="p-5">
                    <p class="font-display text-lg mb-2 leading-normal">A party is nothing without the music. Whether you are preparing to walk down the aisle or you are hosting a private family celebration, the right music will make any event a memorable one.</p>
                    <p class="font-display text-lg mb-2 leading-normal">The 45s have a reputation for thrilling partygoers and packing dance floors. From the start of the celebration until the very last dance of the night, we ensure that every guest has a thrilling time during every part of the celebration.</p>

                    <p class="font-display text-lg mb-2 leading-normal">
                        Unlike other party bands that only specialise in one genre of music, we appeal to every taste preference. Our song list options include everything from motown to modern chart music. We can meet with you to discuss your playlist in order to customise our performance for your wants and needs.
                    </p>

                </section>
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
    <div class="bg-gray-100 -mt-6 flex flex-wrap">
        <div class="w-full md:w-1/2 flex justify-end">
            <div class="flex items-center w-full justify-end py-24">
                <h2 class="font-fancy text-right w-full text-4xl bg-gray-900 px-6 py-10 text-orange-400">Who are the 45s?</h2>
            </div>
        </div>
        <div class="w-full md:w-1/2 ">
            <div class="p-4 h-full w-full flex flex-col justify-center">
                <div class="flex flex-col">
                    {{-- <h2 class="font-fancy text-4xl text-orange-400 text-center border-b-2 border-gray-900 pb-4">About Us</h2> --}}
                    <p class="leading-normal text-lg font-display">
                    The 45s are a dublin based weddings & events band formed in 2016. Our musicians are passionate about creating memorable events. Their talent and experience guarantees that every 45s event is seamless, so couples & clients can focus on partying rather than stressing over the details.
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')

@endsection
