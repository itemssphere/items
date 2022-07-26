<script setup>
/** Source */
import { Splide, SplideSlide, SplideTrack } from "@splidejs/vue-splide";
import SliderArrows from '../Components/SliderArrows.vue'
/** Props */
defineProps({
  product: { type: Object, required: true },
});
/** Constants */
const arrow_options = {
  classes: {  
    arrows: "item-slider__navs",
    prev: "item-slider__navs--btn item-slider__navs--prev",
    next: "item-slider__navs--btn item-slider__navs--next",
  },
  buttons: {
    prev: '/assets/img/svg/item-prev.svg',
    next: '/assets/img/svg/item-next.svg',
  }
}
const Options = {
  type: "slide",
  autoplay: false,
  perPage: 1,
  breakpoints: {
    1024: {
      perPage: 2,
    },
  },
  arrows: false,
  pagination: false,
  updateOnMove: true,
};
</script>
<template>
  <div class="products-slider__item">
    <button class="products-slider__item--fav">
      <img src="/assets/img/svg/product-fav.svg" alt="" />
    </button>
    <div class="item-slider">
      <Splide :hasTrack="false" :options="Options">
        <SliderArrows :options="arrow_options" />
        <SplideTrack>
          <SplideSlide v-for="image in product.images" :key="image.id">
            <img :src="image.url" alt="" />
          </SplideSlide>
        </SplideTrack>
      </Splide>
    </div>
    <div
      class="products-slider__item--footer d-flex flex-column align-items-start"
    >
      <div class="products-slider__item--status regular" :class="{ 'products-slider__item--status--green': product.price?.sale }">
        {{ product.status.toUpperCase() }}
      </div>
      <div class="products-slider__item--price bold" :class="{ 'products-slider__item--price--red': product.price?.sale }">
        <template v-if="product.price?.sale">
        {{ product.price.currency.symbol }}{{ product.price.sale }}
          <span class="products-slider__item--price--old">{{ product.price.currency.symbol }}{{ product.price.amount }}</span>
        </template>
        <template v-else>
          {{ product.price.currency.symbol }}{{ product.price.amount }}
        </template>
      </div>
      <a href="" class="products-slider__item--name regular">
        {{ product.name }}
      </a>
      <div class="products-slider__item--stars regular d-flex align-items-center">
        <template v-for="star in [1, 2, 3, 4, 5]" :key="star.index">
          <div
            class="products-slider__item--stars--item"
            :class="{
              'products-slider__item--stars--item--active':
                star <= product.stars,
            }"
          ></div>
        </template>
        <span>{{ product.total_reviews }} review</span>
      </div>
    </div>
  </div>
</template>