<x-layouts.app
    title="Blog"
    meta-description="Blog Page Description"
    >
    <h1>Blog</h1>
    {{-- @dump($post); --}}
    @foreach ($posts as $post)
        <h1>{{ $post['title'] }}</h1>
    @endforeach
</x-layouts.app>


{{-- @extends('layouts.app')

@section('title', 'Blog')

@section('meta-description', 'Blog Page de la App')

@section('content')
    <h1>Blog</h1>
    @dump($post);
@endsection --}}
