<script setup>
/** Source */
import { ref } from 'vue'
/** Components */
import Top from '@/Components/Bars/Top.vue'
import MobileMenu from './Navigation/Menus/MobileMenu.vue'
import MobileCategories from './Navigation/Pickers/MobileCategories.vue'
import ApplicationLogo from '@/Components/ApplicationLogo.vue'
import SearchBar from '@/Components/Bars/Search.vue'
import Menu from './Navigation/Menus/Menu.vue'
/** Props */
defineProps({
    pageName: String
})
</script>
<!-- Header Template -->
<template>
    <Top />
    <header class="header">
        <MobileMenu />
        <MobileCategories />
        <SearchBar :pageName="pageName"/>
    </header>
    <Menu />
</template>