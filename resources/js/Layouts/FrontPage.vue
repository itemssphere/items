<script setup>
/** Components */
import Header from '@/Components/Header.vue'
import Footer from '@/Components/Footer.vue'
/** Constants */
const pageName = 'home'
</script>
<!-- Front Page Template -->
<template>
    <Header :pageName="pageName"/>   
    <slot />
    <Footer />
</template>
