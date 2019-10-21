<div >
    <h3 class="faqBtn bg-gray-200 text-orange-800 pb-2 pt-2 pl-2 border border-gray-100 mt-1" id="">Contemporary</h3>
    <div class="flex flex-row flex-wrap px-6 ">
        @foreach ($songs as $song)
        <div class="w-15r flex flex-col justify-around my-2">
            <p class="capitalize font-bold mb-2">{{ $song['title'] }}</p>
            <p class="capitalize font-italic mb-2 text-sm"> {{ $song['artist'] }}</p>
        </div>
        @endforeach
    </div>
</div>
