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


<body class="bg-sky-50 ">
    <a href="{{ url()->previous() }}"
        class="absolute z-20 w-7 h-7 bg-white rounded-full text-center top-3 left-2 shadow">x</a>

    <div class=" w-full h-43 bg-sky-50 pt-15 px-6">
    </div>
    <div class="lg:max-w-6xl lg:mx-auto">

        <div class="lg:flex">
            <div class="relative -top-25 px-6 lg:px-0 lg:-top-15 lg:max-w-2/10">
                <h1 class="font-semibold text-xl lg:text-2xl lg:mb-2">Profil</h1>
                <p class="text-xs text-gray-500 lg:text-sm">
                    Detail profil dan pengaturan untuk akun Lapakita E-Commerce
                </p>
            </div>
            <div class="flex-1">

                <form method="POST">
                    @csrf

                    <div class="relative -top-12 w-[90%] lg:max-w-5/10 mx-auto bg-white shadow rounded-lg pt-12">

                        <!-- Avatar Upload -->
                        <label
                            class="relative -top-10 left-1/2 -translate-x-1/2
               h-20 w-20 bg-sky-200 rounded-full
               border-4 border-white
               flex items-center justify-center
               cursor-pointer hover:bg-sky-300 transition overflow-visible">

                            <!-- Avatar image / preview -->
                            <img id="avatarPreview"
                                src="{{ Auth::check() && Auth::user()->avatar ? (Str::startsWith(Auth::user()->avatar, ['http://', 'https://']) ? Auth::user()->avatar : asset('storage/' . Auth::user()->avatar)) : '' }}"
                                class="w-full h-full object-cover rounded-full {{ Auth::check() && Auth::user()->avatar ? 'block' : 'hidden' }}" alt="Avatar">

                            <!-- Default camera icon -->
                            <svg id="defaultCameraIcon" xmlns="http://www.w3.org/2000/svg"
                                class="absolute inset-0 m-auto h-8 w-8 text-sky-600 z-10" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"
                                @if (Auth::check() && Auth::user()->avatar) style="display:none;" @endif>
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3 7h3l2-3h8l2 3h3v11a2 2 0 01-2 2H5a2 2 0 01-2-2V7z" />
                                <circle cx="12" cy="13" r="3" />
                            </svg>

                            <!-- Camera overlay icon (bottom right) -->
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="absolute bottom-0 right-0 h-6 w-6 text-white bg-sky-600 bg-opacity-70 rounded-full p-1 z-20"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"
                                @if (!(Auth::check() && Auth::user()->avatar)) style="display:none;" @endif>
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3 7h3l2-3h8l2 3h3v11a2 2 0 01-2 2H5a2 2 0 01-2-2V7z" />
                                <circle cx="12" cy="13" r="3" />
                            </svg>

                            <!-- Hidden File Input -->
                            <input type="file" name="avatar" accept="image/*" class="hidden" id="avatarInput" />
                        </label>



                        <div class="px-5 pb-5">
                            <div class="flex justify-between mb-2">
                                <div class="font-bold">
                                    Edit Info Pemilik Akun
                                </div>
                            </div>

                            <!-- Nama Lengkap (readonly, label tetap naik) -->
                            <div class="grid  gap-3 mb-2 items-center">
                                <div class="relative">
                                    <input type="text" value="{{ Auth::user()->name }}"
                                        class="w-full bg-gray-100 border border-gray-200 rounded-lg px-3 pt-5 pb-2 text-sm ">
                                    <label class="absolute left-3 top-1.5 text-xs text-gray-500">
                                        Nama Lengkap
                                    </label>
                                </div>
                            </div>

                            <!-- Nomor HP (floating label aktif) -->
                            <div class="grid  gap-3 mb-2 items-center">

                                <div class="relative">
                                    <input type="text" name="phone" id="phone"
                                        value="{{ old('phone', Auth::user()->phone ?? '') }}" placeholder=" "
                                        class="peer w-full border border-gray-300 rounded-lg px-3 pt-5 pb-2 text-sm
                       focus:outline-none focus:ring-2 focus:ring-indigo-500">
                                    <label for="phone"
                                        class="absolute left-3 text-gray-400 transition-all
                       top-3.5 text-sm
                       peer-focus:top-2 peer-focus:text-xs peer-focus:text-indigo-600
                       peer-placeholder-shown:top-3.5 peer-placeholder-shown:text-sm
                       peer-not-placeholder-shown:top-2 peer-not-placeholder-shown:text-xs">
                                        Nomor HP
                                    </label>
                                </div>
                            </div>

                            <!-- Email (readonly) -->
                            <div class="grid  gap-3 mb-2 items-center">
                                <div class="relative">
                                    <input type="email" value="{{ Auth::user()->email }}" readonly
                                        class="w-full bg-gray-100 border border-gray-200 rounded-lg px-3 pt-5 pb-2 text-sm cursor-not-allowed">
                                    <label class="absolute left-3 top-2 text-xs text-gray-500">
                                        Email
                                    </label>
                                </div>
                            </div>
                            <!-- Jenis Kelamin -->
                            <div class="grid gap-3 mb-6 items-center">
                                <div class="relative">

                                    <select name="gender" id="gender"
                                        class="peer w-full border border-gray-300 rounded-lg px-3 pt-5 pb-2 text-sm
                   focus:outline-none focus:ring-2 focus:ring-indigo-500
                   bg-white">
                                        <option value="" disabled
                                            {{ old('gender', Auth::user()->gender) ? '' : 'selected' }}>
                                            Pilih Jenis Kelamin
                                        </option>

                                        <option value="Laki-laki"
                                            {{ old('gender', Auth::user()->gender) === 'Laki-laki' ? 'selected' : '' }}>
                                            Laki-laki
                                        </option>

                                        <option value="Perempuan"
                                            {{ old('gender', Auth::user()->gender) === 'Perempuan' ? 'selected' : '' }}>
                                            Perempuan
                                        </option>
                                    </select>

                                    <label for="gender"
                                        class="absolute left-3 text-gray-400 transition-all
                   top-3.5 text-sm
                   peer-focus:top-2 peer-focus:text-xs peer-focus:text-indigo-600
                   peer-not-placeholder-shown:top-2
                   peer-not-placeholder-shown:text-xs">
                                        Jenis Kelamin
                                    </label>
                                </div>
                            </div>


                            <!-- Submit -->
                            <button type="submit"
                                class="w-full bg-sky-600 text-white py-2 rounded-lg text-sm font-medium
                                hover:bg-indigo-700 transition">
                                Simpan Perubahan
                            </button>
                        </div>
                    </div>


                </form>

            </div>

        </div>

    </div>
    </div>

    <script>
        const avatarInput = document.getElementById('avatarInput');
        const avatarPreview = document.getElementById('avatarPreview');
        const defaultIcon = document.getElementById('defaultCameraIcon');
        const overlayIcon = document.querySelector('label svg:nth-of-type(2)'); // camera overlay

        avatarInput.addEventListener('change', function(e) {
            const file = e.target.files[0];
            if (!file) return;

            const reader = new FileReader();
            reader.onload = function(e) {
                avatarPreview.src = e.target.result;
                avatarPreview.style.display = 'block';
                defaultIcon.style.display = 'none';
                if (overlayIcon) overlayIcon.style.display = 'block';
            }
            reader.readAsDataURL(file);
        });
    </script>

</body>

</html>
