<script setup>
/** Source */
import { ref } from 'vue'
/** Constants */
const terms = ref([
    'home',
    'market',
    'shop',
    'charity',
    'about us'
])
</script>
<!-- Terms List Template -->
<template>
    <ul class="footer__menu">
        <li 
            v-for="term in terms"
            :key="term.index"
            class="footer__menu--item d-flex"
        >  
            <a href="" class="footer__menu--link regular"><span class="capitalize" style="text-transform: capitalize;">{{ term }}</span></a>
        </li>
    </ul>
</template>