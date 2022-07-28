<script setup>
/** Source */
import { ref, toRef, onMounted } from 'vue'
import Splide from '@splidejs/splide'
/** Props */
const props = defineProps({
    id: String
})
/** constants */
const id = toRef(props, 'id')
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
/** onMounted */
onMounted(function(){
    new Splide( `#${id.value}` ).mount()
})
</script>
>
<!-- Main Slider Template -->
<template>
  <section :id="id" class="splide">
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