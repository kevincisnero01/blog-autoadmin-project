@props(['post'])

<article class="mb-8 bg-white shadow-lg rounded-lg overflow-hidden">
    @if($post->image)
        <img class="w-full h-72 object-cover object-center" src="{{ Storage::disk('posts')->url($post->image->url)}}" alt="">
    @else
        <img class="w-full h-72 object-cover object-center" src="https://cdn.pixabay.com/photo/2022/12/03/15/00/maui-7632875_960_720.jpg" alt="imagen">
    @endif
    
    <div class="px-6 py-4">
        <h1 class="text-lg font-bold mb-2">
            <a href="{{ route('posts.show', $post) }}">{{ $post->name }}</a>
        </h1>
        <div class="text-gray-700 text-base">
            {!! $post->extract !!}
        </div>
    </div>

    <div class="px-6 pb-4">
        @foreach ($post->tags as $tag)
            <a href="{{ route('posts.tag',$tag) }}" class="
                inline-block
                rounded-full 
                mr-2 
                px-3 
                py-1
                text-sm
                bg-gray-200 
                text-gray-700"
            >
                {{ $tag->name }}
            </a>
        @endforeach
    </div>
</article>