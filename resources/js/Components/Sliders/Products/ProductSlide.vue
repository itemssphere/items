<script setup>
/** Source */
import { toRef, onMounted } from 'vue'
import { Link } from '@inertiajs/inertia-vue3'
import Splide from '@splidejs/splide'
/** Components */
import Slide from './Slide.vue'
/** Props */
defineProps({
  product: { type: Object, required: true },
  id_prefix: { type: String, required: true }
})
</script>
<!-- Template of Product Slide -->
<template>
  <div class="products-slider__item">
    <button class="products-slider__item--fav">
      <img src="/assets/img/svg/product-fav.svg" alt="" />
    </button>
    <div class="item-slider">
      <Slide :id="`${id_prefix}_${product.id}_slider`" :images="product.images" />
    </div>
    <div class="products-slider__item--footer d-flex flex-column align-items-start">
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
      <Link href="" class="products-slider__item--name regular">
        {{ product.name }}
      </Link>
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