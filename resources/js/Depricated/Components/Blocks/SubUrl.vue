<script setup>
/** Source */
import { ref } from 'vue'
import { useI18n } from 'vue-i18n'
/** Components */
import { Link } from '@inertiajs/inertia-vue3'
/** Constants */
const { locale, t } = useI18n({ inheritLocale: true })
const currentTitle = route().current().split('.')[0]
const separator = '>'
const current = ref({ title: currentTitle.split('')[0].toUpperCase() + currentTitle.slice(1), })
//route(route().current(),locale)
</script>
<!-- Template of Sub Url -->
<template>
    <ul class="page__navigation--links d-none d-lg-flex">
        <li class="page__navigation--link regular">
            <Link :href="route('home',locale)">{{ t('menus.main.home') }}</Link>
        </li>
        <li class="page__navigation--link regular">
            {{ separator }}
            <Link href="" class="active">{{ t(`menus.main.${route().current().split('.')[0]}`) }}</Link>
        </li>
    </ul>
</template>