<script setup>
/** Source */
import { ref } from 'vue'
import { getActiveLanguage } from 'laravel-vue-i18n'
/** Components */
import { Link } from '@inertiajs/inertia-vue3'
/** Constants */
const terms = ref([
    {
        title: 'home',
        url: route('home', getActiveLanguage()),
    },
    {
        title: 'market',
        url: route('market', getActiveLanguage()),
    },
    {
        title: 'shop',
        url: route('shop.index', getActiveLanguage()),
    },
    {
        title: 'charity',
        url: route('charity', getActiveLanguage()),
    },
    {
        title: 'about us',
        url: route('about', getActiveLanguage()),
    }
])
</script>
<!-- Terms List Template -->
<template>
    <ul class="footer__menu">
        <li 
            v-for="item in terms"
            :key="item.index"
            class="footer__menu--item d-flex"
        >
            <Link :href="item.url" class="footer__menu--link regular">
                <span class="capitalize" style="text-transform: capitalize;">
                    {{ item.title }}
                </span>
            </Link>
        </li>
    </ul>
</template>