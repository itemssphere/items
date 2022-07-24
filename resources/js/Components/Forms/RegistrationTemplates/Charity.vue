<script setup>
/** Source */
import { useForm } from '@inertiajs/inertia-vue3'
import { getActiveLanguage } from 'laravel-vue-i18n'
/** Constants */
const form = useForm({
  type: 'charity',
  name: null,
  email: null,
  password: null,
  password_confirmation: null,
})
</script>

<!-- Individual User Registration Form Template -->
<template>
    <form @submit.prevent="form.post(route('register', getActiveLanguage()))" class="sign-in__form register__step active">
        <label class="sign-in__form--label d-flex align-items-center">
            <input v-model="form.name" type="text" class="sign-in__form--input regular" placeholder="Full name">
            <div v-if="form.errors.email">{{ form.errors.name }}</div>
            <img src="/assets/img/svg/username.svg" alt="" class="sign-in__form--icon">
        </label>
        <label class="sign-in__form--label d-flex align-items-center">
            <input v-model="form.email" type="text" class="sign-in__form--input regular" placeholder="Email">
            <div v-if="form.errors.email">{{ form.errors.email }}</div>
            <img src="/assets/img/svg/input-mail.svg" alt="" class="sign-in__form--icon">
        </label>
        <label class="sign-in__form--label d-flex align-items-center">
            <input v-model="form.password" type="password" class="sign-in__form--input regular" placeholder="Password">
            <div v-if="form.errors.password">{{ form.errors.password }}</div>
            <img src="/assets/img/svg/key.svg" alt="" class="sign-in__form--icon">
        </label>
        <label class="sign-in__form--label d-flex align-items-center">
            <input v-model="form.password_confirmation" type="password" class="sign-in__form--input regular" placeholder="Confirm Password">
            <div v-if="form.errors.password_confirmation">{{ form.errors.password_confirmation }}</div>
            <img src="/assets/img/svg/key.svg" alt="" class="sign-in__form--icon">
        </label>
        <button type="submit" class="sign-in__form--btn bold" :disabled="form.processing">Create Account</button>
    </form>
</template>