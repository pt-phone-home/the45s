@extends('master')

@section('title')

@endsection

@section('pageDescription')

@endsection

@section('content')
<div class="h-30r flex items-center justify-start contact-hero">
    <h2 class="font-fancy text-gray-100 text-4xl z-10 mb-10 pl-8">
        Get in touch
    </h2>
</div>
<div>
    <div class="container mx-auto mt-8 flex flex-wrap">
        <div class="w-full md:w-1/2 flex flex-col items-center">
            <div>
                <h2 class="text-gray-900 text-4xl font-display border-b-2 border-gray-900 mb-4">Contact Us</h2>
            </div>
            <div class="text-2xl text-gray-900">
                <p><i class="fas fa-at mr-4 text-sm text-gray-700 mr-4 "></i>info@kablekings.ie</p>
                <p><i class="fas fa-mobile-android-alt mr-4 text-sm text-gray-700 mr-4"></i>Dave: 083 309 1065</p>
                <p><i class="fas fa-mobile-android-alt mr-4 text-sm text-gray-700 mr-4"></i>Michael: 083 309 4757</p>
            </div>
        </div>
        <div class="w-full md:w-1/2 flex flex-col mt-6 md:mt-0">
            <div class="self-center">
                <h2 class="text-gray-900 text-4xl font-display border-b-2 border-gray-900 mb-8 ">Make an enquiry</h2>
            </div>
        <form action="{{route('contact.send')}}" method="POST" class="text-lg w-4/5 px-4 md:px-0">
            @csrf
                @if($errors->any())
                <div class="w-full mb-4 bg-red-700 rounded px-2 py-2 text-gray-100">
                    <p class="uppercase">Your Message Was not sent</p>
                    <ul class="list-reset">
                        @foreach ($errors->all() as $error )
                        <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <div class="w-full flex mb-4">
                    <label for="name" class="mr-4">Name:</label>
                <input type="text" name="name" value="{{old('name')}}" placeholder="Your Full Name" class="border border-black rounded px-1 text-sm w-full" required>
                </div>
                <div class="w-full flex mb-4">
                    <label for="phone" class="mr-4">Phone:</label>
                <input type="number" name="phone" value="{{old('phone')}}" placeholder="087 ... " class="border border-black rounded px-1 text-sm w-full">
                </div>
                <div class="w-full flex mb-4">
                    <label for="email" class="mr-4">Email:</label>
                <input type="email" name="email" value="{{old('email')}}" placeholder="example@gmail.com" class="border border-black rounded px-1 text-sm w-full" required>
                </div>
                <div class="w-full flex mb-4">
                    <label for="message">Your enquiry:</label>
                </div>

                <div class="w-full flex mb-4">
                <textarea name="message" id="" cols="30" rows="10" class="border border-black rounded px-1 text-sm w-full" required>{{old('message')}}</textarea>
                </div>
                <div class="mb-4">
                    {!! NoCaptcha::renderJs(array('required' => 'required')) !!}
                    {!! NoCaptcha::display() !!}
                </div>

                <div class="w-full flex">
                    <button type="submit" class="bg-gray-800 hover:bg-gray-700 text-gray-100 text-xl px-2 py-1 inline-block rounded">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
