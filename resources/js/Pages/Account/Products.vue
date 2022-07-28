<script setup>
/** Components */
import Authenticated from '@/Layouts/Authenticated.vue'
import { Head } from '@inertiajs/inertia-vue3'
</script>
<template>
    <Head title="Products" />
    <Authenticated>
        <template #page_title>
            Products
        </template>
        <div class="d-flex justify-content-between">
            <h1 class="organization__content--title d-flex align-items-center organization__content--padding bold">My Products (89)</h1>
            <form action="" class="cart-head d-none d-lg-flex align-items-center organization__content--padding">
                <p class="cart-head__title regular">Filtr from</p>
                <div class="d-flex align-items-center">
                    <label class="sign-in__form--label  cart-head--label d-flex align-items-center">
                        <input type="date" class="sign-in__form--input cart-head--input regular" placeholder="სახელი">
                    </label>
                </div>
                <p class="cart-head__title regular">To</p>
                <div class="d-flex align-items-center">
                    <label class="sign-in__form--label  cart-head--label d-flex align-items-center">
                        <input type="date" class="sign-in__form--input cart-head--input regular" placeholder="სახელი">
                    </label>
                </div>
                <button class="cart-item__compare cart-head--btn bold">Ok</button>
                <button class="cart-item__cancel cart-head--btn bold">cancel</button>
            </form>
        </div>
        <div class="d-block d-lg-none">
            <form action="" class="cart-head organization__content--padding">
                <div class="d-flex justify-content-between d-lg-none align-items-center">
                    <p class="cart-head__title regular">Filtr from</p>
                    <div class="cart-statistic d-flex align-items-center regular">
                        <p>
                            <img src="/assets/img/svg/eye-cart.svg" alt="">
                            Products View 124
                        </p>
                        <p>
                            <img src="/assets/img/svg/trolley-cart.svg" alt="">
                            Sold products 456
                        </p>
                    </div>
                </div>
                <div class="d-flex align-items-center">
                    <div class="d-flex align-items-center">
                        <label class="sign-in__form--label  cart-head--label d-flex align-items-center">
                            <input type="date" class="sign-in__form--input cart-head--input regular" placeholder="სახელი">
                        </label>
                    </div>
                    <p class="cart-head__title regular">To</p>
                    <div class="d-flex align-items-center">
                        <label class="sign-in__form--label  cart-head--label d-flex align-items-center">
                            <input type="date" class="sign-in__form--input cart-head--input regular" placeholder="სახელი">
                        </label>
                    </div>
                    <button class="cart-item__compare cart-head--btn bold">Ok</button>
                    <button class="cart-item__cancel d-none cart-head--btn bold">cancel</button>
                </div>
            </form>
        </div>
        <div class="d-none d-lg-flex justify-content-between">
            <div class="cart-file">
                <button class="cart-file__btn bold cart-file--blue">
                    export
                </button>
                <button class="cart-file__btn bold cart-file--green">
                    import
                </button>
            </div>
            <div class="cart-statistic d-lg-flex align-items-center regular">
                <p>
                    <img src="/assets/img/svg/eye-cart.svg" alt="">
                    Products View 124
                </p>
                <p>
                    <img src="/assets/img/svg/trolley-cart.svg" alt="">
                    Sold products 456
                </p>
            </div>
        </div>
        <div class="cart-item organization__content--padding">
            <div class="row">
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-9 d-flex d-lg-block">
                            <div class="d-flex d-lg-block">
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
                                    <div class="products-slider__item--name regular d-flex flex-column flex-lg-row align-items-lg-center">
                                        <p>₾1,239.39</p>
                                        <div class="select cart-item__select">
                                            <select name="" id="" class="cart-item__select--list regular">
                                                <option>Selling</option>
                                                <option>ori</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex d-lg-none align-items-center justify-content-lg-end">
                                <button class="cart-item__edit-btn d-flex align-items-center">
                                    <img src="/assets/img/svg/edit-pen.svg" alt="">
                                </button>
                                <button class="cart-item--btn d-flex align-items-center justify-content-center">
                                    <img src="/assets/img/svg/trash.svg" alt="">
                                </button>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <form class="d-flex align-items-center d-lg-block justify-content-between">
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
                        <div class="col-lg-6">
                            <div class="d-flex flex-lg-column flex-row justify-content-between align-items-center align-items-lg-end">
                                <div class="shop-detail__info--color">
                                    <p class="bold d-flex justify-content-end">Sum: </p>
                                </div>
                                <br />
                                <div class="products-slider__item--price bold d-flex justify-content-end">
                                    ₾1,239.39
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 d-flex flex-column">
                            <div class="d-flex flex-lg-column flex-row justify-content-between align-items-start align-items-lg-end ">
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
                            <div class="d-none d-lg-flex align-items-center justify-content-lg-end">
                                <button class="cart-item__edit-btn d-flex align-items-center">
                                    <img src="/assets/img/svg/edit-pen.svg" alt="">
                                    edit product
                                </button>
                                <button class="cart-item--btn d-flex align-items-center justify-content-center">
                                    <img src="/assets/img/svg/trash.svg" alt="">
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 d-flex justify-content-center justify-content-lg-end">
                    <div class="d-flex justify-content-between align-items-center">
                        <button class="cart-item__cancel bold">cancel</button>
                        <button class="cart-item__wishlist-go">save change</button>
                    </div>
                </div>
            </div>
        </div><!-- end -->
        <div class="cart-item organization__content--padding">
            <div class="row">
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-9 d-flex d-lg-block">
                            <div class="d-flex d-lg-block">
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
                                    <div class="products-slider__item--name regular d-flex flex-column flex-lg-row align-items-lg-center">
                                        <p>₾1,239.39</p>
                                        <div class="select cart-item__select">
                                            <select name="" id="" class="cart-item__select--list regular">
                                                <option>Selling</option>
                                                <option>ori</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex d-lg-none align-items-center justify-content-lg-end">
                                <button class="cart-item__edit-btn d-flex align-items-center">
                                    <img src="/assets/img/svg/edit-pen.svg" alt="">
                                </button>
                                <button class="cart-item--btn d-flex align-items-center justify-content-center">
                                    <img src="/assets/img/svg/trash.svg" alt="">
                                </button>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <form class="d-flex align-items-center d-lg-block justify-content-between">
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
                        <div class="col-lg-6">
                            <div class="d-flex flex-lg-column flex-row justify-content-between align-items-center align-items-lg-end">
                                <div class="shop-detail__info--color">
                                    <p class="bold d-flex justify-content-end">Sum: </p>
                                </div>
                                <br />
                                <div class="products-slider__item--price bold d-flex justify-content-end">
                                    ₾1,239.39
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 d-flex flex-column">
                            <div class="d-flex flex-lg-column flex-row justify-content-between align-items-start align-items-lg-end ">
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
                            <div class="d-none d-lg-flex align-items-center justify-content-lg-end">
                                <button class="cart-item__edit-btn d-flex align-items-center">
                                    <img src="/assets/img/svg/edit-pen.svg" alt="">
                                    edit product
                                </button>
                                <button class="cart-item--btn d-flex align-items-center justify-content-center">
                                    <img src="/assets/img/svg/trash.svg" alt="">
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 d-flex justify-content-center justify-content-lg-end">
                    <div class="d-flex justify-content-between align-items-center">
                        <button class="cart-item__cancel bold">cancel</button>
                        <button class="cart-item__wishlist-go">save change</button>
                    </div>
                </div>
            </div>
        </div>
    </Authenticated>
</template>
