<script setup>
    // ...
</script>
<!-- ... -->
<template>
    <div class="baner-slider-container desktop-view">
        <button class="prev-slide">
            <img src="/image/svg/slider-prev.svg" alt="prev icon" />
        </button>
        <div class="baren-slider-text">
            <h3 class="bold home-slider-title">SALE 50 %</h3>
            <h4 class="bold home-slider-sub-title">Buy and help others</h4>
            <div class="images-switcher-dots-desktop">
                <div class="dot active-dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
            </div>
        </div>
        <button class="next-slide">
            <img src="/image/svg/slider-next.svg" alt="next icon" />
        </button>
    </div>
    <div class="row desktop-view">
        <div class="col-md-3 baner-bottom-section">
            <div class="banner-bottom-section-image" style="background-image: url('/image/mini-banner1.png')">
            </div>
        </div>
        <div class="col-md-3 baner-bottom-section">
            <div class="banner-bottom-section-image" style="background-image: url('/image/mini-banner2.png')">
            </div>
        </div>
        <div class="col-md-3 baner-bottom-section">
            <div class="banner-bottom-section-image" style="background-image: url('/image/mini-banner3.png')">
            </div>
        </div>
        <div class="col-md-3 baner-bottom-section">
            <div class="banner-bottom-section-image" style="background-image: url('/image/iphone-banner-2.jpg')">
            </div>
        </div>
    </div>
    <div class="home-page-slider-mobile">
        <div class="slider-images-container-mobile"></div>
        <div class="images-dots-mobile">
            <div class="slider-dots-mobile active-image"></div>
            <div class="slider-dots-mobile"></div>
            <div class="slider-dots-mobile"></div>
            <div class="slider-dots-mobile"></div>
        </div>
        <div class="small-banners-container">
            <div class="small-banners-mobile" style="background-image: url('/image/mini-banner1.png')"></div>
            <div class="small-banners-mobile" style="background-image: url('/image/mini-banner2.png')"></div>
            <div class="small-banners-mobile" style="background-image: url('/image/mini-banner3.png')"></div>
            <div class="small-banners-mobile" style="background-image: url('/image/mini-banner2.png')"></div>
        </div>
    </div>
</template>