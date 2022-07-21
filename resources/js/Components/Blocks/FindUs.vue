<script setup>
/** Source */
import { ref } from 'vue'
/** Constants */
const socials = ref([
    {
        key: 'facebook',
        url: '',
        icon: '/assets/img/svg/footer-icon/fb.svg'
    },
    {
        key: 'instagram',
        url: '',
        icon: '/assets/img/svg/footer-icon/instagram.svg'
    },
    {
        key: 'in',
        url: '',
        icon: '/assets/img/svg/footer-icon/in.svg'
    },
]) 
</script>
<!-- Find Us Block Template -->
<template>
    <ul class="footer__menu d-flex">
        <li v-for="social in socials" :key="social.index" class="footer__menu--item d-flex">
            <a :href="social.url" class="footer__menu--link regular d-flex align-items-center">
                <img :src="social.icon" :alt="social.key">
            </a>
        </li>
    </ul>
</template>