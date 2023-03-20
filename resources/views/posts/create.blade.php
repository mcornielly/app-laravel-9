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

    <label for="">
        Titulo
        <br>
        <input type="text" name="title" id="" value="{{ old('title') }}">
        @error('title')
        <br>
            <small style="color: red">{{ $message }}</small>
        @enderror
    </label>
    <br>
    <label for="">
        Contenido
        <br>
        <textarea name="body" id="" cols="30" rows="10">{{ old('body') }}</textarea>
        @error('body')
        <br>
            <small style="color: red">{{ $message }}</small>
        @enderror
    </label>
    <br>
    <button type="submit">Enviar</button>
    </form>

</x-layouts.app>


