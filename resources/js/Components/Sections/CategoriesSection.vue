<script setup>
/** Source */
import { useBanners } from "@/Composables/Advertising/useBanners"
/** Components */
import CategoriesPicker from "../Navigation/Pickers/CategoriesPicker.vue"
import MainSlider from "../Sliders/MainSlider.vue"
import BannerMini from "../Cards/BannerMini.vue"
/** Constants */
const { banners } = useBanners()
</script>
<!-- Categories Section Template -->
<template>
  <CategoriesPicker>
    <!-- Main Slider Section -->
    <template v-slot:mainSlider>
      <div class="col-12">
        <MainSlider />
      </div>
    </template>
    <!-- Banners -->
    <template v-slot:banners>
      <div
        class="col-3 d-none d-lg-block"
        v-for="banner in banners"
        :key="banner.index"
      >
        <BannerMini :banner="banner" />
      </div>
    </template>
  </CategoriesPicker>
</template>