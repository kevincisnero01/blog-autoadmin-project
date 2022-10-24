<x-app-layout>
    <div class="container py-8">
        <h1 class="text-3xl font-bold">Categoría: {{$category->name}}</h1>
        @foreach ($posts as $post)
            <img class="w-full h-48 object-cover object-center my-4" src="{{ Storage::url($post->image->url)}}" alt="">
        @endforeach
    </div>
</x-app-layout>