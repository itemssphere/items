<script setup>
/** Source  */
import { ref, computed } from 'vue'
import { useI18n } from 'vue-i18n'
import { Inertia } from '@inertiajs/inertia'

/** Props */
const props = defineProps({
  langs: Array,
})
/** Constants */
const { locale, t } = useI18n({ useScope: 'global' })
const isActive = ref(false)
const langs = ref(['en', 'ge'])
/** Computed */
const filteredLangs = computed(function(){
    return langs.value.filter(lang => lang != locale.value)
})
/** Functions*/
const setLanguage = (lang) => {
    Inertia.get(route(route().current(), lang))
    locale.value = lang;
}
</script>
<!-- Language Switcher Template -->
<template>
    <div class="header__head--lang">
        <!-- Toggle -->
        <div 
            class="header__head--lang-btn d-none d-lg-flex align-items-center" 
            :class="{ active: isActive }"
            @click="isActive = !isActive"
        >
            <div class="header__head--lang-active d-flex align-items-center regular">
                <img :src="'/assets/img/svg/flags/' + locale + '.svg'" alt="">
                <span>{{ locale.toUpperCase() }}</span>
            </div>
            <img src="/assets/img/svg/lang-arrow-down.svg" alt="">
        </div>
        <!-- List -->
        <div class="header__head--lang-list" :class="{ active: isActive }" @click="isActive = !isActive">
            <div class="header__head--lang-item d-flex align-items-center regular"
                v-for="lang in filteredLangs"
                :key="lang.index"
                @click.prevent="setLanguage(lang)"
            >
                <img :src="'/assets/img/svg/flags/' + lang + '.svg'" alt="">
                <span>{{ lang.toUpperCase() }}</span>
            </div>
        </div>

    </div>
</template>