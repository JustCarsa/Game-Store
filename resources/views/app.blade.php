<!DOCTYPE html>
<html lang="en">

<head>
    <title>{{ config('app.name') }} &mdash; {{ $title }}</title>
    @include('layouts.head')
</head>

<body>
    @yield('content')
    @include('layouts.footer')
    @include('layouts.javascript')
    @stack('custom.javascript')
</body>

</html>
