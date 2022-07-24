<script setup>
/** Source */
import { usePopups } from '@/Composables/usePopups'
/** Constants */
const { close } = usePopups()
</script>
<!-- Cart Popup Template -->
<template>
    <div class="popup open-active align-items-start justify-content-end" data-active="cart-popup">
        <div class="cart-popup d-flex flex-column">
            <div class="cart-popup--padding d-flex justify-content-between align-items-center">
                <h1 class="sign-in__title bold">Product Added to Cart</h1>
                <button class="popup__close" @click="close('cart-popup')">
                    <img src="/assets/img/svg/popup-close.svg" alt="" class="d-none d-lg-block">
                    <img src="/assets/img/svg/popup-back-btn.svg" alt="" class="d-block d-lg-none">
                </button>
            </div>
            <div class="cart-popup__list">
                <div class="cart-popup--padding cart-item d-flex justify-content-start">
                    <figure class="cart-item__img d-flex align-items-center justify-content-center">
                        <img src="/assets/img/iphone-white.jpg" alt="">
                    </figure>
                    <div class="cart-item__content d-flex">
                        <div class="cart-item__content--text d-flex align-items-start">
                            <div class="col-5 d-flex flex-column justify-content-start align-items-start">
                                <div class="cart-item__new products-slider__item--status regular">
                                    NEW
                                </div>
                                <div>
                                    <a href="" class="products-slider__item--name regular">
                                        TCL 40S325 40 Inch 1080p Smart LED Roku TV
                                    </a>
                                    <div class="products-slider__item--name regular">
                                        ₾1,239.39
                                    </div>
                                </div>
                            </div>
                            <div class="col-4 d-flex flex-column">
                                <div class="shop-detail__info--color">
                                    <p class="bold">Quantity: </p>
                                </div>
                                <div>
                                    <div class="shop-detail__info--quantity quantity d-flex align-items-center justify-content-between">
                                        <div class="dec quantity__btn regular">-</div>
                                        <input type="text" name="turtle-doves" value="0" class="quantity__input regular">
                                        <div class="inc quantity__btn regular">+</div>
                                    </div>
                                    <p class="shop-detail__info--create-data regular">On stock: 249</p>
                                </div>
                            </div>
                            <div class="col-3 d-flex flex-column">
                                <div class="shop-detail__info--color">
                                    <p class="bold">Sum: </p>
                                </div>
                                <div class="products-slider__item--price bold">
                                    ₾1,239.39
                                </div>
                            </div>
                        </div>
                        <div>
                            <button class="cart-item--btn d-flex align-items-center justify-content-center">
                                <img src="/assets/img/svg/header-btn/bar-wishlist.svg" alt="">
                            </button>
                            <button class="cart-item--btn d-flex align-items-center justify-content-center">
                                <img src="/assets/img/svg/trash.svg" alt="">
                            </button>
                        </div>
                    </div>
                </div><!-- item end -->
                <div class="cart-popup--padding cart-item d-flex justify-content-start">
                    <figure class="cart-item__img d-flex align-items-center justify-content-center">
                        <img src="/assets/img/iphone-white.jpg" alt="">
                    </figure>
                    <div class="cart-item__content d-flex">
                        <div class="cart-item__content--text d-flex align-items-start">
                            <div class="col-5 d-flex flex-column justify-content-start align-items-start">
                                <div class="cart-item__new products-slider__item--status regular">
                                    NEW
                                </div>
                                <div>
                                    <a href="" class="products-slider__item--name regular">
                                        TCL 40S325 40 Inch 1080p Smart LED Roku TV
                                    </a>
                                    <div class="products-slider__item--name regular">
                                        ₾1,239.39
                                    </div>
                                </div>
                            </div>
                            <div class="col-4 d-flex flex-column">
                                <div class="shop-detail__info--color">
                                    <p class="bold">Quantity: </p>
                                </div>
                                <div>
                                    <div class="shop-detail__info--quantity quantity d-flex align-items-center justify-content-between">
                                        <div class="dec quantity__btn regular">-</div>
                                        <input type="text" name="turtle-doves" value="0" class="quantity__input regular">
                                        <div class="inc quantity__btn regular">+</div>
                                    </div>
                                    <p class="shop-detail__info--create-data regular">On stock: 249</p>
                                </div>
                            </div>
                            <div class="col-3 d-flex flex-column">
                                <div class="shop-detail__info--color">
                                    <p class="bold">Sum: </p>
                                </div>
                                <div class="products-slider__item--price bold">
                                    ₾1,239.39
                                </div>
                            </div>
                        </div>
                        <div>
                            <button class="cart-item--btn d-flex align-items-center justify-content-center">
                                <img src="/assets/img/svg/header-btn/bar-wishlist.svg" alt="">
                            </button>
                            <button class="cart-item--btn d-flex align-items-center justify-content-center">
                                <img src="/assets/img/svg/trash.svg" alt="">
                            </button>
                        </div>
                    </div>
                </div><!-- item end -->
                <div class="cart-popup--padding">
                    <div class="row">
                        <div class="col-5">
                            <div class="shop-detail__window-banner">
                                <h1 class="shop-detail__window-banner--title regular">Seller</h1>
                                <div class="shop-detail__donation">
                                    <figure class="shop-detail__window-banner--icon d-flex justify-content-center">
                                        <img src="/assets/img/donat-icon.png" alt="">
                                    </figure>
                                    <p class="shop-detail__window-banner--author bold">Achiko Chikovani</p>
                                    <p class="shop-detail__window-banner--desc regular">
                                        On August 23rd my son was shot 
                                        multiple times in the back by a …
                                    </p>
                                    <button class="shop-detail__donation--send-sms d-flex align-items-center justify-content-center bold">
                                        <img src="/assets/img/svg/sms-green.svg" alt="">
                                        Send Massage
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-7">
                            <div class="products-slider" style="margin-top: 0;">
                                <!-- product slider desktop-->
                                <div class="splide__track d-none d-lg-block">
                                    <ul class="splide__list">
                                        <div class="splide__slide">
                                            <div class="products-slider__item">
                                                <button class="products-slider__item--fav"><img src="/assets/img/svg/product-fav.svg" alt=""></button>
                                                <div class="item-slider__item">
                                                    <img src="/assets/img/watch.png" alt="">
                                                </div>
                                                <div class="products-slider__item--footer d-flex flex-column align-items-start">
                                                    <div class="products-slider__item--status regular">
                                                        NEW
                                                    </div>
                                                    <div class="products-slider__item--price bold">
                                                        ₾1,239.39
                                                    </div>
                                                    <a href="" class="products-slider__item--name regular">
                                                        TCL 40S325 40 Inch 1080p Smart LED Roku TV
                                                    </a>
                                                    <div class="products-slider__item--stars regular d-flex align-items-center">
                                                        <div class="products-slider__item--stars--item products-slider__item--stars--item--active"></div>
                                                        <div class="products-slider__item--stars--item products-slider__item--stars--item--active"></div>
                                                        <div class="products-slider__item--stars--item products-slider__item--stars--item--active"></div>
                                                        <div class="products-slider__item--stars--item products-slider__item--stars--item--active"></div>
                                                        <div class="products-slider__item--stars--item"></div>
                                                        <span>132 review</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- item end -->
                                        <div class="splide__slide">
                                            <div class="products-slider__item">
                                                <button class="products-slider__item--fav"><img src="/assets/img/svg/product-fav.svg" alt=""></button>
                                                <div class="item-slider__item">
                                                    <img src="/assets/img/watch.png" alt="">
                                                </div>
                                                <div class="products-slider__item--footer d-flex flex-column align-items-start">
                                                    <div class="products-slider__item--status regular">
                                                        NEW
                                                    </div>
                                                    <div class="products-slider__item--price bold">
                                                        ₾1,239.39
                                                    </div>
                                                    <a href="" class="products-slider__item--name regular">
                                                        TCL 40S325 40 Inch 1080p Smart LED Roku TV
                                                    </a>
                                                    <div class="products-slider__item--stars regular d-flex align-items-center">
                                                        <div class="products-slider__item--stars--item products-slider__item--stars--item--active"></div>
                                                        <div class="products-slider__item--stars--item products-slider__item--stars--item--active"></div>
                                                        <div class="products-slider__item--stars--item products-slider__item--stars--item--active"></div>
                                                        <div class="products-slider__item--stars--item products-slider__item--stars--item--active"></div>
                                                        <div class="products-slider__item--stars--item"></div>
                                                        <span>132 review</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- item end -->
                                        <div class="splide__slide">
                                            <div class="products-slider__item">
                                                <button class="products-slider__item--fav"><img src="/assets/img/svg/product-fav.svg" alt=""></button>
                                                <div class="item-slider__item">
                                                    <img src="/assets/img/watch.png" alt="">
                                                </div>
                                                <div class="products-slider__item--footer d-flex flex-column align-items-start">
                                                    <div class="products-slider__item--status regular">
                                                        NEW
                                                    </div>
                                                    <div class="products-slider__item--price bold">
                                                        ₾1,239.39
                                                    </div>
                                                    <a href="" class="products-slider__item--name regular">
                                                        TCL 40S325 40 Inch 1080p Smart LED Roku TV
                                                    </a>
                                                    <div class="products-slider__item--stars regular d-flex align-items-center">
                                                        <div class="products-slider__item--stars--item products-slider__item--stars--item--active"></div>
                                                        <div class="products-slider__item--stars--item products-slider__item--stars--item--active"></div>
                                                        <div class="products-slider__item--stars--item products-slider__item--stars--item--active"></div>
                                                        <div class="products-slider__item--stars--item products-slider__item--stars--item--active"></div>
                                                        <div class="products-slider__item--stars--item"></div>
                                                        <span>132 review</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- item end -->
                                        <div class="splide__slide">
                                            <div class="products-slider__item">
                                                <button class="products-slider__item--fav"><img src="/assets/img/svg/product-fav.svg" alt=""></button>
                                                <div class="item-slider__item">
                                                    <img src="/assets/img/watch.png" alt="">
                                                </div>
                                                <div class="products-slider__item--footer d-flex flex-column align-items-start">
                                                    <div class="products-slider__item--status regular">
                                                        NEW
                                                    </div>
                                                    <div class="products-slider__item--price bold">
                                                        ₾1,239.39
                                                    </div>
                                                    <a href="" class="products-slider__item--name regular">
                                                        TCL 40S325 40 Inch 1080p Smart LED Roku TV
                                                    </a>
                                                    <div class="products-slider__item--stars regular d-flex align-items-center">
                                                        <div class="products-slider__item--stars--item products-slider__item--stars--item--active"></div>
                                                        <div class="products-slider__item--stars--item products-slider__item--stars--item--active"></div>
                                                        <div class="products-slider__item--stars--item products-slider__item--stars--item--active"></div>
                                                        <div class="products-slider__item--stars--item products-slider__item--stars--item--active"></div>
                                                        <div class="products-slider__item--stars--item"></div>
                                                        <span>132 review</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- item end -->
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cart-item__total bold d-flex align-items-end cart-popup--padding d-flex justify-content-end">
                Total:
                <h1 class="cart-item__total--count">₾2,239.39</h1>
            </div>
            <div class="cart-item__product-count d-flex justify-content-end regular cart-popup--padding">
                2 products
            </div>
            <div class="cart-popup--padding">
                <button class="cart-item__check-btn bold">Proceed To checkout</button>
            </div>

        </div>
    </div>
</template>