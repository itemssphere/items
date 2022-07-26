<script setup>
/** Components */
import { Splide, SplideTrack, SplideSlide } from "@splidejs/vue-splide"
import SocialSlide from "./SocialSlide.vue"
import SliderArrows from "../Components/SliderArrows.vue";
/** Props */
defineProps({
  data: Array,
});
/** Constants */
const arrow_options = {
  classes: {  
    arrows: "social-program-slider__navs d-none d-lg-flex",
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
};
</script>
<!-- Social Programs Slider Template -->
<template>
  <div class="container-lg mobile-container">
    <div class="social-program">
      <div class="social-program__bg">
        <div class="social-program__content d-flex flex-column flex-lg-row">
          <div class="social-program__text d-flex flex-column align-items-start">
            <slot name="title" />
            <slot name="description" />
            <slot name="link" />
          </div>
          <SliderArrows :options="arrow_options" />
          <Splide class="social-program-slider" :hasTrack="false" :options="Options">
            <SplideTrack>
              <SplideSlide v-for="item in data" :key="item.id">
                <SocialSlide :social="item" />
              </SplideSlide>
            </SplideTrack>
          </Splide>
        </div>
      </div>
    </div>
  </div>
</template>