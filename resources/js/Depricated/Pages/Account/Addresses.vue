<script setup>
/** Components */
import Authenticated from '@/Layouts/Authenticated.vue'
import { Head } from '@inertiajs/inertia-vue3'
</script>
<template>
    <Head title="Delivery Addresses" />
    <Authenticated>
        <template #page_title>
            Delivery Addresses
        </template>
        <div class="d-flex justify-content-between">
            <h1 class="organization__content--title d-flex align-items-center organization__content--padding bold">Delivery Addresses</h1>
        </div>
        <div class="cart-item organization__content--padding">
            <div class="delivered__list">
                <div class="delivered__list--item">
                    <div class="row flex-wrap-reverse flex-lg-wrap">
                        <div class="col-lg-7">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="delivered__list--content">
                                        <p class="delivered__list--title regular">City</p>
                                        <p class="delivered__list--desc regular">Tbilisi</p>
                                    </div>
                                    <div class="delivered__list--content">
                                        <p class="delivered__list--title regular">City</p>
                                        <p class="delivered__list--desc regular">Tbilisi</p>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="delivered__list--content">
                                        <p class="delivered__list--title regular">City</p>
                                        <p class="delivered__list--desc regular">Tbilisi</p>
                                    </div>
                                    <div class="delivered__list--content">
                                        <p class="delivered__list--title regular">City</p>
                                        <p class="delivered__list--desc regular">Tbilisi</p>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="delivered__list--content">
                                        <p class="delivered__list--title regular">City</p>
                                        <p class="delivered__list--desc regular">Tbilisi</p>
                                    </div>
                                    <div class="delivered__list--content">
                                        <p class="delivered__list--title regular">City</p>
                                        <p class="delivered__list--desc regular">Tbilisi</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="delivered__list--buttons d-flex flex-lg-column justify-content-between">
                                <div class="d-flex align-items-center justify-content-end">
                                    <button class="cart-item__edit-btn d-flex align-items-center">
                                        <img src="/assets/img/svg/edit-pen.svg" alt="">
                                        edit product
                                    </button>
                                    <button class="cart-item--btn d-flex align-items-center justify-content-center">
                                        <img src="/assets/img/svg/trash.svg" alt="">
                                    </button>
                                </div>
                                <div class="d-flex align-items-center justify-content-end">
                                    <span class="delivered__list--main-addres d-flex align-items-center bold">
                                        <img src="/assets/img/svg/checked-green.svg" alt="">
                                        Main shipping address
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- item end -->
                <div class="delivered__list--item">
                    <div class="row flex-wrap-reverse flex-lg-wrap">
                        <div class="col-lg-7">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="delivered__list--content">
                                        <p class="delivered__list--title regular">City</p>
                                        <p class="delivered__list--desc regular">Tbilisi</p>
                                    </div>
                                    <div class="delivered__list--content">
                                        <p class="delivered__list--title regular">City</p>
                                        <p class="delivered__list--desc regular">Tbilisi</p>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="delivered__list--content">
                                        <p class="delivered__list--title regular">City</p>
                                        <p class="delivered__list--desc regular">Tbilisi</p>
                                    </div>
                                    <div class="delivered__list--content">
                                        <p class="delivered__list--title regular">City</p>
                                        <p class="delivered__list--desc regular">Tbilisi</p>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="delivered__list--content">
                                        <p class="delivered__list--title regular">City</p>
                                        <p class="delivered__list--desc regular">Tbilisi</p>
                                    </div>
                                    <div class="delivered__list--content">
                                        <p class="delivered__list--title regular">City</p>
                                        <p class="delivered__list--desc regular">Tbilisi</p>
                                    </div>
                                </div>
                                <div class="col-12 d-flex d-lg-none justify-content-center">
                                    <div class="d-flex align-items-center justify-content-end">
                                        <button class="cart-item__compare bold">Choose as main shipping address</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="delivered__list--buttons d-flex flex-lg-column justify-content-between">
                                <div class="d-flex align-items-center justify-content-end">
                                    <button class="cart-item__edit-btn d-flex align-items-center">
                                        <img src="/assets/img/svg/edit-pen.svg" alt="">
                                        edit product
                                    </button>
                                    <button class="cart-item--btn d-flex align-items-center justify-content-center">
                                        <img src="/assets/img/svg/trash.svg" alt="">
                                    </button>
                                </div>
                                <div class="d-none d-lg-flex align-items-center justify-content-end">
                                    <button class="cart-item__compare bold">Choose as main shipping address</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- item end -->
            </div>
            <div class="cart-order">
                <div class="cart-order__head d-flex justify-content-between">
                    <h1 class="cart-order__head--title bold">Add new address</h1>
                </div>
                <form class="cart-order__form">
                    <div class="row">
                        <div class="col-lg-4">
                            <label class="cart-order__form--label">
                                <p class="cart-order__form--title regular">Address</p>
                                <div class="select">
                                    <select class="select__list cart-order__form--select regular">
                                        <option value="" class="select__list--item">A - Z</option>
                                        <option value="" class="select__list--item">erti</option>
                                        <option value="" class="select__list--item">ori</option>
                                    </select>
                                </div>
                            </label>
                            <label class="cart-order__form--label">
                                <p class="cart-order__form--title regular">Address</p>
                                <input type="text" class="cart-order__form--input regular" placeholder="">
                            </label>
                        </div>
                        <div class="col-lg-4">
                            <label class="cart-order__form--label">
                                <p class="cart-order__form--title regular">Address</p>
                                <input type="text" class="cart-order__form--input regular" placeholder="">
                            </label>
                            <label class="cart-order__form--label">
                                <p class="cart-order__form--title regular">Address</p>
                                <input type="text" class="cart-order__form--input regular" placeholder="">
                            </label>
                        </div>
                        <div class="col-lg-4">
                            <label class="cart-order__form--label">
                                <p class="cart-order__form--title regular">Address</p>
                                <input type="text" class="cart-order__form--input regular" placeholder="">
                            </label>
                            <label class="cart-order__form--label">
                                <p class="cart-order__form--title regular">Address</p>
                                <input type="text" class="cart-order__form--input regular" placeholder="">
                            </label>
                        </div>
                        <div class="col-12">
                            <br />
                            <div class="d-flex">
                                <button class="cart-order__body--btn cart-order__body--blue bold">Add</button>
                                <button class="cart-order__form--btn bold">Cancel</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </Authenticated>
</template>
