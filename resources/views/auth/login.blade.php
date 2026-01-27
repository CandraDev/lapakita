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


<body class="bg-sky-50">
    <a href="{{ route('home') }}"
        class="absolute z-20 w-7 h-7 bg-white rounded-full text-center top-3 left-2 shadow">x</a>
    <div class="lg:max-w-6xl lg:mx-auto">

        <div class="">

            <div class="flex  justify-center items-end mb-7 lg:mb-20 h-35 ">
                <img src="{{ asset('logo/lapakita-main.png') }}" class="w-40" alt="Logo Lapakita">
            </div>
            <div class="flex-1 lg:flex lg:flex-col lg:items-center lg:justify-center ">
                <div class=" w-[90%] lg:w-[50%] mx-auto bg-white shadow rounded-lg">
                    <div class="p-5">
                        <h1 class="font-semibold text-xl lg:text-2xl lg:mb-2">Masuk ke Lapakita</h1>
                        <p class="text-xs text-gray-500 lg:text-sm mb-4">
                            Masuk ke Akun Lapakita dan dapatkan kemudahan dalam berbelanja!
                        </p>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="flex border-b border-slate-500 mb-2">
                                <div class="w-10 flex items-center justify-center">
                                    <svg class="w-7 h-7 text-gray-500" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round">
                                        </g>
                                        <g id="SVGRepo_iconCarrier">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M3.75 5.25L3 6V18L3.75 18.75H20.25L21 18V6L20.25 5.25H3.75ZM4.5 7.6955V17.25H19.5V7.69525L11.9999 14.5136L4.5 7.6955ZM18.3099 6.75H5.68986L11.9999 12.4864L18.3099 6.75Z"
                                                fill="currentColor"></path>
                                        </g>
                                    </svg>
                                </div>
                                <div class="flex-1">
                                    <input type="email" name="email" value="{{ old('email') }}"
                                        class="w-full h-10 ps-2  focus:outline-none focus:border-transparent focus:ring-0 active:border-transparent"
                                        placeholder="Email">
                                </div>
                            </div>
                            <div class="flex border-b border-slate-500 mb-2">
                                <div class="w-10 flex items-center justify-center">
                                    <svg viewBox="0 0 24 24" fill="none" width="24" height="24"
                                        color="rgba(0, 0, 0, 0.54)">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M7.757 9.376c.002.212.005.42.005.624h-.75 9.226c0-.204.003-.412.005-.624.015-1.184.03-2.465-.39-3.54-.234-.6-.595-1.1-1.161-1.46-.574-.365-1.42-.626-2.692-.626-1.271 0-2.119.26-2.692.625-.566.36-.927.86-1.161 1.46-.42 1.077-.405 2.357-.39 3.541zm-1.501.083c.003.195.006.376.006.541H6a2 2 0 00-2 2v8a2 2 0 002 2h12a2 2 0 002-2v-8a2 2 0 00-2-2h-.262c0-.165.003-.346.006-.54.018-1.166.044-2.793-.494-4.17-.327-.838-.87-1.619-1.753-2.18-.877-.558-2.025-.86-3.497-.86s-2.62.302-3.497.86c-.883.56-1.426 1.341-1.753 2.18-.538 1.377-.512 3.005-.494 4.17zM18 11.5H6a.5.5 0 00-.5.5v8a.5.5 0 00.5.5h12a.5.5 0 00.5-.5v-8a.5.5 0 00-.5-.5zM12 14a1 1 0 00-1 1v2a1 1 0 102 0v-2a1 1 0 00-1-1z"
                                            fill="currentColor"></path>
                                    </svg>
                                </div>
                                <div class="flex-1">
                                    <input type="password" id="password" name="password"
                                        class="w-full h-10 ps-2 focus:outline-none focus:border-transparent focus:ring-0 active:border-transparent"
                                        placeholder="Kata Sandi">
                                </div>

                                <div class="w-10 flex items-center justify-center cursor-pointer" id="togglePassword">
                                    {{-- Svg Mata Tertutup --}}
                                    <svg id="eyeClosed" viewBox="0 0 24 24" fill="none" width="24" height="24"
                                        color="rgba(0, 0, 0, 0.54)" class="ip92G6">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M2.562 7.391a.75.75 0 011.047.17c1.178 1.637 3.382 4.69 8.391 4.69 5.01 0 7.213-3.053 8.391-4.69a.75.75 0 011.218.877l-.004.006c-.47.652-1.141 1.584-2.117 2.486a.716.716 0 01.042.04l2 2a.75.75 0 01-1.06 1.06l-2-2a.747.747 0 01-.13-.173 10.15 10.15 0 01-2.955 1.425l.827 2.48a.75.75 0 01-1.423.475l-.876-2.628A12.65 12.65 0 0112 13.75c-.68 0-1.317-.05-1.912-.14l-.876 2.627a.75.75 0 11-1.423-.474l.827-2.481a10.153 10.153 0 01-2.956-1.425.75.75 0 01-.13.173l-2 2a.75.75 0 11-1.06-1.06l2-2a.756.756 0 01.042-.04c-.976-.902-1.647-1.834-2.117-2.486l-.004-.006a.75.75 0 01.17-1.047z"
                                            fill="currentColor"></path>
                                    </svg>

                                    {{-- Svg Mata Terbuka --}}
                                    <svg id="eyeOpen" viewBox="0 0 24 24" fill="none" width="24" height="24"
                                        class="hidden" color="rgba(0, 0, 0, 0.54)">
                                        <circle cx="12" cy="12" r="2" fill="currentColor"></circle>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M21.988 11.92v.041c0 .013.004.026.01.037l-.002.02v.019l-.002.015v.012c-.003.004-.003.01-.003.013l-.002.009v.01c0 .007 0 .016-.003.022v.002a.813.813 0 01-.208.438 14.289 14.289 0 01-1.474 1.56c-1.045.984-2.197 1.855-3.433 2.528-.977.53-2.017.959-3.097 1.175l-.076.016h-.005l-.005.001-.006.001a8.683 8.683 0 01-1.586.161h-.2a8.724 8.724 0 01-1.597-.163h-.003a.916.916 0 00-.08-.016c-1.078-.216-2.117-.646-3.092-1.176-1.235-.67-2.386-1.543-3.43-2.527a14.04 14.04 0 01-1.476-1.558.821.821 0 01-.208-.437v-.002l-.001-.013-.002-.01v-.007l-.001-.011c-.003-.005-.003-.009-.003-.014C2 12.057 2 12.05 2 12.04a.214.214 0 010-.057l.003-.02v-.014l.002-.014v-.023l.002-.01c0-.007 0-.015.002-.022v-.002a.813.813 0 01.208-.438 13.98 13.98 0 011.596-1.672C4.823 8.83 5.935 8 7.125 7.352c.887-.48 1.831-.88 2.808-1.11l.054-.013c.025-.005.05-.01.075-.017l.021-.005.016-.003.016-.003A8.943 8.943 0 0111.896 6h.2a8.898 8.898 0 011.777.2l.018.004.018.003.086.02.058.015c.98.23 1.922.63 2.812 1.113 1.19.644 2.3 1.478 3.314 2.413.577.512 1.11 1.07 1.596 1.671a.812.812 0 01.209.439v.002l.001.011v.011l.003.008v.01zM12 16a4 4 0 100-8 4 4 0 000 8z"
                                            fill="currentColor"></path>
                                    </svg>
                                </div>

                                <script>
                                    const togglePassword = document.getElementById('togglePassword');
                                    const passwordInput = document.getElementById('password');
                                    const eyeOpen = document.getElementById('eyeOpen');
                                    const eyeClosed = document.getElementById('eyeClosed');

                                    togglePassword.addEventListener('click', () => {
                                        if (passwordInput.type === 'password') {
                                            passwordInput.type = 'text';
                                            eyeOpen.classList.remove('hidden');
                                            eyeClosed.classList.add('hidden');
                                        } else {
                                            passwordInput.type = 'password';
                                            eyeOpen.classList.add('hidden');
                                            eyeClosed.classList.remove('hidden');
                                        }
                                    });
                                </script>

                            </div>
                            <div class="text-sky-500 text-sm my-4 flex justify-between">
                                <span class="text-gray-500 text-sm">Belum memiliki akun? <a
                                        class="ms-1 text-sm text-sky-500"
                                        href={{ route('register') }}>Daftar?</a>
                                </span>
                                <div class="flex-end text-sm mt-1 text-gray-500">Lupa kata sandi?</div>
                            </div>
                            <button type="submit"
                                class="w-full h-10 rounded bg-sky-400 text-center flex items-center justify-center text-white">
                                Log in
                            </button>
                        </form>
                    </div>
                </div>

                <div class="w-[90%] lg:w-[50%] mx-7 mt-10 ">
                    <h1 class="font-light mb-2 ms-1">Atau masuk dengan</h1>
                    <div class="w-full bg-white shadow rounded-xl">
                        <div class="h-12 flex items-center ">
                            <div class="flex items-center justify-center px-4">
                                <svg viewBox="-3 0 262 262" class="w-5 h-5" xmlns="http://www.w3.org/2000/svg"
                                    preserveAspectRatio="xMidYMid" fill="#000000">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path
                                            d="M255.878 133.451c0-10.734-.871-18.567-2.756-26.69H130.55v48.448h71.947c-1.45 12.04-9.283 30.172-26.69 42.356l-.244 1.622 38.755 30.023 2.685.268c24.659-22.774 38.875-56.282 38.875-96.027"
                                            fill="#4285F4"></path>
                                        <path
                                            d="M130.55 261.1c35.248 0 64.839-11.605 86.453-31.622l-41.196-31.913c-11.024 7.688-25.82 13.055-45.257 13.055-34.523 0-63.824-22.773-74.269-54.25l-1.531.13-40.298 31.187-.527 1.465C35.393 231.798 79.49 261.1 130.55 261.1"
                                            fill="#34A853"></path>
                                        <path
                                            d="M56.281 156.37c-2.756-8.123-4.351-16.827-4.351-25.82 0-8.994 1.595-17.697 4.206-25.82l-.073-1.73L15.26 71.312l-1.335.635C5.077 89.644 0 109.517 0 130.55s5.077 40.905 13.925 58.602l42.356-32.782"
                                            fill="#FBBC05"></path>
                                        <path
                                            d="M130.55 50.479c24.514 0 41.05 10.589 50.479 19.438l36.844-35.974C195.245 12.91 165.798 0 130.55 0 79.49 0 35.393 29.301 13.925 71.947l42.211 32.783c10.59-31.477 39.891-54.251 74.414-54.251"
                                            fill="#EB4335"></path>
                                    </g>
                                </svg>
                            </div>
                            <div class="flex-1 text-sm text-gray-700">Google</div>
                            <div class="flex items-center justify-center pe-2">
                                <svg width="24" height="24" aria-hidden="true" type="image/svg+xml"
                                    viewBox="0 0 24 24" fill="#858585" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M8.49 8.15532L13.69 12.0053L8.49 15.8353C8.22 16.0353 8.05 16.3153 8.01 16.6353C7.97 16.9553 8.05 17.2653 8.26 17.5253C8.68 18.0553 9.47 18.1553 10.01 17.7553L16.51 12.9653C16.82 12.7353 17 12.3753 17 12.0053C17 11.6353 16.82 11.2753 16.51 11.0453L10.01 6.24532C9.79 6.08532 9.53 5.99532 9.25 5.99532C8.86 5.99532 8.5 6.16532 8.26 6.46532C8.06 6.72532 7.97 7.03532 8.01 7.35532C8.05 7.67532 8.22 7.95532 8.49 8.15532Z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</body>

</html>
