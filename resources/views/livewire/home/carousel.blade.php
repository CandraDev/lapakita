<div class="relative w-full lg:max-w-6xl lg:mx-auto lg:mt-2 lg:rounded-sm shadow-lg aspect-[3/1]">
    <!-- Global Shimmer -->
    {{-- <div  class="absolute inset-0 bg-sky-500 animate-pulse z-20"></div> --}}
    <div id="swiper-shimmer" class="relative w-full h-full rounded-lg overflow-hidden bg-sky-200">
        <div class="absolute inset-0 z-20"
            style="
            background: linear-gradient(
                90deg,
                rgba(224, 242, 254, 0.6) 25%,
                rgba(255, 255, 255, 0.9) 50%,
                rgba(224, 242, 254, 0.6) 75%
            );
            background-size: 200% 100%;
            animation: shimmer 1.5s infinite;
         ">
        </div>
    </div>

    <style>
        @keyframes shimmer {
            0% {
                background-position: -200% 0;
            }

            100% {
                background-position: 200% 0;
            }
        }
    </style>

    <!-- Swiper -->
    <div id="mySwiper" class="swiper w-full h-full opacity-0 transition-opacity duration-500" style="display: none;">
        <div class="swiper-wrapper h-full">

            <div class="swiper-slide h-full">
                <img src="https://picsum.photos/1200/400?random=1" alt="Banner 1"
                    class="w-full h-full object-cover swiper-img">
            </div>

            <div class="swiper-slide h-full">
                <img src="https://picsum.photos/1200/400?random=2" alt="Banner 2"
                    class="w-full h-full object-cover swiper-img">
            </div>

            <div class="swiper-slide h-full">
                <img src="https://picsum.photos/1200/400?random=3" alt="Banner 3"
                    class="w-full h-full object-cover swiper-img">
            </div>

        </div>

        <!-- Pagination -->
        <div class="swiper-pagination"></div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const images = document.querySelectorAll(".swiper-img");
        const shimmer = document.getElementById("swiper-shimmer");
        const swiperEl = document.getElementById("mySwiper");
        let loadedCount = 0;

        images.forEach(img => {
            img.addEventListener("load", () => {
                loadedCount++;
                // kalau semua gambar sudah load
                if (loadedCount === images.length) {
                    swiperEl.style.opacity = 1;
                    swiperEl.style.display = "block";
                    shimmer.style.display = "none";
                }
            });
        });
    });
</script>
