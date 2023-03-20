<x-layouts.app
    :title="$post->title"
    :meta-description="$post->body"
    >

    <h1>{{$post->title}}</h1>
    {{-- @dump($errors) --}}
    {{-- @foreach ($errors->all() as $error)

        <p>{{ $error }}</p>

    @endforeach --}}

    <form action="{{ route('posts.update', $post) }}" method="POST">
        @csrf @method('PATCH')

        @include('posts.form-fields')
        <br>
        <button type="submit">Actualizar</button>
    </form>

</x-layouts.app>


