<script setup>

/** Source */
import { toRef, computed } from 'vue'
/** Props */
const props = defineProps({
    social: { type: Object, required: true }
})
/** Constants */
const social = toRef(props, 'social')
/** Computed */
const progress = computed( () => {
    return ( social.value.raised / social.value.goal * 100 ).toFixed(0) + '%'
})
/** Functions */
const like = () => {
    console.log('Like')
    return true
}
const share = () => {
    console.log('Share')
    return true
}
</script>
<!-- Template of Social Banner -->
<template>
    <div class="col-lg-4 col-xl-3 col-6">
        <div class="social-program-slider__item shop__item">
            <figure class="social-program-slider__item--cover">
                <img :src="social.cover" alt="">
            </figure>
            <div class="social-program-slider__item--text">
                <a href="" class="title-link"><h1 class="social-program-slider__item--title bold">{{ social.title }}</h1></a>
                <p class="social-program-slider__item--desc regular">
                    {{ social.description }}
                </p>
                <div class="social-program-slider__item--price regular">
                    <span class="social-program-slider__item--price--green bold">{{ social.currency.symbol }}{{ social.raised }}</span> raised of {{ social.currency.symbol }}{{ social.goal }} Goal
                </div>
                <div class="social-program-slider__item--price--line">
                    <div class="social-program-slider__item--price--line--green" :style="{ width: progress }"></div>
                </div>
                <div class="social-program-slider__item--btns">
                    <ul class="d-flex align-items-center item-btns">
                        <li class="header__btns--item item-btns__item regular d-flex align-items-center">
                            <a href="" @click="like" class="header__btns--link item-btns__item--btn d-flex align-items-center justify-content-center">
                                <img src="/assets/img/svg/like-item.svg" alt="" class="item-btns__item--icon convert-svg">
                            </a>
                            {{ social.sum_likes }}
                        </li>
                        <li class="header__btns--item item-btns__item regular d-flex align-items-center">
                            <a href=""  @click="share" class="header__btns--link item-btns__item--btn d-flex align-items-center justify-content-center">
                                <img src="/assets/img/svg/socshare.svg" alt="" class="item-btns__item--icon convert-svg">
                            </a>
                            {{ social.sum_shares }}
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</template>