<script setup>
/** Source */
import { useProducts } from '@/Composables/useProducts'
import { Splide, SplideSlide } from '@splidejs/vue-splide';
/** Components */
import ProductsSliderMobile from './ProductsSliderMobile.vue';
import ProductItemSlider from './ProductItemSlider.vue';

/** Constants */
const { products } = useProducts()
</script>
<!-- Products Slider Template -->
<template>
    <div class="container">
        <Splide class="products-slider" aria-labelledby="products-main-slider">
            <div class="splide__arrows products-slider__navs d-none d-lg-flex">
                <button class="splide__arrow splide__arrow--prev products-slider__navs--btn products-slider__navs--prev">
                    <img src="/assets/img/svg/slider-prev.svg" alt="">
                </button>
                <button class="splide__arrow splide__arrow--next products-slider__navs--btn products-slider__navs--next">
                    <img src="/assets/img/svg/slider-next.svg" alt="">
                </button>
            </div>
            <div class="products__section d-flex align-items-center justify-content-center justify-content-lg-between">
                <div class="d-flex align-items-center">
                    <h2 class="products__section--text regular">Top offers</h2>
                    <a href="" class="products__section--link regular">View all</a>
                </div>
            </div><!-- section head end -->
            <!-- product slider desktop-->
            <div class="d-none d-lg-block">
                <SplideSlide class="splide__slide" v-for="product in products" :key="product.id">
                    <div class="products-slider__item">
                        <button class="products-slider__item--fav">
                            <img src="/assets/img/svg/product-fav.svg" alt="">
                        </button>
                        <!-- item slider -->
                        
                        <ProductItemSlider :images="product.images" />
                        <div class="products-slider__item--footer d-flex flex-column align-items-start">
                            <div class="products-slider__item--status regular">
                                {{ product.status.toUpperCase() }}
                            </div>
                            <div class="products-slider__item--price bold">
                                {{ product.currency.symbol }}{{ product.price }}
                            </div>
                            <a href="" class="products-slider__item--name regular">
                                {{ product.name }}
                            </a>
                            <div class="products-slider__item--stars regular d-flex align-items-center">
                                <div class="products-slider__item--stars--item products-slider__item--stars--item--active"></div>
                                <div class="products-slider__item--stars--item products-slider__item--stars--item--active"></div>
                                <div class="products-slider__item--stars--item products-slider__item--stars--item--active"></div>
                                <div class="products-slider__item--stars--item products-slider__item--stars--item--active"></div>
                                <div class="products-slider__item--stars--item"></div>
                                <span>{{ product.total_reviews }} review</span>
                            </div>
                        </div>
                    </div>
                </SplideSlide><!-- item end -->
            </div>
            <ProductsSliderMobile />
        </Splide>
    </div>
</template>