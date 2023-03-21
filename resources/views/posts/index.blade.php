<x-layouts.app
    title="Blog"
    meta-description="Blog Page Description"
    >



    <h1>Blog</h1>

    <h2>
        <a href="{{ route('posts.create') }}">Crear Post</a>
    </h2>
    {{-- @dump($post); --}}
    <div style="display: flex; align-items: baseline">
        @foreach ($posts as $post)
        {{-- @dump($post); --}}
        <ul>
            <li>
                <a href="{{ route('posts.show', $post) }}">
                    {{ $post->title }}
                </a>&nbsp;
                <a href="{{ route('posts.edit', $post) }}">Edit</a>
                </a>&nbsp;
                <form action="{{ route('posts.delete', $post) }}" method="post">
                    @csrf @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>
            </li>
        </ul>


        {{-- <h2>
            </h2> &nbsp;
            <a href="#">Edit</a> --}}
        @endforeach
    </div>
</x-layouts.app>


{{-- @extends('layouts.app')

@section('title', 'Blog')

@section('meta-description', 'Blog Page de la App')

@section('content')
    <h1>Blog</h1>
    @dump($post);
@endsection --}}
