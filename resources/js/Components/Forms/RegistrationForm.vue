<script setup>
/** Source */
import { ref } from 'vue'
import { getActiveLanguage } from 'laravel-vue-i18n'
import { usePopups } from '@/Composables/usePopups'
/** Components */
import { Link } from '@inertiajs/inertia-vue3'
import { Inertia } from '@inertiajs/inertia'
import Individual from './RegistrationTemplates/Individual.vue';
import Shop from './RegistrationTemplates/Shop.vue';
import Charity from './RegistrationTemplates/Charity.vue';
/** Constants */
const { close } = usePopups()
const template = ref('individual')
/** Emits */
const emit = defineEmits(['switchPopup'])
/** Functions */
const goTo = (page) => {
    close('login-popup')
    Inertia.get(route(page,getActiveLanguage()))
}
const setTemplate = (temp) => {
    template.value = temp
}
</script>
<!-- Registration Form Template -->
<template>
    <div  class="sign-in register" style="display:block">
        <h1 class="sign-in__title bold">Registration as:</h1>
        <div class="register__btns d-flex justify-content-between">
            <button @click.prevent="setTemplate('individual')" :class="{ active: (template == 'individual')}" class="register__btns--btn regular d-flex justify-content-center align-items-center">
                Individual
            </button>
            <button @click.prevent=" setTemplate('shop')" :class="{ active: (template == 'shop')}" class="register__btns--btn regular d-flex justify-content-center align-items-center">
                Shop
            </button>
            <button @click.prevent="setTemplate('charity')" :class="{ active: (template == 'charity')}" class="register__btns--btn regular d-flex justify-content-center align-items-center">
                Charity
            </button>
        </div>
        <Individual v-if="template == 'individual'" />
        <Shop v-if="template == 'shop'"/>
        <Charity v-if="template == 'charity'"/>
        <div class="register__text regular">
            <p class="sign-in__register--text">By creating account, you agree to the</p>
            <a href="" @click.prevent="goTo('agreement')">ItemsSphere's Free Membership Agreement</a>
            <p class="sign-in__register--text">and <a href="" @click.prevent="goTo('policy')">Privacy Policy</a></p>
        </div>
        <div class="register__link">
            <span class="sign-in__register--text regular">Have account?</span>
            <button class="register__link--btn register-open bold" @click="$emit('switchPopup')">Sign in</button>
        </div>
    </div>
</template>