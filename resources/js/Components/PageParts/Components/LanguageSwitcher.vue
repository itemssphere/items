<script setup>
import { ref, computed } from 'vue'
import { loadLanguageAsync, getActiveLanguage } from 'laravel-vue-i18n'
import { Inertia } from '@inertiajs/inertia'

const props = defineProps({
  custom_class: String,
  langs: Array,
})

/** Active State */
const isActive = ref(false)
const activeLang = computed(function(){
    return getActiveLanguage()
})
const filteredLangs = computed(function(){
    return props.langs.filter(lang => lang !== activeLang)
})

/** Change Language FUnction */
const changeLanguage = (lang) => {
    Inertia.get(route(route().current(), lang))
    loadLanguageAsync(lang);
}

</script>
<template>
    <div :class="custom_class">
        <!-- Toggle -->
        <div class="header__head--lang-btn d-none d-lg-flex align-items-center" :class="{ active: isActive }" @click="isActive = !isActive">
            <div class="header__head--lang-active d-flex align-items-center regular">
                <img :src="'./assets/img/svg/flags/' + activeLang + '.svg'" alt="">
                <span>{{ activeLang.toUpperCase() }}</span>
            </div>
            <!-- <img src="./assets/img/svg/lang-arrow-down.svg" alt=""> -->

        </div>
        <!-- List -->
        <div class="header__head--lang-list" :class="{ active: isActive }" @click="isActive = !isActive">
            <div class="header__head--lang-item d-flex align-items-center regular"
                v-for="lang in filteredLangs"
                :key="lang.index"
                @click="changeLanguage(lang)"
            >
                <img :src="'./assets/img/svg/flags/' + lang + '.svg'" alt="">
                <span>{{ lang.toUpperCase() }}</span>
            </div>
        </div>
        <button class="header__head--close btn d-block d-lg-none">
           <!-- <img src="./assets/img/svg/close-head-green.svg" alt=""> -->
        </button>
    </div>
</template>