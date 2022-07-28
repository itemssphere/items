<script setup>
/** Source */
import { ref, computed } from 'vue'
import { getActiveLanguage } from 'laravel-vue-i18n'
/**Components */
import { Link } from '@inertiajs/inertia-vue3'
/** Constants */
const menu = ref([
    {
        title: 'Account Informaton',
        route: 'account.information',
    },
    {
        title: 'Social Projects',
        route: 'account.socials',
    },
    {
        title: 'My Products',
        route: 'account.products',
    },
    {
        title: 'Sold',
        route: 'account.sold',
    },
    {
        title: 'My Orders',
        route: 'account.orders',
    },
    {
        title: 'Delivery Addresses',
        route: 'account.addresses',
    },
    {
        title: 'Messages',
        route: 'account.messages',
    },
    {
        title: 'Change Password',
        route: 'account.password',
    },
])
/** Computed */
const currentRoute = computed(() => {
    return route().current()
})
</script>

<!-- Oganization Menu Template -->
<template>
    <ul class="organization__menu">
        <li class="organization__menu--item" v-for="item in menu" :key="item.index">
            <Link preserve-scroll
                :href="route(item.route, getActiveLanguage())"
                class="organization__menu--link regular"
                :class="{ active: item.route == route().current() }" 
            >
                {{ item.title }}
            </Link>
        </li>
    </ul>
</template>