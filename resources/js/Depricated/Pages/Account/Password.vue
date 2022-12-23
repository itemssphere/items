<script setup>
/** Components */
import Authenticated from '@/Layouts/Authenticated.vue'
import { Head } from '@inertiajs/inertia-vue3'
</script>
<template>
    <Head title="Messages" />
    <Authenticated>
        <template #page_title>
            Messages
        </template>
        <h1 class="organization__content--title organization__content--padding bold">Change Password</h1>
        <div class="cart-item organization__content--padding">
            <form class="cart-order__form">
                <div class="row">
                    <div class="col-4">
                        <label class="cart-order__form--label">
                            <p class="cart-order__form--title regular">Old password</p>
                            <input type="text" class="cart-order__form--input regular" placeholder="">
                        </label>
                        <label class="cart-order__form--label">
                            <p class="cart-order__form--title regular">New password</p>
                            <input type="text" class="cart-order__form--input regular" placeholder="">
                        </label>
                        <label class="cart-order__form--label">
                            <p class="cart-order__form--title regular">Repeat new password</p>
                            <input type="text" class="cart-order__form--input regular" placeholder="">
                        </label>
                    </div>
                    <div class="col-12">
                        <br />
                        <div class="d-flex">
                            <button class="cart-order__body--btn cart-order__body--blue bold">Change password</button>
                            <button class="cart-order__form--btn bold">Cancel</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </Authenticated>
</template>
