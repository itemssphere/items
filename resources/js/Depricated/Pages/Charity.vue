<script setup>
/** Source */
import { useCharities } from '@/Composables/Data/useCharities'
/** Components */
import { Head } from '@inertiajs/inertia-vue3'
import FrontPage from '@/Layouts/FrontPage.vue'
import SubUrl from '@/Components/Blocks/SubUrl.vue'
import FormSearch from '@/Components/Forms/FormSearch.vue';
/** Constants */
const { charities } = useCharities()
</script>
<!-- Charities Page Template -->
<template>
    <Head title="Charity Page" />
    <FrontPage>
        <section class="touch charities-touch">
            <!-- categories, main slider, banner -->
            <div class="container">
                <div class="row">
                    <div class="col d-none d-lg-block" style="max-width: 250px;">
                        <div class="categories categories__shop">
                            <h2 class="categories--title regular">Categories</h2>
                            <ul class="categories__list">
                                <li class="categories__list--item">
                                    <a href="" class="categories__list--link regular">Agriculture & Food</a>
                                </li>
                                <li class="categories__list--item">
                                    <a href="" class="categories__list--link regular">Auto & Transportation</a>
                                </li>
                                <li class="categories__list--item">
                                    <a href="" class="categories__list--link regular">Clothing, Shoes & Accessories</a>
                                </li>
                                <li class="categories__list--item">
                                    <a href="" class="categories__list--link regular">Packaging, Advertising & Office</a>
                                </li>
                                <li class="categories__list--item">
                                    <a href="" class="categories__list--link regular">Agriculture & Food</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row">
                            <SubUrl />

                            <div class="col-6 col-lg-12">
                                <div class="page__title bold">
                                    Charities <span class="regular">{{ charities.length }}</span>
                                </div>
                            </div>
                            <!-- filter -->
                            <div class="col-6 col-lg-12 d-block">
                                <div class="product-filter">
                                    <div class="row">
                                        <div class="col-8 d-none d-lg-block">
                                            <FormSearch />
                                        </div>
                                        <div class="col-12 col-lg-4">
                                            <div class="product-filter__item  d-flex align-items-center justify-content-end justify-content-lg-center">
                                                <p class="product-filter__item--title regular">Sort by</p>
                                                <!-- select -->
                                                <div class="select">
                                                    <select name="" id="" class="select__list regular">
                                                        <option value="" class="select__list--item">Delivery</option>
                                                        <option value="" class="select__list--item">erti</option>
                                                        <option value="" class="select__list--item">ori</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-xl-3 col-6" v-for="item in charities" :key="item.id">
                                <div class="social-program-slider__item shop__item">
                                    <figure class="social-program-slider__item--cover">
                                        <img :src="item.cover" alt="">
                                    </figure>
                                    <div class="social-program-slider__item--text">
                                        <a href="" class="title-link"><h1 class="social-program-slider__item--title bold">{{ item.title }}</h1></a>
                                        <p class="social-program-slider__item--desc regular">{{ item.description }}</p>
                                        <div class="social-program-slider__item--btns">
                                            <ul class="d-flex align-items-center item-btns">
                                                <li class="header__btns--item item-btns__item regular d-flex align-items-center">
                                                    <a href="" class="header__btns--link item-btns__item--btn d-flex align-items-center justify-content-center">
                                                        <img src="/assets/img/svg/man-icon.svg" alt="" class="item-btns__item--icon convert-svg">
                                                    </a>
                                                    {{ item.sum_likes }}
                                                </li>
                                                <li class="header__btns--item item-btns__item regular d-flex align-items-center">
                                                    <a href="" class="header__btns--link item-btns__item--btn d-flex align-items-center justify-content-center">
                                                        <img src="/assets/img/svg/socshare.svg" alt="" class="item-btns__item--icon convert-svg">
                                                    </a>
                                                    {{ item.sum_shares }}
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="d-none d-lg-flex justify-content-between align-items-start">
                                            <div class="d-flex justify-content-between">
                                                <div class="min-max d-flex align-items-center">
                                                    <label class="min-max__label">
                                                        <input type="text" class="min-max__label--input h-roman" placeholder="min" value="">
                                                        <p>₾</p>
                                                    </label>
                                                </div>
                                            </div>
                                            <button class="social-program-slider__item--donate">Donate</button>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end -->
                            <div class="col-12">
                                <div class="page__navigation d-flex justify-content-center">
                                    <button class="page__navigation--btn">More</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </FrontPage>
</template>