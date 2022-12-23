<script setup>
/** Props */
defineProps({
    banner: Object
})
</script>
<!-- Mini Banner Template -->
<template>
    <div class="banner__mini banner">
        <img :src="banner.cover" :alt="banner.title">
    </div>
</template>