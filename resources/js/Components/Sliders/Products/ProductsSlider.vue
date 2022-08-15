<script setup>
/** Source */
import { ref, toRef, onMounted } from 'vue'
import Splide from '@splidejs/splide'
/** Components */
import ProductSlide from './ProductSlide.vue'
import SliderArrows from '../Components/SliderArrows.vue'
/** Props */
const props = defineProps({
    data: Array,
    slider_id: String
})
/** Constants */
const slider_id = toRef(props, 'slider_id')
const data = toRef(props, 'data')
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
    type: 'slide',
    autoplay: false,
    perPage: 5,
    breakpoints: {
        1024: {
            perPage: 2,
        },
    },
    arrows: true,
    pagination: false,
    updateOnMove: true,
}
onMounted(() => {
    new Splide(`#${slider_id.value}`, splideOptions).mount()
})
</script>
<!-- Products Slider Template -->
<template>
    <div class="products-slider">
        <div :id="slider_id" class="splide products-slider d-none d-lg-block" :hasTrack="false" aria-labelledby="customLabel"> 
            <div id="customLabel" class="products__section d-flex align-items-center justify-content-center justify-content-lg-between">
                <div class="d-flex align-items-center">
                    <slot name="title" />
                    <slot name="link" />
                </div>
                <SliderArrows :options="arrowsOptions"/>
            </div>
            <div class="splide__track">
                <div class="splide__list">
                    <div class="splide__slide" v-for="product in data" :key="product.id">
                        <ProductSlide :product="product" :id_prefix="slider_id" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>