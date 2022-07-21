<script setup>
/** Source */
import { ref } from 'vue'
/** Constants */
const terms = ref([
    {
        title: 'privacy policy',
        url: ""
    },
    {
        title: 'terms & conditions',
        url: ""
    },
    {
        title: 'payment & delivery',
        url: ""
    },
    {
        title: 'help & contact',
        url: ""
    }
])
</script>
<template>
  <div class="col-6 d-lg-none">
    <ul class="footer__menu">
      <li 
        v-for="term in terms"
        :key="term.index"
        class="footer__menu--item d-flex">
        <a :href="term.url" class="footer__menu--link regular">{{ term.title.toUpperCase() }}</a>
      </li>
    </ul>
  </div>
</template>