<script setup>
/** Source */
import { ref, onMounted } from 'vue'
import Splide from '@splidejs/splide'
/** onMounted */
onMounted(function(){
    new Splide( '.splide' ).mount()
})
/** constants */
const buttons = ref([
    {
        name: 'prev',
        icon: '/assets/img/svg/slider-prev.svg',
    },
    {
        name: 'next',
        icon: '/assets/img/svg/slider-next.svg',
    },
])
const banners = ref([
    {
        name: 'banner',
        icon: '/assets/img/slider-banner.png',
    },
    {
        name: 'banner',
        icon: '/assets/img/slider-banner.png',
    },
])
</script>
>
<!-- Main Slider Template -->
<template>
  <section class="splide" aria-label="Splide Basic HTML Example">
    <div class="main-slider d-flex align-items-center">
        <div class="splide__arrows main-slider__navs d-none d-lg-flex">
            <button 
                :class="`splide__arrow splide__arrow--${button.name} main-slider__navs--btn  main-slider__navs--${button.name}`"
                v-for="button in buttons"
                :key="button.index">
                <img :src="button.icon" :alt="button.name">
            </button>
        </div>
        <div class="splide__track">
            <ul class="splide__list">
                <div class="splide__slide"
                    v-for="banner in banners"
                    :key="banner.index">
                    <div class="main-slider__item">
                        <img :src="banner.icon" :alt="banner.name">
                    </div>
                </div>
            </ul>
        </div>
    </div>
  </section>
</template>