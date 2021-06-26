<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>@yield('title')</title>
    <link rel="stylesheet" href= @yield('style')>
</head>
<body>
    @include('messages')
    @yield('content')
    @include('inc.footer')
</body>
</html>
