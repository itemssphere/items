<script setup>
/** Spource */
import { Splide, SplideSlide } from '@splidejs/vue-splide';
/** Props */
defineProps({
    images: { type: Array, required: true }
})
</script>

<template>
    <Splide aria-labelledby="product-item">
        <div class="splide__arrows item-slider__navs">
            <button class="splide__arrow splide__arrow--prev item-slider__navs--btn item-slider__navs--prev">
                <img src="/assets/img/svg/item-prev.svg" alt="">
            </button>
            <button class="splide__arrow splide__arrow--next item-slider__navs--btn item-slider__navs--next">
                <img src="/assets/img/svg/item-next.svg" alt="">
            </button>
        </div>
        <SplideSlide v-for="image in images" :key="image.id">
            <img :src="image.url" alt="">
        </SplideSlide>
    </Splide>
</template>