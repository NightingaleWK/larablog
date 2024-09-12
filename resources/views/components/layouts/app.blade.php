<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <title>{{ $title ?? 'LaraBlog' }}</title>
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen p-10 bg-gray-100 dark:bg-gray-900">
        <nav class="flex gap-4 mb-10">
            <a href="/" @class(['font-bold' => request()->is('/')])>TodoList</a>
            <a href="/counter" @class(['font-bold' => request()->is('counter')])>Counter</a>
            <a href="/post" @class(['font-bold' => request()->is('post')])>Post</a>
            <a href="/createPost" @class(['font-bold' => request()->is('createPost')])>CreatePost</a>
        </nav>

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>
</body>

</html>
