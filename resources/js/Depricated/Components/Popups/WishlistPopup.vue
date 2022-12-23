<script setup>
/** Source */
import { usePopups } from '@/Composables/Data/usePopups'
/** Constants */
const { close } = usePopups()
</script>
<!-- Wishlist Popup Template -->
<template>
    <div class="popup open-active align-items-start justify-content-end" data-active="wishlist-popup">
        <div class="cart-popup d-flex flex-column">
            <div class="cart-popup--padding d-flex justify-content-between align-items-center">
                <h1 class="sign-in__title bold">Wishlist</h1>
                <button class="popup__close" @click="close('wishlist-popup')">
                    <img src="/assets/img/svg/popup-close.svg" alt="" class="d-none d-lg-block">
                    <img src="/assets/img/svg/popup-back-btn.svg" alt="" class="d-block d-lg-none">
                </button>
            </div>
            <div class="cart-popup__list">
                <div class="cart-popup--padding cart-item d-flex justify-content-start flex-wrap ">
                    <figure class="cart-item__img d-flex align-items-center justify-content-center">
                        <img src="/assets/img/iphone-white.jpg" alt="">
                    </figure>
                    <div class="cart-item__content d-flex">
                        <div class="cart-item__content--text d-flex flex-column align-items-start">
                            <div class="cart-item__new products-slider__item--status regular">
                                NEW
                            </div>
                            <a href="" class="products-slider__item--name regular">
                                TCL 40S325 40 Inch 1080p Smart LED Roku TV
                            </a>
                            <div class="products-slider__item--price bold">
                                ₾1,239.39
                            </div>
                            <button class="cart-item--move-cart regular">
                                move to cart
                            </button>
                        </div>
                        <div>
                            <button class="cart-item--btn d-flex align-items-center justify-content-center">
                                <img src="/assets/img/svg/trash.svg" alt="">
                            </button>
                        </div>
                    </div>
                </div><!-- item end -->
            </div>
            <!-- checkbox -->
            <label class="element__check d-flex align-items-center cart-popup--padding">
                <div>
                    <input type="checkbox" class="element__check--input">
                    <span class="element__check--checked">
                        <img src="/assets/img/svg/checked.svg" alt="">
                    </span>
                </div>
                <span class="element__check--text regular">
                    I want to receive information about promotions and new arrivals
                </span>
            </label><!-- end -->
            <div class="cart-popup--padding">
                <button class="cart-item__wishlist-go">Go TO WISH LIST</button>
                <button class="cart-item__compare">Compare</button>
            </div>

        </div>
    </div>
</template>