@extends('master')

@section('title')

@endsection

@section('pageDescription')

@endsection

@section('content')
<div class="h-30r flex items-center justify-start songs-hero">
    <h2 class="font-fancy text-gray-100 text-4xl z-10 mb-10 pl-8">
        Songs &amp; Services
    </h2>
</div>
<div>
    <div class="container mx-auto">
        @component('components.songs', ['songs' => $songs])

        @endcomponent
    </div>
</div>


@endsection
