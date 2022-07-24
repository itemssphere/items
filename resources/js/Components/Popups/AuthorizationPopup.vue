<script setup>
/** Source */
import { ref } from 'vue'
/** Components */
import ClosePopupButton from '../FormComponents/ClosePopupButton.vue';
import LoginForm from '../Forms/LoginForm.vue';
import RegistrationForm from '../Forms/RegistrationForm.vue';
/** Constants */
const isLogin = ref(true)
const switchPopup = () => {
    isLogin.value = !isLogin.value
}
</script>
<!-- Login Popup Template -->
<template>
    <div class="popup open-active align-items-center justify-content-center" data-active="login-popup">
        <div class="popup__container">
            <ClosePopupButton popup="login-popup" />
            <LoginForm v-show="isLogin" @switchPopup="switchPopup" />
            <RegistrationForm v-show="!isLogin" @switchPopup="switchPopup" />
        </div>
    </div>
</template>