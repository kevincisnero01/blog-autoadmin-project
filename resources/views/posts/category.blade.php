<x-app-layout>
    <div class="mx-auto max-w-5xl px-2 sm:px-6 lg:px-8 py-8">
        <h1 class="uppercase text-center text-3xl font-bold mb-4">Categoría: {{$category->name}}</h1>
        
        @foreach ($posts as $post)
            <article class="mb-8 bg-white shadow-lg rounded-lg overflow-hidden">
                <img class="w-full h-72 object-cover object-center" src="{{ Storage::url($post->image->url)}}" alt="">
                
                <div class="px-6 py-4">
                    <h1 class="text-lg font-bold mb-2">
                        <a href="#">{{ $post->name }}</a>
                    </h1>
                    <div class="text-gray-700 text-base">
                        {{ $post->extract }}
                    </div>
                </div>

                <div class="px-6 pb-4">
                    @foreach ($post->tags as $tag)
                        <a href="#" class="
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
        @endforeach

        <div class="my-4">
            {{ $posts->links() }}
        </div>
    </div>
</x-app-layout>