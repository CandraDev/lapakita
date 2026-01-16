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
    @livewire('home.topbar')
    @livewire('home.navbar')
    @livewire('home.carousel')
    @livewire('home.profile-card')
    @livewire('home.featured-train')
    @auth
        @if (is_null(Auth::user()->email_verified_at))
            @livewire('home.alert', [
                'message' => 'Anda belum melakukan <a href="'.route('verification.notice').'" class="underline">konfirmasi email</a>. Konfirmasi sekarang untuk mengakses seluruh fitur Lapakita!',
                'type' => 'warning',
            ])
        @endif
    @endauth
    @livewire('home.flashsale')
    @livewire('home.products')
    @yield('content')
    @livewire('mobile.main-bottom-nav')
</body>

</html>
