<script>
    var themeToggle = document.getElementById('theme-toggle');
    var htmlElement = document.documentElement;

    var currentTheme = localStorage.getItem('theme');
    if (currentTheme === 'dark') {
        htmlElement.classList.add('dark');
    } else if (currentTheme === 'light') {
        htmlElement.classList.remove('dark');
    }

    themeToggle.addEventListener('click', () => {
        if (htmlElement.classList.contains('dark')) {
            htmlElement.classList.remove('dark');
            localStorage.setItem('theme', 'light');
        } else {
            htmlElement.classList.add('dark');
            localStorage.setItem('theme', 'dark');
        }
    });

</script>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js" defer></script>
<script>
    function initSwiper() {
        console.log("Menginisialisasi Swiper...");
        // Hapus instance Swiper before
        document.querySelectorAll(".swiper").forEach(swiperEl => {
            if (swiperEl.swiper) {
                console.log("Swiper before...");
                swiperEl.swiper.destroy(true, true);
            }
        });
        // Inisialisasi Swiper 
        document.querySelectorAll(".mySwiper").forEach(swiperEl => {
            console.log("create instance Swiper");
            new Swiper(swiperEl, {
                loop: true,
                autoplay: {
                    delay: 4000,
                    disableOnInteraction: false,
                },
                effect: "fade",
                fadeEffect: {
                    crossFade: true,
                },
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },
            });
        });

        // Inisialisasi Swiper untuk thumbnail slider (jika ada)
        if (document.querySelector(".thumb-slider")) {
            console.log("create instance thumbnail...");
            new Swiper(".thumb-slider", {
                spaceBetween: 10,
                slidesPerView: 4,
                freeMode: true,
                watchSlidesProgress: true,
            });
        }
        if (document.querySelector(".cardSlider")) {
            document.querySelectorAll(".cardSlider").forEach(slider => {
                let slidesPerView = slider.getAttribute("data-slides") || 1; // Default 1 jika tidak ada
                let xs = parseInt(slider.getAttribute("data-xs") || "1", 10);
                let sm = parseInt(slider.getAttribute("data-sm") || xs, 10);
                let md = parseInt(slider.getAttribute("data-md") || sm, 10);
                let lg = parseInt(slider.getAttribute("data-lg") || md, 10);
                slidesPerView = parseInt(slidesPerView, 10);

                new Swiper(slider, {
                    slidesPerView: slidesPerView,
                    spaceBetween: 15,
                    loop: true,
                    autoplay: {
                        delay: 3000,
                        disableOnInteraction: false,
                    },
                    breakpoints: {
                        640: { slidesPerView: sm }, // sm
                        768: { slidesPerView: md }, // md
                        1024: { slidesPerView: lg }, // lg
                    },
                });
            });
        }

        console.log("Swiper berhasil init");
    }

    document.addEventListener("DOMContentLoaded", () => {
        console.log("Memulai ");
        initSwiper();
    });

    document.addEventListener("livewire:navigated", () => {
        console.log("Init reload");
        initSwiper();
    });
</script>

