<script setup>
/** Source */
import { useSocials } from '@/Composables/useSocials'
/** Components */
import Authenticated from '@/Layouts/Authenticated.vue'
import { Head } from '@inertiajs/inertia-vue3'
import SocialSlide from '@/Components/Sliders/Socials/SocialSlide.vue';
/** Constants */
const { socials } = useSocials()
</script>
<template>
    <Head title="Social Projects" />
    <Authenticated>
        <template #page_title>
            Social Projects
        </template>
        <h1 class="organization__content--title organization__content--padding bold">Social Projects</h1>
        <div class="organization__content--padding">
            <div class="row">
                <div class="col-6 col-lg-3" v-for="social in socials" :key="social.id">
                    <SocialSlide :social="social" />
                </div><!-- end -->
            </div>
        </div>
    </Authenticated>
</template>
