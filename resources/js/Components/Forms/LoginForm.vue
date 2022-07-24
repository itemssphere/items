<script setup>
/** Emits */
const emit = defineEmits(['switchPopup'])
</script>
<!-- Login Form Template -->
<template>
    <div class="sign-in login">
        <h1 class="sign-in__title bold">Sign in</h1>
        <form class="sign-in__form">
            <label class="sign-in__form--label d-flex align-items-center">
                <input type="text" class="sign-in__form--input regular" placeholder="Email">
                <img src="/assets/img/svg/username.svg" alt="" class="sign-in__form--icon">
            </label>
            <label class="sign-in__form--label d-flex align-items-center">
                <input type="password" class="sign-in__form--input regular" placeholder="Password">
                <img src="/assets/img/svg/key.svg" alt="" class="sign-in__form--icon">
            </label>
            <li class="sign-in__forgot d-flex justify-content-end">
                <a href="" class="regular">Forgot Password?</a>
            </li>
            <button class="sign-in__form--btn bold">Sign in</button>
        </form>
        <div class="sign-in__or d-flex align-items-center justify-content-center">
            <span class="sign-in__or--text regular">Or</span>
            <button class="sign-in__or--btn"><img src="/assets/img/svg/login-google-btn.svg" alt=""></button>
            <button class="sign-in__or--btn"><img src="/assets/img/svg/login-fb-btn.svg" alt=""></button>
        </div>
        <div class="sign-in__register d-flex align-items-center justify-content-between">
            <span class="sign-in__register--text regular">New customer?</span>
            <button class="sign-in__register--btn register-open bold" @click="$emit('switchPopup')">Register</button>
        </div>
    </div>
</template>