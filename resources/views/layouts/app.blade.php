<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>App Laravel 9 - @yield('title')</title>

    <meta name="description" content="@yield('meta-description', 'Default Meta Descriptions')">
</head>
<body>
    @include('partials.navigations')

    @if (session('status'))
        {{ session('status') }}
    @endif

    @yield('content')

</body>
</html>
