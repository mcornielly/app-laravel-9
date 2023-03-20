<x-layouts.app
    title="Blog"
    meta-description="Blog Page Description"
    >

    @if (session('status'))
        <div>
            {{ session('status') }}
        </div>
    @endif

    <h1>Blog</h1>

    <h2>
        <a href="{{ route('posts.create') }}">Crear Post</a>
    </h2>
    {{-- @dump($post); --}}
    @foreach ($posts as $post)
    {{-- @dump($post); --}}
        <h2>
            <a href="{{ route('posts.show', $post) }}">
                {{ $post->title }}
            </a>
        </h2>
    @endforeach
</x-layouts.app>


{{-- @extends('layouts.app')

@section('title', 'Blog')

@section('meta-description', 'Blog Page de la App')

@section('content')
    <h1>Blog</h1>
    @dump($post);
@endsection --}}
