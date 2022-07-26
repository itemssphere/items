<script setup>
/** Components */
import { Splide, SplideTrack, SplideSlide } from '@splidejs/vue-splide'
import CharitySlide from './CharitySlide.vue'
import SliderArrows from '../Components/SliderArrows.vue'
/** Props */
defineProps({
    data: Array
})
/** Constants */
const arrow_options = {
  classes: {  
    arrows: "charity-slider__navs d-none d-lg-flex",
    prev: "charity-slider__navs--btn charity-slider__navs--prev",
    next: "charity-slider__navs--btn charity-slider__navs--next",
  },
  buttons: {
    prev: '/assets/img/svg/slider-prev.svg',
    next: '/assets/img/svg/slider-next.svg',
  }
}
const Options = {
    type: 'slide',
    autoplay: false,
    perPage: 3,
    breakpoints: {
        768: {
            perPage: 1,
            padding: {
                right: '100px'
            },
        },
        1024: {
            perPage: 2,
            padding: {
                right: '100px'
            },
        },
    },
    arrows: false,
    pagination: false,
    updateOnMove: true,
}
</script>
<!-- Charities Slider Template -->
<template>
    <div class="container-lg mobile-container">
        <div class="charity">
            <div class="row flex-lg-row flex-column-reverse">
                <div class="col-lg-8 col-12">
                    <Splide class="charity-slider" :hasTrack="false" :options="Options">
                        <SliderArrows :options="arrow_options" />
                        <SplideTrack>
                            <SplideSlide v-for="item in data" :key="item.id">
                               <CharitySlide :charity="item" />
                            </SplideSlide>
                        </SplideTrack>
                    </Splide>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="charity__text">
                        <h1 class="charity__text--title bold">
                            <slot name="title" />
                            <p><slot name="subtitle" /></p>
                        </h1>
                        <p class="charity__text--desc regular">
                            <slot name="description" />
                        </p>
                        <slot name="links" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>