<script setup>
/** Source */
import { useSocials } from "@/Composables/Data/useSocials"
import { useI18n } from 'vue-i18n'
/** Components */
import SocialsSlider from "../Sliders/Socials/SocialsSlider.vue"
/** Constants */
const { socials } = useSocials()
const { t } = useI18n({ inheritLocale: true })
</script>
<!-- Social Programs Section's Template -->
<template>
  <SocialsSlider :data="socials">
    <template #title>
      <h1 class="social-program__text--title bold">{{ t("titles.social_programs") }}</h1>
    </template>
    <template #subtitle>
      <h2 class="social-program__text--title-smoll bold">lorem ipsum</h2>
    </template>
    <template #description>
      <p class="social-program__text--desc regular">
        We used light green and blue colors that match the company identity. The
        app provides users with different types of statistics on products and
        sales. To make this data easy to understand, we visualized it with
        charts and created hierarchical navigation through data. We also created
        different types of filters for quick and easy search
      </p>
    </template>
    <template #link>
      <a href="" class="social-program__text--link bold">{{ t("links.view_all") }}</a>
    </template>
  </SocialsSlider>
</template>