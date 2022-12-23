<script setup>
/** Source */
import { ref } from 'vue'
/** Constants */
const contact = ref([
    {
        key: 'phone',
        name: '+995 599 88 32 53',
        icon: '/assets/img/svg/footer-icon/mobile.svg'
    },
    {
        key: 'email',
        name: 'info@itemssphere.ge',
        icon: '/assets/img/svg/footer-icon/mail.svg'
    },
    {
        key: 'address',
        name: 'Tbilisi, Georgia, Kipshidze str 12',
        icon: '/assets/img/svg/footer-icon/location.svg'
    }
])
</script>
<!-- Contact Us Block Template -->
<template>
    <ul class="footer__menu">
        <li v-for="detail in contact" :key="detail.index" class="footer__menu--item d-flex">
            <a href="" class="footer__menu--link regular d-flex align-items-center">
                <img :src="detail.icon" :alt="detail.key">
                {{ detail.name }}
            </a>
        </li>
    </ul>
</template>