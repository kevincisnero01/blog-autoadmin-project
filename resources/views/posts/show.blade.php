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
                <img class="w-full h-80 object-cover object-center my-2" src="{{ Storage::url($post->image->url)}}" alt="">
            </figure>

            <div class="text-base text-gray-500">
                {{ $post->body}}
            </div>
        </div>
        
        {{--Related Content--}}
        <aside class="ml-2">
            <h2 class="text-2xl font-bold text-gray-500 mb-4">Relacionados con <u>{{$post->category->name}}</u></h2>
            <ul>
                @foreach ($related as $item)
                    <li class="mb-4">
                        <a class="flex" href="{{ route('posts.show',$item) }}">
                            <img class="w-24 h-24 object-cover object-center" src="{{ Storage::url($item->image->url)}}" alt="">
                            <span class="ml-2 text-gray-600">{{ $item->name}}</span>
                        </a>
                    </li>
                @endforeach
            </ul>
        </aside>
    </div>
</div>
</x-app-layout>