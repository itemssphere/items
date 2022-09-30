<script setup>
/** Source */
import { ref, toRef, onMounted } from 'vue'
import { Splide, SplideTrack, SplideSlide } from '@splidejs/vue-splide'
/** Components */
import ProductSlide from './ProductSlide.vue'
import SliderArrows from '../Components/SliderArrows.vue'
/** Props */
const props = defineProps({
    data: Array,
    options: {
        type: Object,
        required: false
    },
})
/** Constants */
const data = toRef(props, 'data')
const options = toRef(props, 'options')
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
const splideOptions = ref({
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
})
/** Hooks */
onMounted(() => {
    applyOptions(options.value)
})
/** Functions */
const applyOptions = (obj) => {
    for (const [key, value] of Object.entries(obj)) {
        splideOptions.value[key] = value
    }
}

</script>
<!-- Products Slider Template -->
<template>
    <div class="products-slider">
        <Splide class="splide products-slider d-none d-lg-block" :hasTrack="false" :options="splideOptions"> 
            <div class="products__section d-flex align-items-center justify-content-center justify-content-lg-between">
                <div class="d-flex align-items-center">
                    <slot name="title" />
                    <slot name="link" />
                </div>
                <SliderArrows :options="arrowsOptions"/>
            </div>
            <SplideTrack>
                <SplideSlide v-for="product in data" :key="product.id">
                    <ProductSlide :product="product" :id_prefix="slider_id" />
                </SplideSlide>
            </SplideTrack>
        </Splide>
    </div>
</template>