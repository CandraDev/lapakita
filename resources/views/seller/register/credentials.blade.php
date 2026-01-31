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
                    <span class="font-semibold">2</span> dari 4
                </div>
            </div>
            <div class="w-full h-2 bg-gray-200 rounded-full overflow-hidden mb-2">
                <div class="h-full bg-sky-400 rounded-full" style="width: 50%"></div>
            </div>
        </section>
        <div class="w-9/10 mx-auto border-b border-slate-300 bg-white"></div>
        <form action="{{ route('seller.register.credentials') }}" enctype="multipart/form-data" method="post">
            @csrf
            <section class="w-full bg-white h-50 p-5">
                <h1 class="font-semibold mb-2">KTP <span class="text-red-600 rounded-full">*</span></h1>

                <div class="flex justify-between grow-0">
                    <!-- Upload box -->
                    <label id="ktpUploadBox"
                        class="h-30 w-30 bg-gray-50 rounded border border-slate-400/30 flex justify-center items-center flex-col cursor-pointer overflow-hidden">
                        <input type="file" id="ktpFile" name="ktpFile" accept="image/png, image/jpeg, image/jpg" class="hidden" required>

                        <!-- Default content -->
                        <div id="ktpPlaceholder" class="flex flex-col justify-center items-center">
                            <svg viewBox="0 -2 30 30" class="text-gray-500 w-6 h-6 mb-2" version="1.1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                xmlns:sketch="http://www.bohemiancoding.com/sketch/ns" fill="currentColor">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <title>upload</title>
                                    <desc>Created with Sketch Beta.</desc>
                                    <defs> </defs>
                                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"
                                        sketch:type="MSPage">
                                        <g id="Icon-Set-Filled" sketch:type="MSLayerGroup"
                                            transform="translate(-571.000000, -676.000000)" fill="currentColor">
                                            <path
                                                d="M599,692 C597.896,692 597,692.896 597,694 L597,698 L575,698 L575,694 C575,692.896 574.104,692 573,692 C571.896,692 571,692.896 571,694 L571,701 C571,701.479 571.521,702 572,702 L600,702 C600.604,702 601,701.542 601,701 L601,694 C601,692.896 600.104,692 599,692 L599,692 Z M582,684 L584,684 L584,693 C584,694.104 584.896,695 586,695 C587.104,695 588,694.104 588,693 L588,684 L590,684 C590.704,684 591.326,684.095 591.719,683.7 C592.11,683.307 592.11,682.668 591.719,682.274 L586.776,676.283 C586.566,676.073 586.289,675.983 586.016,675.998 C585.742,675.983 585.465,676.073 585.256,676.283 L580.313,682.274 C579.921,682.668 579.921,683.307 580.313,683.7 C580.705,684.095 581.608,684 582,684 L582,684 Z"
                                                id="upload" sketch:type="MSShapeGroup"> </path>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                            <h4 class="text-xs text-gray-500">Pilih Media</h4>
                        </div>

                        <!-- Preview akan muncul di sini -->
                        <img id="ktpPreview" class="hidden object-cover h-full w-full" alt="Preview">
                    </label>

                    <!-- Info -->
                    <div class="flex-1">
                        <ul class="list-disc px-8 py-3 text-sm text-gray-500">
                            @error('ktpFile')
                                <li class="text-red-600">
                                    {{ $message }}
                                </li>
                            @enderror
                            <li>Format file harus JPEG, JPG, atau PNG.</li>
                            <li>Ukuran maks 5MB.</li>
                        </ul>
                    </div>
                </div>
            </section>
            <div class="w-9/10 mx-auto border-b border-slate-300 bg-white"></div>
            <section class="w-full bg-white p-5">
                <h1 class="font-semibold mb-1">NPWP </h1>
                <div>
                    <h1 class="text-sm text-gray-800 mb-3">Apakah anda memiliki NPWP?</h1>
                    <div class="grid grid-cols-2 w-full mb-7">
                        <div>
                            <input type="radio" name="have_npwp" class="shadow active:shadow-sky-500" id="haveNpwpYes"
                                value="Ya" checked>
                            <label for="haveNpwpYes">Ya</label>
                        </div>

                        <div>
                            <input type="radio" name="have_npwp" class="shadow active:shadow-sky-500" id="haveNpwpNo"
                                value="Tidak">
                            <label for="haveNpwpNo">Tidak</label>
                        </div>
                    </div>
                </div>

                <!-- Upload box -->
                <div class="flex justify-between grow-0 bg-white pb-4" id="inputNpwp">
                    <label id="npwpUploadBox"
                        class="h-30 w-30 bg-gray-50 rounded border border-slate-400/30 flex justify-center items-center flex-col cursor-pointer overflow-hidden">
                        <input type="file" id="npwpFile" name="npwpFile"  accept="image/png, image/jpeg, image/jpg" class="hidden " required>

                        <!-- Placeholder -->
                        <div id="npwpPlaceholder" class="flex flex-col justify-center items-center">
                            <svg viewBox="0 -2 30 30" class="text-gray-500 w-6 h-6 mb-2" version="1.1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                xmlns:sketch="http://www.bohemiancoding.com/sketch/ns" fill="currentColor">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <title>upload</title>
                                    <desc>Created with Sketch Beta.</desc>
                                    <defs> </defs>
                                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"
                                        sketch:type="MSPage">
                                        <g id="Icon-Set-Filled" sketch:type="MSLayerGroup"
                                            transform="translate(-571.000000, -676.000000)" fill="currentColor">
                                            <path
                                                d="M599,692 C597.896,692 597,692.896 597,694 L597,698 L575,698 L575,694 C575,692.896 574.104,692 573,692 C571.896,692 571,692.896 571,694 L571,701 C571,701.479 571.521,702 572,702 L600,702 C600.604,702 601,701.542 601,701 L601,694 C601,692.896 600.104,692 599,692 L599,692 Z M582,684 L584,684 L584,693 C584,694.104 584.896,695 586,695 C587.104,695 588,694.104 588,693 L588,684 L590,684 C590.704,684 591.326,684.095 591.719,683.7 C592.11,683.307 592.11,682.668 591.719,682.274 L586.776,676.283 C586.566,676.073 586.289,675.983 586.016,675.998 C585.742,675.983 585.465,676.073 585.256,676.283 L580.313,682.274 C579.921,682.668 579.921,683.307 580.313,683.7 C580.705,684.095 581.608,684 582,684 L582,684 Z"
                                                id="upload" sketch:type="MSShapeGroup"> </path>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                            <h4 class="text-xs text-gray-500">Pilih Media</h4>
                        </div>

                        <!-- Preview -->
                        <img id="npwpPreview" class="hidden object-cover h-full w-full" alt="Preview NPWP">
                    </label>

                    <div class="flex-1">
                        <ul class="list-disc px-8 py-3 text-sm text-gray-500">
                            @error('npwpFile')
                                <li class="text-red-600">
                                    {{ $message }}
                                </li>
                            @enderror
                            <li>Format file harus JPEG, JPG, atau PNG.</li>
                            <li>Ukuran maks 5MB.</li>
                        </ul>
                    </div>
                </div>
                <button
                    type="submit"
                    class="w-11/12 h-10 rounded-xl shadow bg-sky-500 font-semibold text-white hidden lg:block mx-auto my-10">
                    Lanjut
                </button>
            </section>
        </form>

    </main>

    <section class="fixed bottom-0 right-0 left-0 h-14 bg-white flex items-center justify-center z-50 lg:hidden">
        <button class="w-11/12 h-10 rounded-xl shadow bg-sky-500 font-semibold text-white ">
            Lanjut
        </button>
    </section>

    <script>
        const ktpFile = document.getElementById("ktpFile");
        const ktpPreview = document.getElementById("ktpPreview");
        const ktpPlaceholder = document.getElementById("ktpPlaceholder");

        ktpFile.addEventListener("change", function(event) {
            const file = event.target.files[0];
            if (!file) return;

            // Preview image
            const reader = new FileReader();
            reader.onload = function(e) {
                ktpPreview.src = e.target.result;
                ktpPreview.classList.remove("hidden");
                ktpPlaceholder.classList.add("hidden");
            }
            reader.readAsDataURL(file);
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const radios = document.querySelectorAll('input[name="have_npwp"]');
            const inputNpwp = document.getElementById("inputNpwp");
            const npwpFile = document.getElementById("npwpFile");
            const npwpPreview = document.getElementById("npwpPreview");
            const npwpPlaceholder = document.getElementById("npwpPlaceholder");

            // Toggle visibility based on radio
            function toggleNpwp() {
                const selected = document.querySelector('input[name="have_npwp"]:checked');
                if (selected && selected.value === "Ya") {
                    inputNpwp.style.display = "flex";
                } else {
                    inputNpwp.style.display = "none";
                    // reset preview
                    npwpFile.value = "";
                    npwpPreview.classList.add("hidden");
                    npwpPlaceholder.classList.remove("hidden");
                }
            }

            radios.forEach(radio => radio.addEventListener("change", toggleNpwp));
            toggleNpwp(); // set awal

            // File input preview
            npwpFile.addEventListener("change", function(event) {
                const file = event.target.files[0];
                if (!file) return;

                // Validasi tipe file
                const validTypes = ["image/jpeg", "image/jpg", "image/png"];
                if (!validTypes.includes(file.type)) {
                    alert("File harus JPG, JPEG, atau PNG!");
                    npwpFile.value = "";
                    return;
                }

                // Validasi ukuran max 5MB
                const maxSize = 5 * 1024 * 1024;
                if (file.size > maxSize) {
                    alert("Ukuran file maksimal 5MB!");
                    npwpFile.value = "";
                    return;
                }

                // Preview
                const reader = new FileReader();
                reader.onload = function(e) {
                    npwpPreview.src = e.target.result;
                    npwpPreview.classList.remove("hidden");
                    npwpPlaceholder.classList.add("hidden");
                }
                reader.readAsDataURL(file);
            });
        });
    </script>

    <script>
        const npwpFile = document.getElementById('npwpFile');
        const haveNpwpYes = document.getElementById('haveNpwpYes');
        const haveNpwpNo = document.getElementById('haveNpwpNo');

        function toggleRequired() {
            if (haveNpwpYes.checked) {
                npwpFile.required = true; // wajib diisi
            } else {
                npwpFile.required = false; // tidak wajib
            }
        }

        // jalankan saat load dan saat user klik radio
        toggleRequired(); // initial check
        haveNpwpYes.addEventListener('change', toggleRequired);
        haveNpwpNo.addEventListener('change', toggleRequired);
    </script>

</body>

</html>
