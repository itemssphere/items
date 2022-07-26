<script setup>
/** Props */
defineProps({
    hashtag: Object
})
</script>
<!-- Hashtag Slide Template -->
<template>
    <div class="d-flex flex-column align-items-center">
        <div class="hashtags__item d-flex align-items-center justify-content-center">
            <img :src="hashtag.image" alt="" class="hashtags__item--cover">
        </div>
        <h1 class="hashtags__item--title">
            <a href="">{{ hashtag.title }}</a>
        </h1>
    </div>
</template>