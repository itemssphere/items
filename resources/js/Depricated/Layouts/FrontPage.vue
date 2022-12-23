<script setup>
/** Components */
import Header from '@/Components/Header.vue'
import Footer from '@/Components/Footer.vue'
</script>
<!-- Front page -->
<template>
    <Header />
    <slot />
    <Footer />
</template>