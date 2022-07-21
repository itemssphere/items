<script setup>
/** Components */
import { Head } from '@inertiajs/inertia-vue3'
import ProductsSlider from '../Components/Sliders/ProductsSlider.vue'
import HashtingSection from '../Components/Sections/HashtingSection.vue'
import SocialProgramsSection from '../Components/Sections/SocialProgramsSection.vue'
import NewsSection from '../Components/Sections/NewsSection.vue'
import CharitySection from '../Components/Sections/CharitySection.vue'
import FrontPage from '../Layouts/FrontPage.vue'
import CategoriesSlider from '@/Components/Sliders/CategoriesSlider.vue'
</script>
<!-- Home Page Template -->
<template>
    <Head  title="Home Page" />
    <FrontPage>
        <section class="touch index-touch mb-2">
            <CategoriesSlider />
            <ProductsSlider />
            <HashtingSection />
            <SocialProgramsSection />
            <ProductsSlider />
            <CharitySection />
            <NewsSection />
        </section>
    </FrontPage>
</template>
