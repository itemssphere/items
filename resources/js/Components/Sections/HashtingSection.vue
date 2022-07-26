<script setup>
/** Source */
import { useHashtags } from '@/Composables/useHashtags'
/** Components */
import HashtagsSlider from '../Sliders/Hashtags/HashtagsSlider.vue'
/** Constants */
const { hashtags } = useHashtags()
</script>
<!-- Template of Hashtaging Section -->
<template>
    <HashtagsSlider :data="hashtags">
        <template #title>
            <h2 class="products__section--text regular">Hashtags</h2>     
        </template>
        <template #link>
            <a href="" class="products__section--link regular">View all</a>
        </template>
    </HashtagsSlider>
</template>