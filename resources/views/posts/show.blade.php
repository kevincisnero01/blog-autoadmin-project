<x-app-layout>
<div class="container py-8">
    <h1 class="text-4xl font-bold text-gray-600">{{ $post->name }}</h1>
    
    <div class="text-lg text-gray-500">
        {!! $post->extract !!}
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        {{--Main Content--}}
        <div class="lg:col-span-2">
            <figure>
                @if($post->image)
                    <img class="w-full h-80 object-cover object-center my-2" src="{{ Storage::url($post->image->url)}}" alt="image">
                @else
                    <img class="w-full h-80 object-cover object-center my-2" src="https://cdn.pixabay.com/photo/2022/12/03/15/00/maui-7632875_960_720.jpg" alt="image">
                @endif
            </figure>

            <div class="text-base text-gray-500">
                {!! $post->body !!}
            </div>
        </div>
        
        {{--Related Content--}}
        <aside>
            <h2 class="text-2xl font-bold text-gray-500 mb-4">Relacionados con <u>{{$post->category->name}}</u></h2>
            <ul>
                @foreach ($related as $item)
                    <li class="mb-4">
                        <a class="flex" href="{{ route('posts.show',$item) }}">
                            @if($item->image)
                                <img class="w-24 h-24 object-cover object-center" src="{{ Storage::url($item->image->url)}}" alt="image">
                            @else
                                <img class="w-24 h-24 object-cover object-center" src="https://cdn.pixabay.com/photo/2022/12/03/15/00/maui-7632875_960_720.jpg" alt="image">
                            @endif
                            
                            <span class="ml-2 text-gray-600">{{ $item->name}}</span>
                        </a>
                    </li>
                @endforeach
            </ul>
        </aside>
    </div>
</div>
</x-app-layout>