<script setup>
/** Source */
import { useProducts } from '@/Composables/useProducts'
import { Splide, SplideTrack, SplideSlide } from '@splidejs/vue-splide'
/** Components */
import ProductSlide from './ProductSlide.vue'
import SliderArrows from '../Components/SliderArrows.vue'
/** Props */
defineProps({
    data: Array
})
/** Constants */
const arrowsOptions = {
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
const splideOptions = {
    tag: 'section',
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
<!-- Products Slider Template -->
<template>
    <div class="container">
        <div class="products-slider">
            <Splide class="products-slider d-none d-lg-block" :hasTrack="false" :options="splideOptions"> 
                <div class="products__section d-flex align-items-center justify-content-center justify-content-lg-between">
                    <div class="d-flex align-items-center">
                        <slot name="title" />
                        <slot name="link" />
                    </div>
                    <SliderArrows :options="arrowsOptions"/>
                </div>
                <SplideTrack>
                    <SplideSlide v-for="product in data" :key="product.id">
                        <ProductSlide :product="product" />
                    </SplideSlide>
                </SplideTrack>
            </Splide>
        </div>
    </div>
</template>