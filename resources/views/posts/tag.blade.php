<x-app-layout>
<div class="container mx-auto max-w-5xl px-2 sm:px-6 lg:px-8 py-8 bg-white">
    <h1 class="uppercase text-center text-3xl font-bold mb-4">Etiqueta: {{ $tag->name}}</h1>

    @foreach ($posts as $post)
        <x-card-post :post="$post" />
    @endforeach
    <div class="my-4">
        {{ $posts->links() }}
    </div>
</div>
</x-app-layout>