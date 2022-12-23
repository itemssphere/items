<script setup>
/** Components */
import { Head } from '@inertiajs/inertia-vue3'
import FrontPage from '@/Layouts/FrontPage.vue'
import SubUrl from '@/Components/Blocks/SubUrl.vue'
import FilterMain from '@/Components/Blocks/Filters/FilterMain.vue';
import PickerCategories from '@/Components/Navigation/Pickers/PickerCategories.vue'
</script>
<!-- Market Page Template -->
<template>
    <Head title="Market Page" />
    <FrontPage>
        <section class="touch market-touch">
            <div class="container">
                <div class="row">
                    <div class="col d-none d-lg-block js-filter" style="max-width: 275px;">
                        <div class="active-filter--container d-flex">

                            <PickerCategories>
                                <template v-slot:filters>
                                    <FilterMain />
                                </template>
                                <template v-slot:default>
                                    <div class="col">
                                        <div class="row">
                                            <div class="col-12 d-none d-lg-block">
                                                <SubUrl />
                                            </div>
                                            <div class="col-6 col-lg-12">
                                                <div class="page__title bold">
                                                    Products <span class="regular">60,000</span>
                                                </div>
                                            </div>
                                            <div class="col-6 col-lg-12 d-block">
                                                <div class="product-filter">
                                                    <div class="row">
                                                        <div class="col-3 d-none d-lg-block">
                                                            <div class="product-filter__item d-flex align-items-start flex-column justify-content-start">
                                                                <p class="product-filter__item--title regular">Sort by product type:</p>
                                                                <ul class="product-filter__item--categories regular d-flex">
                                                                    <li class="product-filter__item--categori">
                                                                        <a href="" class="product-filter__item--link active">All</a>
                                                                    </li>
                                                                    <li class="product-filter__item--categori">
                                                                        <a href="" class="product-filter__item--link">New</a>
                                                                    </li>
                                                                    <li class="product-filter__item--categori">
                                                                        <a href="" class="product-filter__item--link">Used</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div><!-- end -->
                                                        <div class="col-3 d-none d-lg-block">
                                                            <div class="product-filter__item d-flex align-items-start flex-column justify-content-start">
                                                                <p class="product-filter__item--title regular">Sort by product type:</p>
                                                                <ul class="product-filter__item--categories regular d-flex">
                                                                    <li class="product-filter__item--categori">
                                                                        <a href="" class="product-filter__item--link">All</a>
                                                                    </li>
                                                                    <li class="product-filter__item--categori">
                                                                        <a href="" class="product-filter__item--link green">Free</a>
                                                                    </li>
                                                                    <li class="product-filter__item--categori">
                                                                        <a href="" class="product-filter__item--link active">Donate</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div><!-- end -->
                                                        <div class="col-3 d-none d-lg-block">
                                                            <div class="product-filter__item d-flex align-items-start flex-column justify-content-start">
                                                                <p class="product-filter__item--title regular">Sort by product type:</p>
                                                                <ul class="product-filter__item--categories regular d-flex">
                                                                    <li class="product-filter__item--categori">
                                                                        <a href="" class="product-filter__item--link">All</a>
                                                                    </li>
                                                                    <li class="product-filter__item--categori">
                                                                        <a href="" class="product-filter__item--link">New</a>
                                                                    </li>
                                                                    <li class="product-filter__item--categori">
                                                                        <a href="" class="product-filter__item--link active">Free size Big </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div><!-- end -->
                                                        <div class="col-12 col-lg-3">
                                                            <div class="product-filter__item  d-flex flex-lg-column justify-content-end">
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
                                                        </div><!-- end -->
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-xl-3 col-6">
                                                <div class="products-slider__item shop__item">
                                                    <button class="products-slider__item--fav"><img src="/assets/img/svg/product-fav.svg" alt=""></button>
                                                    <!-- item slider -->
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
                                            </div><!-- end -->
                                            <div class="col-lg-4 col-xl-3 col-6">
                                                <div class="products-slider__item shop__item">
                                                    <button class="products-slider__item--fav"><img src="/assets/img/svg/product-fav.svg" alt="" class="convert-svg"></button>
                                                    <!-- item slider -->
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
                                            </div><!-- end -->

                                            <div class="col-12">
                                                <div class="page__navigation d-flex justify-content-center">
                                                    <button class="page__navigation--btn bold">More</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- right -->
                                </template>
                            </PickerCategories>


                            

                        </div>
                    </div><!-- left -->
                    
                </div>
            </div>
        </section>
    </FrontPage>
</template>