<div class="relative w-full lg:max-w-6xl lg:mx-auto lg:mt-2 lg:rounded-sm shadow-lg aspect-[3/1]">
    <!-- Global Shimmer -->
    <div id="swiper-shimmer" class="absolute inset-0 bg-sky-100 animate-pulse z-20"></div>

    <!-- Swiper -->
    <div id="mySwiper" class="swiper w-full h-full opacity-0 transition-opacity duration-500">
        <div class="swiper-wrapper h-full">

            <div class="swiper-slide h-full">
                <img
                    src="https://picsum.photos/1200/400?random=1"
                    alt="Banner 1"
                    class="w-full h-full object-cover swiper-img">
            </div>

            <div class="swiper-slide h-full">
                <img
                    src="https://picsum.photos/1200/400?random=2"
                    alt="Banner 2"
                    class="w-full h-full object-cover swiper-img">
            </div>

            <div class="swiper-slide h-full">
                <img
                    src="https://picsum.photos/1200/400?random=3"
                    alt="Banner 3"
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
                shimmer.style.display = "none";
                swiperEl.style.opacity = 1;
            }
        });
    });
});
</script>
