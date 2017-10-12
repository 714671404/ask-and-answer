<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="/images/ask_and_answer.ico">
    <title>问答</title>
    @yield('css')
    <link rel="stylesheet" href="/css/app.css">
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]);?>
    </script>
</head>
<body>
    @yield('content')
    @yield('js')
</body>
</html>
