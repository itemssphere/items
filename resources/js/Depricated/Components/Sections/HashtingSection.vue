<script setup>
/** Source */
import { useHashtags } from '@/Composables/Data/useHashtags'
import { useI18n } from 'vue-i18n'
/** Components */
import HashtagsSlider from '../Sliders/Hashtags/HashtagsSlider.vue'
/** Constants */
const { hashtags } = useHashtags()
const { t } = useI18n({ inheritLocale: true })
</script>
<!-- Template of Hashtaging Section -->
<template>
    <HashtagsSlider :data="hashtags">
        <template #title>
            <h2 class="products__section--text regular">{{ t("titles.hashtags") }}</h2>     
        </template>
        <template #link>
            <a href="" class="products__section--link regular">{{ t("links.view_all") }}</a>
        </template>
    </HashtagsSlider>
</template>