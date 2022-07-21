<script setup>
/** Source */
import { ref } from 'vue'
import LanguageSwitcher from '../FormComponents/LanguageSwitcher.vue'
/** Constants */
const active = ref(true)
</script>
<!-- Top Bar Template -->
<template>
    <div v-show="active" class="header__head">
        <div class="container header__head--container d-flex align-items-center">
            <h3 class="header__head--text regular">{{ $t('components.heading.title') }}</h3>
            <LanguageSwitcher />
            <button class="header__head--close btn d-block d-lg-none">
                <img src="/assets/img/svg/close-head-green.svg" alt="" @click="active = !active">
            </button>
        </div>
    </div>
</template>