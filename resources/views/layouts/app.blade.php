<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <link rel="icon" href="/images/ask_and_answer.ico">
    <title>问答</title>
    @yield('css')
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    @yield('content')
    @yield('js')
</body>
</html>
