<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @viteReactRefresh
    @vite(['resources/scss/app.scss', 'resources/ts/app.ts'])
</head>
<body>
    <div id="app">
    </div>
    <form action="{{ route('api.files.upload') }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <input type="file" name="file">
        <button type="submit">保存</button>
      </form>
</body>
</html>
