<script setup>
/** Source */
import { toRef } from 'vue'
/** Props */
const props = defineProps({
    charity: Object
})
/** Constants */
const charity = toRef(props, 'charity')

</script>
<!-- Social Slide Template -->
<template>
    <div class="social-program-slider__item">
        <figure class="social-program-slider__item--cover">
            <img :src="charity.cover" alt="">
        </figure>
        <div class="social-program-slider__item--text">
            <a href="" class="title-link"><h1 class="social-program-slider__item--title bold">{{ charity.title }}</h1></a>
            <p class="social-program-slider__item--desc regular">
                {{ charity.description }}
            </p>
            <div class="social-program-slider__item--btns">
                <ul class="d-flex align-items-center item-btns">
                    <li class="header__btns--item item-btns__item regular d-flex align-items-center">
                        <a href="" class="header__btns--link item-btns__item--btn d-flex align-items-center justify-content-center">
                            <img src="/assets/img/svg/fav.svg" alt="" class="item-btns__item--icon convert-svg">
                        </a>
                        {{ charity.sum_follows }}
                    </li>
                    <li class="header__btns--item item-btns__item regular d-flex align-items-center">
                        <a href="" class="header__btns--link item-btns__item--btn d-flex align-items-center justify-content-center">
                            <img src="/assets/img/svg/socshare.svg" alt="" class="item-btns__item--icon convert-svg">
                        </a>
                        {{ charity.sum_shares }}
                    </li>
                </ul>
            </div>
        </div>
    </div>
</template>