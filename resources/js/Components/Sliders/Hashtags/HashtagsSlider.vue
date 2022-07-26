<script setup>
/** Components */
import { Splide, SplideTrack, SplideSlide } from '@splidejs/vue-splide'
import HashtagSlide from './HashtagSlide.vue'
import SliderArrows from '../Components/SliderArrows.vue'
/** Props */
defineProps({
    data: Array
})
/** Constants */
const arrow_options = {
  classes: {  
    arrows: "products-slider__navs d-flex",
    prev: "products-slider__navs--btn products-slider__navs--prev",
    next: "products-slider__navs--btn products-slider__navs--next",
  },
  buttons: {
    prev: '/assets/img/svg/slider-prev.svg',
    next: '/assets/img/svg/slider-next.svg',
  }
}
const Options = {
    type: 'slide',
    autoplay: false,
    perPage: 5,
    breakpoints: {
        1024: {
            perPage: 2,
        },
    },
    arrows: false,
    pagination: false,
    updateOnMove: true,
}
</script>
<!-- Hashtags Slider Template -->
<template>
    <div class="container">
        <div class="products-slider">
            <Splide class="products-slider d-none d-lg-block" :hasTrack="false" :options="Options"> 
                <div class="products__section d-flex align-items-center justify-content-center justify-content-lg-between">
                    <div class="d-flex align-items-center">
                        <slot name="title" />
                        <slot name="link" />
                    </div>
                    <SliderArrows :options="arrow_options"/>
                </div>
                <SplideTrack>
                    <SplideSlide v-for="item in data" :key="item.id">
                        <HashtagSlide :hashtag="item" />
                    </SplideSlide>
                </SplideTrack>
            </Splide>
        </div>
    </div>
</template>