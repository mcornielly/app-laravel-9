<x-layouts.app
    title="Crear Nuevo Post"
    meta-description="Nuevo Post Contenido"
    >

    <h1>Crear Nuevo Post</h1>
    {{-- @dump($errors) --}}
    {{-- @foreach ($errors->all() as $error)

        <p>{{ $error }}</p>

    @endforeach --}}

    <form action="{{ route('posts.store') }}" method="POST">
        @csrf

        @include('posts.form-fields')
    <br>
    <button type="submit">Enviar</button>
    </form>

</x-layouts.app>


