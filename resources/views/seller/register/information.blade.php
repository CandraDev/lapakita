<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Daftar | Lapakita Seller</title>

    <link rel="icon" href="/favicon.ico" sizes="any">
    <link rel="icon" href="/favicon.svg" type="image/svg+xml">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-sky-50 ">
    @livewire('secondary.seller-navbar')
    <main>
        <form action="{{ route('seller.register.information') }}" method="POST">
            @csrf
            <main class="lg:max-w-4xl lg:mx-auto ">
                <section class="w-full h-34 bg-sky-100 flex">
                    <div class="w-40 flex items-center justify-center ps-6">
                        <img src="{{ asset('gui/undraw_web-shopping_xd5k.svg') }}" class="h-20" alt="">
                    </div>
                    <div class="flex-1 flex flex-col justify-center pe-6">
                        <h1 class="font-semibold">
                            Selamat Datang di Lapakita Seller Centre!
                        </h1>
                        <p class="text-slate-600 text-[8pt]">
                            Sebelum mulai berjualan silahkan lengkapi data diri Anda terlebih dahulu
                        </p>
                    </div>
                </section>
                <section class="px-5 py-4 bg-white ">
                    <div class="flex justify-between mb-2">
                        <div class="flex-1 ">
                            <h1 class="font-semibold">Proses Pendaftaran</h1>
                        </div>
                        <div class="text-sm pt-1">
                            <span class="font-semibold">1</span> dari 4
                        </div>
                    </div>
                    <div class="w-full h-2 bg-gray-200 rounded-full overflow-hidden mb-2">
                        <div class="h-full bg-sky-400 rounded-full" style="width: 25%"></div>
                    </div>
                </section>
                <div class="w-9/10 mx-auto border-b border-slate-300 bg-white "></div>
                <section class="w-full bg-white  px-5 py-2 pt-4">
                    <h1 class="font-semibold mb-2">Informasi Toko <span class="text-red-600 rounded-full">*</span></h1>
                    <div class="relative w-full mb-2">
                        <input type="text" id="storeName" name="storeName"
                            class="peer w-full h-11 px-2 pt-4 border border-slate-400 rounded focus:outline-none focus:border-blue-500"
                            placeholder=" " old={{ old('storeName') }} required />

                        <label for="storeName"
                            class="absolute left-3 top-1/2 -translate-y-1/2 text-slate-500 text-sm
                transition-all duration-200
                peer-placeholder-shown:top-1/2
                peer-placeholder-shown:text-base
                peer-placeholder-shown:text-slate-500
                peer-focus:top-3
                peer-focus:text-xs
                peer-focus:text-blue-500
                peer-not-placeholder-shown:top-3
                peer-not-placeholder-shown:text-xs">
                            Nama Toko
                        </label>

                        @error('storeName')
                            <div class="w-full">
                                <small class="text-red-500 -mt-5 mb-2">{{ $message }}</small>
                            </div>
                        @enderror
                    </div>

                    <div class="relative w-full mb-2">
                        <select id="storeCategory" name="storeCategory" required
                            class="peer w-full h-11 px-1 pt-4 border border-slate-400 rounded bg-white
                        focus:outline-none focus:border-blue-500">
                            <option value="" selected disabled></option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}"
                                    {{ old('storeCategory') == $category->id ? 'selected' : '' }}>
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>

                        <label for="storeCategory"
                            class="absolute left-3 top-1/2 -translate-y-1/2 text-slate-500
                        transition-all duration-200 pointer-events-none
                        peer-focus:top-3 peer-focus:text-xs peer-focus:text-blue-500
                        peer-valid:top-3 peer-valid:text-xs">
                            Kategori Utama Toko
                        </label>

                        @error('storeCategory')
                            <div class="w-full">
                                <small class="text-red-500 -mt-5 mb-2">{{ $message }}</small>
                            </div>
                        @enderror
                    </div>
                </section>
                <section class="w-full bg-white mb-10 lg:mb-0 p-5">
                    <h1 class="font-semibold mb-2">Alamat Toko <span class="text-red-600 rounded-full">*</span></h1>



                    <h2 class="text-sm text-gray-600 text-semibold mb-1">Titik Penjemputan Paket</h2>

                    @error('latitude')
                        <div class="w-full">
                            <small class="text-red-500 -mt-5 mb-2">{{ $message }}</small>
                        </div>
                    @enderror
                    @error('longitude')
                        <div class="w-full">
                            <small class="text-red-500 -mt-5 mb-2">{{ $message }}</small>
                        </div>
                    @enderror
                    <div id="map" class="w-full h-40 lg:h-80 rounded border mb-10 z-0"></div>

                    <input type="hidden" id="latitude" name="latitude">
                    <input type="hidden" id="longitude" name="longitude">



                    <div class="relative w-full mb-2">
                        <select id="storeProvince" name="storeProvince" required
                            class="peer w-full h-11 px-1  pt-4 border border-slate-400 rounded bg-white
                        focus:outline-none focus:border-blue-500">
                            <option value="" selected disabled></option>
                            @foreach ($provinces as $province)
                                <option value="{{ $province->id }}"
                                    {{ old('storeProvince') == $province->id ? 'selected' : '' }}>
                                    {{ $province->name }}
                                </option>
                            @endforeach
                        </select>

                        <label for="storeProvince"
                            class="absolute left-3 top-1/2 -translate-y-1/2 text-slate-500
                transition-all duration-200 pointer-events-none
                peer-focus:top-3 peer-focus:text-xs peer-focus:text-blue-500
                peer-valid:top-3 peer-valid:text-xs">
                            Provinsi
                        </label>

                        @error('storeProvince')
                            <div class="w-full">
                                <small class="text-red-500 -mt-5 mb-2">{{ $message }}</small>
                            </div>
                        @enderror
                    </div>
                    <div class="relative w-full mb-2">
                        <select id="storeRegency" name="storeRegency" required
                            class="peer w-full h-11 px-1 pt-4 border border-slate-400 rounded bg-white
                focus:outline-none focus:border-blue-500"
                            data-old="{{ old('storeRegency') }}">
                            <option value="" selected disabled></option>
                        </select>

                        <label for="storeRegency"
                            class="absolute left-3 top-1/2 -translate-y-1/2 text-slate-500
                transition-all duration-200 pointer-events-none
                peer-focus:top-3 peer-focus:text-xs peer-focus:text-blue-500
                peer-valid:top-3 peer-valid:text-xs">
                            Kota/Kab
                        </label>

                        @error('storeRegency')
                            <div class="w-full">
                                <small class="text-red-500 -mt-5 mb-2">{{ $message }}</small>
                            </div>
                        @enderror
                    </div>
                    <div class="relative w-full mb-2">
                        <select id="storeDistrict" name="storeDistrict" required
                            class="peer w-full h-11 px-1 pt-4 border border-slate-400 rounded bg-white
                focus:outline-none focus:border-blue-500"
                            data-old="{{ old('storeDistrict') }}">
                            <option value="" selected disabled></option>
                        </select>

                        <label for="storeDistrict"
                            class="absolute left-3 top-1/2 -translate-y-1/2 text-slate-500
                transition-all duration-200 pointer-events-none
                peer-focus:top-3 peer-focus:text-xs peer-focus:text-blue-500
                peer-valid:top-3 peer-valid:text-xs">
                            Kecamatan
                        </label>

                        @error('storeDistrict')
                            <div class="w-full">
                                <small class="text-red-500 -mt-5 mb-2">{{ $message }}</small>
                            </div>
                        @enderror
                    </div>
                    <div class="relative w-full mb-2">
                        <select id="storeVillage" name="storeVillage" required
                            class="peer w-full h-11 px-1 pt-4 border border-slate-400 rounded bg-white
                focus:outline-none focus:border-blue-500"
                            data-old="{{ old('storeVillage') }}">
                            <option value="" selected disabled></option>
                        </select>

                        <label for="storeVillage"
                            class="absolute left-3 top-1/2 -translate-y-1/2 text-slate-500
                transition-all duration-200 pointer-events-none
                peer-focus:top-3 peer-focus:text-xs peer-focus:text-blue-500
                peer-valid:top-3 peer-valid:text-xs">
                            Kelurahan
                        </label>

                        @error('storeVillage')
                            <div class="w-full">
                                <small class="text-red-500 -mt-5 mb-2">{{ $message }}</small>
                            </div>
                        @enderror
                    </div>
                    <div class="relative w-full mb-2">
                        <textarea id="storeAddress" name="storeAddress" rows="4"
                            class="peer w-full px-3 pt-6 pb-2 border border-slate-400 rounded
                resize-none focus:outline-none focus:border-blue-500"
                            placeholder=" " required>{{ old('storeAddress') }}</textarea>

                        <label for="storeAddress"
                            class="absolute left-3 top-3 text-slate-500
                transition-all duration-200 pointer-events-none
                peer-placeholder-shown:top-3
                peer-placeholder-shown:text-base
                peer-focus:top-2
                peer-focus:text-xs
                peer-focus:text-blue-500
                peer-not-placeholder-shown:top-2
                peer-not-placeholder-shown:text-xs">
                            Alamat Lengkap
                        </label>
                    </div>
                    @error('storeAddress')
                        <div class="w-full">
                            <small class="text-red-500 -mt-5 mb-2">{{ $message }}</small>
                        </div>
                    @enderror

                    <button type="submit"
                        class="w-11/12 h-10 rounded-xl shadow bg-sky-500 font-semibold text-white hidden lg:block mx-auto my-10">
                        Lanjut
                    </button>
                </section>
            </main>

            <section
                class="fixed bottom-0 right-0 left-0 h-14 bg-white flex items-center justify-center z-50 lg:hidden">
                <button type="submit" class="w-11/12 h-10 rounded-xl shadow bg-sky-500 font-semibold text-white ">
                    Lanjut
                </button>
            </section>
        </form>
    </main>

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

    <script>
        document.getElementById('storeProvince').addEventListener('change', function() {
            const provinceId = this.value;
            const regencySelect = document.getElementById('storeRegency');

            regencySelect.innerHTML = '<option>Loading...</option>';

            fetch(`/api/regencies/${provinceId}`)
                .then(response => response.json())
                .then(regencies => {
                    regencySelect.innerHTML =
                        '<option value="" disabled selected></option>';

                    regencies.forEach(regency => {
                        const option = document.createElement('option');
                        option.value = regency.id;
                        option.textContent = regency.name;
                        // kalau ada old value dari Laravel (misal validasi gagal)
                        const oldRegency = document.getElementById('storeRegency').dataset.old;
                        if (oldRegency && oldRegency == regency.id) {
                            option.selected = true;
                        }
                        regencySelect.appendChild(option);
                    });
                });
        });
    </script>

    <script>
        document.getElementById('storeRegency').addEventListener('change', function() {
            const regencyId = this.value;
            const districtSelect = document.getElementById('storeDistrict');

            districtSelect.innerHTML = '<option>Loading...</option>';

            fetch(`/api/districts/${regencyId}`)
                .then(response => response.json())
                .then(districts => {
                    districtSelect.innerHTML =
                        '<option value="" disabled selected></option>';

                    districts.forEach(district => {
                        const option = document.createElement('option');
                        option.value = district.id;
                        option.textContent = district.name;
                        // kalau ada old value dari Laravel (misal validasi gagal)
                        const oldDistrict = document.getElementById('storeDistrict').dataset.old;
                        if (oldDistrict && oldDistrict == district.id) {
                            option.selected = true;
                        }
                        districtSelect.appendChild(option);
                    });
                });
        });
    </script>
    
    <script>
        document.getElementById('storeDistrict').addEventListener('change', function() {
            const districtId = this.value;
            const villageSelect = document.getElementById('storeVillage');

            villageSelect.innerHTML = '<option>Loading...</option>';

            fetch(`/api/villages/${districtId}`)
                .then(response => response.json())
                .then(districts => {
                    villageSelect.innerHTML =
                        '<option value="" disabled selected></option>';

                    districts.forEach(district => {
                        const option = document.createElement('option');
                        option.value = district.id;
                        option.textContent = district.name;
                        // kalau ada old value dari Laravel (misal validasi gagal)
                        const oldVillage = document.getElementById('storeVillage').dataset.old;
                        if (oldVillage && oldVillage == district.id) {
                            option.selected = true;
                        }
                        villageSelect.appendChild(option);
                    });
                });
        });
    </script>

    <script>
        const map = L.map("map").setView([-6.2, 106.816666], 13); // Jakarta

        L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
            attribution: "© OpenStreetMap",
        }).addTo(map);

        let marker;

        map.on("click", function(e) {
            const {
                lat,
                lng
            } = e.latlng;

            if (marker) {
                marker.setLatLng(e.latlng);
            } else {
                marker = L.marker(e.latlng).addTo(map);
            }

            document.getElementById("latitude").value = lat;
            document.getElementById("longitude").value = lng;
        });
    </script>

</body>


</html>
