<script setup>
/** Source */
import { ref } from 'vue'
/** Components */
import Top from '@/Components/Bars/Top.vue'
import MobileMenu from './Navigation/Menus/MobileMenu.vue'
import MobileCategoriesPicker from './Navigation/Pickers/MobileCategoriesPicker.vue'
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
        <MobileCategoriesPicker />
        <SearchBar :pageName="pageName"/>
    </header>
    <Menu />
</template>