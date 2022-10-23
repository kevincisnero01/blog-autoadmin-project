<x-app-layout>
<div class="container py-8">
    <h1 class="text-4xl font-bold text-gray-600">{{ $post->name }}</h1>
    
    <div class="text-lg text-gray-500">
        {{ $post->extract}}
    </div>

    <div class="grid grid-cols-3">
        {{--Main Content--}}
        <div class="col-span-2">
            <figure>
                <img class="w-full h-80 object-cover object-center" src="{{ Storage::url($post->image->url)}}" alt="">
            </figure>

            <div class="text-base text-gray-500">
                {{ $post->body}}
            </div>
        </div>
        {{--Related Content--}}
        <div>

        </div>
    </div>
</div>
</x-app-layout>