<script setup>
import { getActiveLanguage } from 'laravel-vue-i18n'
import Authenticated from '@/Layouts/Authenticated.vue'
import { Head, Link } from '@inertiajs/inertia-vue3'

</script>
<template>
    <Head title="Dashboard" />
    <Authenticated>
        <template #page_title>
            Account Information
        </template>
        <h1 class="organization__content--title organization__content--padding bold">Account Informaton</h1>
        <form class="cart-order__form">
            <div class="cart-order__form--label cart-order__form--padding">
                <div class="row">
                    <div class="col-12">
                        <p class="cart-order__form--title regular">Organization Name</p>
                    </div>
                    <div class="col-lg-6">
                        <input type="text" class="cart-order__form--input regular" placeholder="eng">
                    </div>
                    <div class="col-lg-6">
                        <input type="text" class="cart-order__form--input regular" placeholder="ქარ">
                    </div>
                </div>
            </div><!-- end -->
            <div class="cart-order__form--label cart-order__form--padding">
                <div class="row">
                    <div class="col-12">
                        <p class="cart-order__form--title regular">Account Type</p>
                    </div>
                    <div class="col-lg-6">
                        <input type="text" class="cart-order__form--input regular" placeholder="eng">
                    </div>
                </div>
            </div><!-- end -->
            <div class="cart-order__form--label cart-order__form--padding">
                <div class="row">
                    <div class="col-12">
                        <p class="cart-order__form--title regular">About</p>
                    </div>
                    <div class="col-lg-6">
                        <textarea type="text" class="cart-order__form--input regular" placeholder="eng"></textarea>
                    </div>
                    <div class="col-lg-6">
                        <textarea type="text" class="cart-order__form--input regular" placeholder="ქარ"></textarea>
                    </div>
                </div>
            </div><!-- end -->
            <div class="cart-order__form--label cart-order__form--padding">
                <div class="row">
                    <div class="col-12">
                        <p class="cart-order__form--title regular">Categories</p>
                    </div>
                    <div class="col-lg-6">
                        <input type="text" class="cart-order__form--input regular" placeholder="eng">
                    </div>
                </div>
            </div><!-- end -->
            <h1 class="organization__content--title organization__content--padding bold">Contact Information</h1>
            <div class="cart-order__form--label cart-order__form--padding">
                <div class="row">
                    <div class="col-lg-6">
                        <p class="cart-order__form--title regular">Phone</p>
                        <input type="text" class="cart-order__form--input regular" placeholder="">
                    </div>
                    <div class="col-lg-6">
                        <p class="cart-order__form--title regular">E-mail Adress</p>
                        <input type="text" class="cart-order__form--input regular" placeholder="eng">
                    </div>
                </div>
            </div><!-- end -->
            <div class="cart-order__form--label cart-order__form--padding">
                <div class="row">
                    <div class="col-12">
                        <p class="cart-order__form--title regular">City</p>
                    </div>
                    <div class="col-lg-6">
                        <div class="select">
                            <select name="" id="" class="select__list cart-order__form--select regular">
                                <option value="" class="select__list--item">Tbilisi</option>
                                <option value="" class="select__list--item">erti</option>
                                <option value="" class="select__list--item">ori</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="select">
                            <select name="" id="" class="select__list cart-order__form--select regular">
                                <option value="" class="select__list--item">თბილისი</option>
                                <option value="" class="select__list--item">erti</option>
                                <option value="" class="select__list--item">ori</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div><!-- end -->
            <div class="cart-order__form--label cart-order__form--padding">
                <div class="row">
                    <div class="col-12">
                        <p class="cart-order__form--title regular">Street Address</p>
                    </div>
                    <div class="col-lg-6">
                        <input type="text" class="cart-order__form--input regular" placeholder="eng">
                    </div>
                    <div class="col-lg-6">
                        <input type="text" class="cart-order__form--input regular" placeholder="ქარ">
                    </div>
                </div>
            </div><!-- end -->
            <div class="cart-order__form--label cart-order__form--padding">
                <div class="row">
                    <div class="col-12">
                        <p class="cart-order__form--title regular">Post Code</p>
                    </div>
                    <div class="col-lg-4">
                        <input type="text" class="cart-order__form--input regular" placeholder="eng">
                    </div>
                </div>
            </div><!-- end -->
            <div class="cart-order__form--label cart-order__form--padding">
                <div class="row">
                    <div class="col-lg-6">
                        <p class="cart-order__form--title regular">Website</p>
                        <input type="text" class="cart-order__form--input regular" placeholder="">
                    </div>
                    <div class="col-6">
                        <p class="cart-order__form--title regular">Facebook</p>
                        <input type="text" class="cart-order__form--input regular" placeholder="eng">
                    </div>
                </div>
            </div><!-- end -->
            <div class="cart-order__form--label cart-order__form--padding">
                <div class="row">
                    <div class="col-lg-6">
                        <p class="cart-order__form--title regular">Instagram</p>
                        <input type="text" class="cart-order__form--input regular" placeholder="">
                    </div>
                    <div class="col-lg-6">
                        <p class="cart-order__form--title regular">Youtube</p>
                        <input type="text" class="cart-order__form--input regular" placeholder="eng">
                    </div>
                </div>
            </div><!-- end -->
            <h1 class="organization__content--title organization__content--padding bold">Category Name</h1>
            <div class="cart-order__form--label cart-order__form--padding">
                <div class="row">
                    <div class="col-lg-6">
                        <p class="cart-order__form--title regular">Website</p>
                        <input type="text" class="cart-order__form--input regular" placeholder="">
                    </div>
                </div>
            </div><!-- end -->
            <div class="cart-order__form--label cart-order__form--padding">
                <div class="row">
                    <div class="col-lg-6">
                        <p class="cart-order__form--title regular">ID Number</p>
                        <input type="text" class="cart-order__form--input regular" placeholder="">
                    </div>
                    <div class="col-lg-6">
                        <p class="cart-order__form--title regular">iBan</p>
                        <input type="text" class="cart-order__form--input regular" placeholder="eng">
                    </div>
                </div>
            </div><!-- end -->
            <div class="cart-order__form--label cart-order__form--padding">
                <br />
                <div class="d-none d-lg-flex">
                    <button class="cart-order__body--btn cart-order__body--blue bold">Save changes</button>
                    <button class="cart-order__form--btn bold">Cancel</button>
                </div>
                <br />
            </div>
        </form>
    </Authenticated>
</template>
