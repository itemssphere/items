<script setup>
/** Source */
import { ref } from 'vue'
import { Link } from '@inertiajs/inertia-vue3'
import { useI18n } from 'vue-i18n'
/** Constnats */
const { locale, t } = useI18n({ inheritLocale: true })
const menu = ref([
    {
        route: 'home',
        icon: '/assets/img/svg/menu/home1.svg',
    },
    {
        route: 'market',
        icon: '/assets/img/svg/menu/market1.svg',
    },
    {
        route: 'shop',
        icon: '/assets/img/svg/menu/shop1.svg',
    },
    {
        route: 'social',
        icon: '/assets/img/svg/menu/social1.svg',
    },
    {
        route: 'charity',
        icon: '/assets/img/svg/menu/charitys1.svg',
    },
    {
        route: 'news',
        icon: '/assets/img/svg/menu/news1.svg',
    },
])
</script>
<!-- Mobile Menu Template -->
<template>
    <div class="m-header d-block d-lg-none">
        <div class="container">
            <ul class="m-header__menu d-flex justify-content-between">
                <li class="m-header__menu--li" v-for="item in menu" :key="item.index">
                    <Link 
                        class="m-header__menu--a regular d-flex flex-column align-items-center"
                        :class="{ active: item.route == route().current() }"
                        :href="route(item.route, locale)"
                    >
                        <figure class="m-header__menu--figure d-flex justify-content-center">
                            <div class="m-header__menu--icon">
                                <img :src="item.icon" class="convert-svg" :alt="item.route">
                            </div>
                        </figure>
                        <p>
                            {{ item.route.toUpperCase() }}
                        </p>
                    </Link>
                </li>
            </ul>
        </div>
    </div>
</template>