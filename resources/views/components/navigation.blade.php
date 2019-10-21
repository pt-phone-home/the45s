<div class="sticky top-0 z-30 bg-gray-900 ">
    <div class="container mx-auto flex flex-col justify-center ">
        <div class="flex justify-between items-center py-8">
            <div class="w-1/4">
                <h2 class="text-lg text-orange-400">THE 45s</h2>
            </div>
            <div class=" flex-row justify-between w-1/2 hidden md:flex">
                <a href="{{ route('about') }}" class="font-fancy text-sm text-orange-400 hover:text-orange-600 pb-2 {{ Route::current()->getName() === 'about' ? 'nav-active' : '' }}">About Us</a>
                <a href="{{ route('weddings') }}" class="font-fancy text-sm  text-orange-400 hover:text-orange-600 pb-2 {{ Route::current()->getName() === 'weddings' ? 'nav-active' : '' }}">Weddings</a>
                <a href="{{ route('songs-services') }}" class="font-fancy text-sm  text-orange-400 hover:text-orange-600 pb-2 {{ Route::current()->getName() === 'songs-services' ? 'nav-active' : '' }}">Songs & Services</a>
                <a href="{{ route('faq') }}" class="font-fancy text-sm  text-orange-400 hover:text-orange-600 pb-2 {{ Route::current()->getName() === 'faq' ? 'nav-active' : '' }}">FAQ</a>
                <a href="{{ route('contact') }}" class="font-fancy text-sm text-orange-400 hover:text-orange-600 pb-2 {{ Route::current()->getName() === 'contact' ? 'nav-active' : '' }}">Contact Us</a>
            </div>
            <div class="md:hidden pr-4">
                <i class="fas fa-bars text-xl text-orange-400" id="navBtn"> </i>
            </div>
        </div>
        <div class="flex flex-col w-full text-center hide z-40" id="dropNav">
            <a href="{{ route('index') }}" class="text-lg text-orange-400 hover:text-orange-500 pb-4">Home</a>
            <a href="{{ route('about') }}" class="text-lg text-orange-400 hover:text-orange-500 pb-4">About US</a>
            <a href="{{ route('weddings') }}" class="text-lg text-orange-400 hover:text-orange-500 pb-4">Weddings</a>
            <a href="{{ route('songs-services') }}" class="text-lg text-orange-400 hover:text-orange-500 pb-4 ">Songs & Services</a>
            <a href="{{ route('faq') }}" class="text-lg text-orange-400 hover:text-orange-500 pb-4 ">FAQ</a>
            <a href="{{ route('contact') }}" class="text-lg text-orange-400 hover:text-orange-500 pb-4 ">Contact Us</a>
        </div>
    </div>
</div>

<script>
$("#navBtn").click(function(){
           $("#dropNav").toggleClass("hide",);
       });
</script>
