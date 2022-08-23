<script setup>
/** Source */
import { ref } from 'vue'
import { useBanners } from '@/Composables/Advertising/useBanners'
import { useButtons } from '@/Composables/Assets/useButtons'

/** Components */
import { Splide, SplideTrack, SplideSlide } from '@splidejs/vue-splide'

/** Constants */
const { main_banners } = useBanners()
const { sliderButtons } = useButtons()
/** Slider Options */
const Options = {
    type: 'loop',
    pagination: false,
}
</script>
<!-- Main Slider Template -->
<template>
  <Splide :hasTrack="false" :options="Options" >
    <div class="main-slider d-flex align-items-center">
        <div class="splide__arrows main-slider__navs d-none d-lg-flex">
            <template v-for="button in sliderButtons" :key="button.index">
                <button :class="`splide__arrow splide__arrow--${button.name} main-slider__navs--btn  main-slider__navs--${button.name}`">
                    <img :src="button.icon" :alt="button.name">
                </button>
            </template>
        </div>
        <SplideTrack>
            <SplideSlide v-for="banner in main_banners" :key="banner.id">
                <div class="main-slider__item">
                    <img :src="banner.cover" :alt="banner.title">
                </div>
            </SplideSlide>
        </SplideTrack>
    </div>
  </Splide>
</template>