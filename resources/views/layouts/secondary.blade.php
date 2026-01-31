<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Lapakita</title>

    <link rel="icon" href="/favicon.ico" sizes="any">
    <link rel="icon" href="/favicon.svg" type="image/svg+xml">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    @livewire('secondary.navbar')

    <div class="max-w-6xl mx-auto flex flex-row lg:my-10 gap-6">
        @livewire('member.sidebar')
        <main class="w-full lg:w-8/10 bg-gray-200 p-4">
            @yield('content')
        </main>
    </div>
</body>

</html>
