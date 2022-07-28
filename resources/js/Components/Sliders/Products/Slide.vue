<script setup>
/** Source */
import { toRef, onMounted } from 'vue'
import Splide from '@splidejs/splide'
/** Props */
const props = defineProps({
  id: { type: String, required: true },
  images: { type: Array, requred: true }
});
/** Constants */
const id = toRef(props, 'id')
const images = toRef(props, 'images')

/** onMounted */
onMounted(() => {
  new Splide( `#${id.value}`, { pagination: false, arrows: false } ).mount()
})
</script>
<!-- Template of Product Slide -->
<template>
  <section :id="id" class="splide">
    <div class="splide__arrows item-slider__navs">
        <button class="splide__arrow item-slider__navs--btn item-slider__navs--prev">
            <img src="/assets/img/svg/item-prev.svg" alt="">
        </button>
        <button class="splide__arrow item-slider__navs--btn item-slider__navs--next">
          <img src="/assets/img/svg/item-next.svg" alt="">
        </button>
    </div>
    <div class="splide__track">
      <div class="splide__list">
        <div class="splide__slide" v-for="image in images" :key="image.index">
          <img :src="image.url" alt="" />
        </div>
      </div>
    </div>
  </section>
</template>