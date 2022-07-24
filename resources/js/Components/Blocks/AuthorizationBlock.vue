<script setup>
/** Source */
import { usePopups } from '@/Composables/usePopups'
/** Constants */
const { open } = usePopups()
</script>

<!-- Authorization Block Template -->
<template>
    <ul class="header__btns d-flex align-items-center justify-content-end">
        <!-- is not log in -->
        <div class="header__account d-flex align-items-center justify-content-between" @click="open('login-popup')">
            <div class="d-flex">
                <div class="header__account--avatar d-flex align-items-center justify-content-center">
                    <img src="/assets/img/svg/header-btn/avatar.svg" alt="">
                </div>
                <div class="header__account--text regular">
                    <p>Hello</p>
                    <p class="header__account--text--green">Davit</p>
                </div>
            </div>
            <div class="d-flex justify-content-center" style="position: relative;">
                <img src="/assets/img/svg/header-btn/arrow.svg" alt="" class="header__account--icon">
            </div>
        </div>
        <li class="header__btns--item" @click="open('wishlist-popup')">
            <a href="" class="header__btns--link d-flex align-items-center justify-content-center">
                <img src="/assets/img/svg/header-btn/heart.svg" alt="">
            </a>
        </li>
        <li class="header__btns--item" @click="open('cart-popup')">
            <div class="header__btns--item--count d-flex justify-content-center align-items-center regular">
                1
            </div>
            <a href="" class="header__btns--link d-flex align-items-center justify-content-center">
                <img src="/assets/img/svg/header-btn/shop.svg" alt="">
            </a>
        </li>
    </ul>
</template>