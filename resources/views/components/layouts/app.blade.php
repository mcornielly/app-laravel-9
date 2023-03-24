<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>App Laravel 9 - {{ $title ?? '' }}</title>

    <meta name="description" content="{{ $metaDescription  ?? 'Default Meta Descriptions' }}">
    @vite(['resources/css/app.css'])

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
