<script setup>
/** Components */
import Authenticated from '@/Layouts/Authenticated.vue'
import { Head } from '@inertiajs/inertia-vue3'
</script>
<template>
    <Head title="Orders" />
    <Authenticated>
        <template #page_title>
            Orders
        </template>
        <div class="d-flex justify-content-between">
            <h1 class="organization__content--title d-flex align-items-center organization__content--padding bold">My Order</h1>
        </div>
        <div class="d-none d-lg-flex justify-content-between">
            <div class="cart-file d-flex align-items-end">
                <button class="cart-file__btn bold cart-file--blue">
                    export
                </button>
            </div>
        </div>
        <div class="cart-item organization__content--padding">
            <div class="row">
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-9">
                            <figure class="cart-item__img d-flex align-items-center justify-content-center">
                                <img src="/assets/img/iphone-white.jpg" alt="">
                            </figure>
                            <div class="cart-item__content--text d-flex flex-column align-items-start">
                                <div class="products-slider__item--status regular">
                                    NEW
                                </div>
                                <a href="" class="products-slider__item--name regular">
                                    TCL 40S325 40 Inch 1080p Smart LED Roku TV
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <form class="d-flex d-lg-block align-items-center">
                                <div class="shop-detail__info--color">
                                    <p class="bold">Quantity:</p>
                                </div>
                                <br />
                                <div class="quantity d-flex align-items-center justify-content-between">
                                    <div class="dec quantity__btn regular">-</div>
                                        <input type="text" name="turtle-doves" value="0" class="quantity__input regular">
                                    <div class="inc quantity__btn regular">+</div>
                                </div>
                                <p class="shop-detail__info--create-data regular">On stock: 249</p>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="d-flex flex-lg-column justify-content-between">
                                <div class="shop-detail__info--color">
                                    <p class="bold d-flex justify-content-end">Delivery: </p>
                                </div>
                                <br />
                                <div class="products-slider__item--price bold d-flex justify-content-end">
                                    ₾9.39
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="d-flex flex-row flex-lg-column align-items-center justify-content-lg-start justify-content-between">
                                <div class="shop-detail__info--color">
                                    <p class="bold d-flex justify-content-end">Sum: </p>
                                </div>
                                <br />
                                <div class="products-slider__item--price bold d-flex justify-content-end">
                                    ₾1,239.39
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 d-flex flex-column">
                            <div class="d-flex flex-row flex-lg-column align-items-start align-items-lg-end justify-content-between">
                                <div class="shop-detail__info--color">
                                    <p class="bold d-flex justify-content-end">Status: </p>
                                </div>
                                <br />
                                <div class="cart-item__date-status regular">
                                    <div class="d-flex justify-content-between">
                                        <p>create</p>
                                        <p>12.01.22</p>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <p>update</p>
                                        <p>12.01.22</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="cart-order">
                        <div class="cart-order__head d-flex justify-content-between">
                            <h1 class="cart-order__head--title bold">Order_25</h1>
                            <div class="cart-order__head--btn regular">
                                Collapse
                            </div>
                        </div>
                        <div class="cart-order__body d-flex flex-column flex-lg-row justify-content-between align-items-start align-items-lg-center">
                            <div class="d-flex align-items-center">
                                <figure class="cart-order__body--avatar">
                                    <img src="/assets/img/zoomer.png" alt="">
                                </figure>
                                <div>
                                    <h1 class="cart-order__body--name regular">Zoomer</h1>
                                </div>
                            </div>
                            <div class="d-flex align-items-center">
                                <button class="cart-order__body--btn cart-order__body--green d-flex align-items-center bold">
                                    <img src="/assets/img/svg/sms-green.svg" alt="">
                                    Send Massage
                                </button>
                                <button class="cart-order__body--btn cart-order__body--blue bold">Invoice</button>
                            </div>
                        </div>
                        <form class="cart-order__form">
                            <div class="row">
                                <div class="col-lg-4">
                                    <label class="cart-order__form--label">
                                        <p class="cart-order__form--title regular">Address</p>
                                        <input type="text" class="cart-order__form--input regular" placeholder="">
                                    </label>
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
                                    <label class="cart-order__form--label">
                                        <p class="cart-order__form--title regular">Address</p>
                                        <input type="text" class="cart-order__form--input regular" placeholder="">
                                    </label>
                                </div>
                                <div class="col-lg-4">
                                    <p class="cart-order__form--title regular">Comment</p>
                                    <textarea type="text" class="cart-order__form--textarea regular"></textarea>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </Authenticated>
</template>
