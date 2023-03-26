<x-layouts.app
    title="Blog"
    meta-description="Blog Page Description"
    >
    <header class="px-6 py-4 space-y-2 text-center">
        <h1 class="font-serif text-3xl text-sky-600 dark:text-sky-500">Blog</h1>
        <h2>
            <a  class="inline-flex items-center px-4 py-2 text-xs font-semibold tracking-widest
            text-center text-white uppercase transition duration-150 ease-in-out border border-transparent
            rounded-md dark:text-sky-200 bg-sky-800 hover:bg-sky-700 active:bg-sky-900 focus:outline-none
            focus:border-sky-900 focus:shadow-outline-sky" href="{{ route('posts.create') }}">Crear Post</a>
        </h2>
    </header>

    <main class="grid w-full gap-4 px-4 max-w-7xl sm:grid-cols-2 md:grid-cols-3 mx-auto">
        {{-- @dump($post); --}}
        @foreach ($posts as $post)
        <div  class="max-w-3xl px-4 py-2 space-y-4 bg-white rounded shadow dark:bg-slate-800"
        style="display: flex; align-items: baseline">
            {{-- @dump($post); --}}
            <h2 class="text-xl text-slate-600 dark:text-slate-300 hover:underline">
                <a href="{{ route('posts.show', $post) }}">
                    {{ $post->title }}
                </a>&nbsp;
            </h2>
            <div class="flex justify-between">
                <a class="inline-flex items-center text-xs font-semibold tracking-widest text-center uppercase transition
                duration-150 ease-in-out dark:text-slate-400 text-slate-500 hover:text-slate-600 dark:hover:text-slate-500
                focus:outline-none focus:border-slate-200" href="{{ route('posts.edit', $post) }}">Edit</a>
                </a>
                <form action="{{ route('posts.destroy', $post) }}" method="post">
                    @csrf @method('DELETE')
                    <button class="inline-flex items-center text-xs font-semibold tracking-widest text-center text-red-500
                    uppercase transition duration-150 ease-in-out dark:text-red-500/80 hover:text-red-600 focus:outline-none"
                    type="submit">Eliminar</button>
                </form>
            </div>
        </div>
            {{-- <h2>
            </h2> &nbsp;
            <a href="#">Edit</a> --}}
        @endforeach
    </main>
</x-layouts.app>


{{-- @extends('layouts.app')

@section('title', 'Blog')

@section('meta-description', 'Blog Page de la App')

@section('content')
    <h1>Blog</h1>
    @dump($post);
@endsection --}}
