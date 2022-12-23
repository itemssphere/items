<script setup>
/** Source */
import { useBanners } from "@/Composables/Advertising/useBanners"
/** Components */
import PickerCategories from "../Navigation/Pickers/PickerCategories.vue"
import SliderMain from "../Sliders/SliderMain.vue"
import BannerMini from "../Cards/BannerMini.vue"
/** Constants */
const { main_banners, mini_banners } = useBanners()
</script>
<!-- Categories Section Template -->
<template>
  <PickerCategories>
      <div class="col-12">
        <SliderMain :data="main_banners" />
      </div>
      <div class="col-3 d-none d-lg-block" v-for="banner in mini_banners" :key="banner.id">
        <BannerMini :banner="banner" />
      </div>
  </PickerCategories>
</template>