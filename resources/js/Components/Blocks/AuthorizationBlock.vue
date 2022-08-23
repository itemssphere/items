<script setup>
/** Source */
import { ref } from 'vue'
import { usePopups } from '@/Composables/usePopups'
import { Inertia } from '@inertiajs/inertia'
import { useI18n } from 'vue-i18n'
/** Components */
import BreezeResponsiveNavLink from '@/Components/Navigation/Includes/ResponsiveNavLink.vue'
import { Link } from '@inertiajs/inertia-vue3'
/** Constnats */
const { locale, t } = useI18n({ inheritLocale: true })
const { open } = usePopups()
const isActive = ref(false)
/** Functions */
const logout = () => {
    Inertia.post(route('logout'))
}
</script>
<!-- Authorization Block Template -->
<template>
    <ul class="header__btns d-flex align-items-center justify-content-end">
        <!-- is not log in -->
        <template v-if="Inertia.page.props.auth.user === null">
            <div class="header__account d-flex align-items-center justify-content-between" @click="open('login-popup')">
                <div class="d-flex">
                    <div class="header__account--avatar d-flex align-items-center justify-content-center">
                        <img src="/assets/img/svg/header-btn/avatar.svg" alt="">
                    </div>
                    <div class="header__account--text regular">
                        <p>Your accout</p>
                        <p class="header__account--text--green">Log In</p>
                    </div>
                </div>
                <div class="d-flex justify-content-center" style="position: relative;">
                    <img src="/assets/img/svg/header-btn/arrow.svg" alt="" class="header__account--icon">
                </div>
            </div>
        </template>
        <template v-else>
            <div class="header__account click-open d-flex align-items-center justify-content-between" @click="isActive = !isActive">
                <div class="d-flex">
                    <div class="header__account--avatar d-flex align-items-center justify-content-center">
                        <img src="/assets/img/svg/header-btn/avatar.svg" alt="">
                    </div>
                    <div class="header__account--text regular">
                        <p>Hello</p>
                        <p class="header__account--text--green">{{ Inertia.page.props.auth.user?.name }}</p>
                    </div>
                </div>
                <div class="d-flex justify-content-center" style="position: relative;">
                    <img src="/assets/img/svg/header-btn/arrow.svg" alt="" class="header__account--icon">
                    <div class="profile open-active" :class="{ active: isActive }">
                        <div class="profile__head">
                            <h1 class="profile__head--title bold">{{ Inertia.page.props.auth.user?.name }}</h1>
                            <span class="profile__head--mail regular d-flex justify-content-between">
                                <p>{{ Inertia.page.props.auth.user?.email }}</p>
                                <BreezeResponsiveNavLink class="profile__logout--btn regular"
                                    :href="route('logout', locale)"
                                    method="post"
                                    as="button"
                                >
                                    <span>Log Out</span>
                                </BreezeResponsiveNavLink>
                            </span>
                        </div>
                        <ul class="profile__menu regular">
                            <li class="profile__menu--li">
                                <Link :href="route('account.password', locale)" class="profile__menu--link">Change Password</Link>
                            </li>
                        </ul>
                        <ul class="profile__menu regular">
                            <li class="profile__menu--li">
                                <Link :href="route('account.information', locale)" class="profile__menu--link">Profile</Link>
                            </li>
                            <li class="profile__menu--li">
                                <Link :href="route('account.information', locale)" class="profile__menu--link">Account Information</Link>
                            </li>
                            <li class="profile__menu--li">
                                <Link :href="route('account.products', locale)" class="profile__menu--link">My Products</Link>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </template>
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