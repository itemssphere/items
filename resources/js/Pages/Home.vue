<script setup>
/** Components */
import { Head } from '@inertiajs/inertia-vue3'
import FrontPage from '@/Layouts/FrontPage.vue'
import ProductsSection from '@/Components/Sections/ProductsSection.vue'
import HashtingSection from '@/Components/Sections/HashtingSection.vue'
import SocialProgramsSection from '@/Components/Sections/SocialProgramsSection.vue'
import SalesSection from '@/Components/Sections/SalesSection.vue'
import CharitiesSection from '@/Components/Sections/CharitiesSection.vue'
import NewsSection from '@/Components/Sections/NewsSection.vue'
import CategoriesSection from '@/Components/Sections/CategoriesSection.vue'
</script>
<!-- Home Page Template -->
<template>
    <Head  title="Home Page" />
    <FrontPage>
        <section class="touch index-touch mb-2">
            <CategoriesSection :id="`main1`" />
            <CategoriesSection :id="`main2`"/>
            <ProductsSection />
            <HashtingSection />
            <SocialProgramsSection />
            <SalesSection />
            <CharitiesSection />
            <NewsSection />
        </section>
    </FrontPage>
</template>
