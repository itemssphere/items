<script setup>
/** Props */
defineProps({
    options: Object,
})
</script>
<!-- Splide Arrows Template -->
<template>
    <div class="splide__arrows" :class="options.classes.arrows">
        <button class="splide__arrow splide__arrow--prev" :class="options.classes.prev">
            <img :src="options.buttons.prev" alt="">
        </button>
        <button class="splide__arrow splide__arrow--next" :class="options.classes.next">
            <img :src="options.buttons.next" alt="">
        </button>
    </div>
</template>