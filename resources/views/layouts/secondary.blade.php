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

<body class="">
    @yield('header')

    <div class="max-w-6xl mx-auto flex flex-row lg:my-14 gap-2 lg:pb-100">
        @livewire('member.sidebar')
        <section class="w-full lg:w-8/10 p-4 lg:pt-0 lg:px-4 bg-white ">
            @yield('content')
        </section>
    </div>
</body>

</html>
