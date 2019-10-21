<div>
    <div class="container mx-auto">
        @if(session('mail'))
            <div class="w-full h-12 bg-gray-100 text-gray-900">
                <div class="p-4">
                {{session('mail')}}
                </div>
            </div>
        @endif

        @if($errors->any())
            <div class="messages-container">
                @foreach ($errors->all() as $error)
                    <div class="messages">
                    {{$error}}
                    </div>

                @endforeach
            </div>
        @endif
    </div>
</div>
