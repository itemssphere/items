<script setup>
/** Source */
import { ref } from 'vue'
import { Link } from '@inertiajs/inertia-vue3'
import { useI18n } from 'vue-i18n'
/** Constnats */
const { locale, t } = useI18n({ inheritLocale: true })
const main_menu_items = ref({
    'left': [
        {
            title: 'home',
            route: 'home',
            icon: 'home'
        },
        {
            title: 'market',
            route: 'market',
            icon: 'market'
        },
        {
            title: 'shop',
            route: 'shop',
            icon: 'shop'
        },
        {
            title:  'charity',
            route: 'charity',
            icon: 'charitys'
        },
        {
            title: 'social',
            route: 'social',
            icon: 'social'
        },
        {
            title: 'news',
            route: 'news',
            icon: 'news'
        },
    ],
    'right': [
        {
            title: 'about',
            route: 'about',
            icon: 'about'
        },
        {
            title: 'contact',
            route: 'contact',
            icon: 'contact'
        },
    ],
})

const mobile_menu_items = ref({
    'left': [
        {
            title: 'cart',
            route: 'cart',
            icon: 'bar-cart'
        },
        {
            title: 'notification',
            route: 'notification',
            icon: 'notifications'
        },
    ],
    'right': [
        {
            title: 'message',
            route: 'message',
            icon: 'messages'
        },
        {
            title: 'profile',
            route: 'profile',
            icon: 'bar-profile'
        },
    ],
})

</script>
<template>
    <!-- head menu -->    
    <div class="head-menu--fix d-none d-lg-block" style="top: 88px;">
        <div class="container">
            <div class="head-menu d-flex justify-content-between align-items-center">
                <ul class="head-menu__categories d-flex">
                    <li 
                        v-for="item in main_menu_items.left" 
                        :key="item.index"
                        class="head-menu__categories--item"
                    >
                        <Link :href="route(item.route, locale)" class="head-menu__categories--link regular d-flex align-items-center" :class="{ active: item.route == route().current() }">
                            <img :src="`/assets/img/svg/menu/${item.icon}.svg`" alt="" class="head-menu__categories--icon convert-svg">
                            <span>{{ t('menus.main.'+ item.title) }}</span>
                        </Link>
                    </li>
                </ul>
                <ul class="head-menu__categories d-flex">
                    <li 
                        v-for="item in main_menu_items.right" 
                        :key="item.index"
                        class="head-menu__categories--item"
                    >
                        <Link :href="route(item.route, locale)" class="head-menu__categories--link regular">
                            <span>{{ t('menus.main.'+ item.title) }}</span>
                        </Link>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- fix menu bar mobile -->
    <div class="fix-bar d-block d-lg-none">
        <div class="container">
            <ul class="fix-bar__lists d-flex justify-content-between align-items-start">
                <li 
                    v-for="item in mobile_menu_items.left"
                    :key="item.index"
                    class="fix-bar__lists--li"
                >
                    <a :href="route(item.route, locale)" data-active="cart-popup" class="fix-bar__lists--link regular d-flex align-items-center flex-column click-open">
                        <figure class="fix-bar__lists--icon">
                            <img :src="`/assets/img/svg/header-btn/${item.icon}.svg`" alt="">
                        </figure>
                        <span>{{ t('components.menu.mobile.'+ item.title +'.title') }}</span>
                    </a>
                </li>
                <!-- Plus Button -->
                <li class="fix-bar__lists--btn">
                    <a href="" class="d-flex align-items-center flex-column">
                        <img :src="`/assets/img/svg/header-btn/bar-add.svg`" alt="">
                    </a>
                </li>

                <li 
                    v-for="item in mobile_menu_items.right"
                    :key="item.index"
                    class="fix-bar__lists--li"
                >
                    <a :href="route(item.route, locale)" data-active="cart-popup" class="fix-bar__lists--link regular d-flex align-items-center flex-column click-open">
                        <figure class="fix-bar__lists--icon">
                            <img :src="`/assets/img/svg/header-btn/${item.icon}.svg`" alt="">
                        </figure>
                        <span>{{ t('components.menu.mobile.'+ item.title +'.title') }}</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</template>