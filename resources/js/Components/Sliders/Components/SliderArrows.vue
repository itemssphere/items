<script setup>
/** Props */
defineProps({
    options: Object,
})
</script>
<template>
    <div class="splide__arrows" :class="options.classes.arrows">
        <button class="splide__arrow" :class="options.classes.prev">
            <img :src="options.buttons.prev" alt="">
        </button>
        <button class="splide__arrow" :class="options.classes.next">
            <img :src="options.buttons.next" alt="">
        </button>
    </div>
</template>