<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>App Laravel 9 - {{ $title ?? '' }}</title>

    <meta name="description" content="{{ $metaDescription  ?? 'Default Meta Descriptions' }}">
    @vite(['resources/css/app.scss'])
    {{-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script> --}}
{{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script> --}}
</head>
<body>
    <x-layouts.navigations />
    @if (session('status'))
        {{ session('status') }}
    @endif
    {{-- <pre>{{ $sum }}</pre> --}}
    {{ $slot }}

</body>
</html>
