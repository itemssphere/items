<script setup>
/** Source */
import { usePopups } from '@/Composables/Data/usePopups'
/** Constants */
const { close } = usePopups()
/** Props */
defineProps({
    popup: String
})
</script>
<!-- Close Popup Button -->
<template>
    <button class="popup__close" @click="close(popup)">
        <img src="/assets/img/svg/popup-close.svg" alt="" class="d-none d-lg-block">
        <img src="/assets/img/svg/popup-back-btn.svg" alt="" class="d-block d-lg-none">
    </button>
</template>