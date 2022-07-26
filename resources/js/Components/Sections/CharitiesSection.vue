<script setup>
/** Source */
import { useCharities } from "@/Composables/useCharities"
/** Components */
import CharitiesSlider from "../Sliders/Charities/CharitiesSlider.vue"
/** Constants */
const { charities } = useCharities()
</script>
<!-- Charities Section's Template -->
<template>
  <CharitiesSlider :data="charities">
    <template #title> Charity </template>
    <template #subtitle> Buy and help others </template>
    <template #description>
      We used light green and blue colors that match the company identity. The
      app provides users with different types of statistics on products and
      sales. To make this data easy to understand, we visualized it with charts
      and created hierarchical navigation through data. We also created
      different types of filters for quick and easy search
    </template>
    <template #links>
      <ul class="charity__text--btns d-flex align-items-center">
        <li class="charity__text--li d-flex">
          <a href="" class="charity__text--btn bold"> View all </a>
        </li>
      </ul>
    </template>
  </CharitiesSlider>
</template>