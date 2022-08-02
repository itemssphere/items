<script setup>
/** Source */
import { ref } from 'vue'
import { useI18n } from 'vue-i18n'
import { usePopups } from '@/Composables/usePopups'
import { Inertia } from '@inertiajs/inertia'
/** Components */
import { Link } from '@inertiajs/inertia-vue3'
import Individual from './RegistrationTemplates/Individual.vue'
import Shop from './RegistrationTemplates/Shop.vue'
import Charity from './RegistrationTemplates/Charity.vue'
/** Emits */
const emit = defineEmits(['switchPopup'])
/** Constants */
const { locale, t } = useI18n({ inheritLocale: true })
const { close } = usePopups()
const templates = ref(['individual','shop','charity'])
const template = ref('individual')
/** Functions */
const goTo = (page) => {
    close('login-popup')
    Inertia.get(route(page,locale))
}
const setTemplate = (value) => {
    template.value = value
}
</script>
<!-- Registration Form Template -->
<template>
    <div class="sign-in register" style="display:block">
        <h1 class="sign-in__title bold">Registration as:</h1>
        <div class="register__btns d-flex justify-content-between">
            <button class="register__btns--btn regular d-flex justify-content-center align-items-center"
                    v-for="temp in templates" :key="temp.index"
                    :class="{ active: (template == temp)}"
                    @click.prevent="setTemplate(temp)"
            >
                {{ temp.toUpperCase() }}
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