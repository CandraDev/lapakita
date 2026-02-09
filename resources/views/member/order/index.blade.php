@extends('layouts.secondary')
@php
    $titleNav = 'Pesanan Saya';
@endphp
@section('header')
    @livewire('secondary.navbar', ['titleNav' => 'Pesanan Saya'])
@endsection

@section('content')
    <h1 class="hidden lg:block text-3xl font-semibold mb-4">Pesanan</h1>
    @livewire('section-nav')
    @livewire('filter.order')
    <main>
        <section>
            <img src="{{ asset('gui/undraw_web-shopping_xd5k.svg') }}" class="w-80 mx-auto mt-10 mb-7" alt="">
            <div class="text-center">
                <h2 class="font-medium  text-2xl mb-2">Belum ada pesanan</h2>
                <p class="mx-auto w-1/3 text-gray-500 mb-5">Pesanan yang sudah kamu buat akan muncul di sini.</p>
                <button class="mx-auto w-1/4 bg-sky-500 font-bold rounded-2xl  text-white py-2.5">Mulai Belanja, yuk!</button>
            </div>
        </section>
    </main>
@endsection
