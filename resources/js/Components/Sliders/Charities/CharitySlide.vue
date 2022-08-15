<script setup>
/** Source */
import { toRef, computed } from 'vue'
/** Props */
const props = defineProps({
    charity: Object
})
/** Constants */
const charity = toRef(props, 'charity')
/** Computed */
const progress = computed( () => {
    return ( charity.value.raised / charity.value.goal * 100 ).toFixed(0) + '%'
})
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
            <div class="social-program-slider__item--price regular">
                <span class="social-program-slider__item--price--green bold">{{ charity.currency.symbol }}{{ charity.raised }}</span> raised of {{ charity.currency.symbol }}{{ charity.goal }} Goal
            </div>
            <div class="social-program-slider__item--price--line">
                <div class="social-program-slider__item--price--line--green" :style="{ width: progress }"></div>
            </div>
            <div class="social-program-slider__item--btns">
                <ul class="d-flex align-items-center item-btns">
                    <!-- Follow -->
                    <li class="header__btns--item item-btns__item regular d-flex align-items-center">
                        <a href="" class="header__btns--link item-btns__item--btn d-flex align-items-center justify-content-center">
                            <img src="/assets/img/svg/fav.svg" alt="" class="item-btns__item--icon convert-svg">
                        </a>
                    </li>
                    <!-- Share -->
                    <li class="header__btns--item item-btns__item regular d-flex align-items-center">
                        <a href="" class="header__btns--link item-btns__item--btn d-flex align-items-center justify-content-center">
                            <img src="/assets/img/svg/share.svg" alt="" class="item-btns__item--icon convert-svg">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</template>