<script setup>
/** Source */
import { useBanners } from '@/Composables/Advertising/useBanners'
/** Components */
import FrontPageVue from '@/Layouts/FrontPage.vue'
import { Splide, SplideTrack, SplideSlide } from '@splidejs/vue-splide'
import SliderArrows from '@/Components/Sliders/Components/SliderArrows.vue'

/** Constants */
const { banners } = useBanners()
const arrowsOptions = {
  classes: {  
    arrows: "main-slider__navs d-none d-lg-flex",
    prev: "main-slider__navs--btn main-slider__navs--prev",
    next: "main-slider__navs--btn main-slider__navs--next",
  },
  buttons: {
    prev: '/assets/img/svg/slider-prev.svg',
    next: '/assets/img/svg/slider-next.svg',
  }
}
</script>
<!-- Shop Details Template -->
<template>
    <FrontPageVue>
        <div class="shop-detail">
            <div class="container">
                <div class="row">
                    <div class="col-12 d-block d-lg-none">
                        <ul class="page__navigation--links d-flex">
                            <li class="page__navigation--link regular">
                                <a href="">Home</a>
                            </li>
                            <li class="page__navigation--link regular">
                                >
                                <a href="">Home</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-5">
                        <div class="shop-detail__slider">
                            <Splide :hasTrack="false" class="shop-detail__main-slider d-flex align-items-center">
                                <SliderArrows :options="arrowsOptions" />
                                <SplideTrack>
                                    <SplideSlide v-for="banner in banners" :key="banner.index">
                                        <div class="shop-detail__main-slider--cover d-flex align-items-center justify-content-center">
                                            <img :src="banner.icon" :alt="banner.name">
                                        </div>
                                    </SplideSlide>
                                </SplideTrack>
                            </Splide>
                            <Splide :hasTrack="false" class="shop-detail__mini-slider d-none d-lg-flex align-items-center">
                                <SliderArrows :options="arrowsOptions" />
                                <SplideTrack>
                                    <SplideSlide v-for="banner in banners" :key="banner.index">
                                        <div class="shop-detail__mini-slider--cover d-flex align-items-center justify-content-center">
                                            <img :src="banner.icon" :alt="banner.name">
                                        </div>
                                    </SplideSlide>
                                </SplideTrack>
                            </Splide>
                        </div>

                    </div>
                    <div class="col-lg-7">
                        <div class="shop-detail__info">
                            <ul class="page__navigation--links d-none d-lg-flex">
                                <li class="page__navigation--link regular">
                                    <a href="">Home</a>
                                </li>
                                <li class="page__navigation--link regular">
                                    >
                                    <a href="">Home</a>
                                </li>
                            </ul>
                            <h1 class="shop-detail__info--title bold">Justice for Jake Blake</h1>
                            <p class="shop-detail__info--create-data regular">Created: 2020-03-30</p>
                            <br />
                            <div class="d-flex align-items-center">
                                <div class="regular d-flex align-items-center">
                                    <img src="/assets/img/svg/heart-red.svg" alt="">
                                    <p>20</p>
                                </div>
                                <div class="regular d-flex align-items-center">
                                    <img src="/assets/img/svg/share-blue.svg" alt="">
                                    <p>20</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="d-flex">
                                        <p class="shop-detail__info--manufacturing-data regular">
                                            Days left: 123
                                        </p>
                                        <p class="shop-detail__info--manufacturing-data regular">
                                            Socialy vulnerable familyes
                                        </p>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <!-- desktop -->
                                            <div class="d-none d-lg-block shop-detail__window-banner">
                                                <h1 class="user--title bold">Rased</h1>
                                                <div class="social-program-slider__item--price regular">
                                                    <span class="social-program-slider__item--price--green bold">$13,535</span> raised of $25,000 Goal
                                                </div>
                                                <div class="social-program-slider__item--price--line">
                                                    <div class="social-program-slider__item--price--line--green" style="width: 50%;"></div>
                                                </div>
                                                <div class="social-program-slider__item--price regular d-flex justify-content-between">
                                                    <p>23 Donations</p>
                                                    <p>$400000To go</p>
                                                </div>
                                                <br />
                                                <h2 class="user--sub-title bold">We need your help</h2>
                                                <div class="d-flex justify-content-between">
                                                    <div class="user--desc regular" style="max-width: 50%;">
                                                        You can sell some product and % give for charity
                                                    </div>
                                                    <div>
                                                        <button class="cart-item__wishlist-go">Sale for</button>
                                                    </div>
                                                </div>
                                                <h1 class="user--title bold">Donate</h1>
                                                <div class="d-flex justify-content-between align-items-start">
                                                    <div>
                                                        <div class="user--desc regular">
                                                            You can donate some money For our fonds
                                                        </div>
                                                    </div>
                                                    <div class="d-flex justify-content-between align-items-start">
                                                        <div class="d-flex justify-content-between">
                                                            <div class="min-max d-flex align-items-center">
                                                                <label class="min-max__label">
                                                                    <input type="text" class="min-max__label--input h-roman" placeholder="min" value="">
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <button class="social-program-slider__item--donate">Donate</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- mobile -->
                                            <div class="d-block d-lg-none">
                                                <h1 class="d-none d-lg-block user--title bold">Rased</h1>
                                                <div class="social-program-slider__item--price regular">
                                                    <span class="social-program-slider__item--price--green bold">$13,535</span> raised of $25,000 Goal
                                                </div>
                                                <div class="social-program-slider__item--price--line">
                                                    <div class="social-program-slider__item--price--line--green" style="width: 50%;"></div>
                                                </div>
                                                <div class="social-program-slider__item--price regular d-flex justify-content-between">
                                                    <p>23 Donations</p>
                                                    <p>$400000To go</p>
                                                </div>
                                                <br />
                                                <h2 class="user--sub-title bold">We need your help</h2>
                                                <div class="d-flex flex-column flex-lg-wrap justify-content-lg-between">
                                                    <div class="user--desc regular" style="max-width: 50%;">
                                                        You can sell some product and % give for charity
                                                    </div>
                                                    <div>
                                                        <button class="cart-item__wishlist-go">Sale for</button>
                                                    </div>
                                                </div>
                                                <h1 class="d-none d-lg-block user--title bold">Donate</h1>
                                                <div class="d-none d-lg-flex justify-content-between align-items-start">
                                                    <div>
                                                        <div class="user--desc regular">
                                                            You can donate some money For our fonds
                                                        </div>
                                                    </div>
                                                    <div class="d-flex justify-content-between align-items-start">
                                                        <div class="d-flex justify-content-between">
                                                            <div class="min-max d-flex align-items-center">
                                                                <label class="min-max__label">
                                                                    <input type="text" class="min-max__label--input h-roman" placeholder="min" value="">
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <button class="social-program-slider__item--donate">Donate</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
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
                                                    <a href="" class="shop-detail__donation--send-mail d-flex align-items-center justify-content-center regular">
                                                        <img src="/assets/img/svg/mail-gray.svg" alt="">
                                                        Applecity@gmail.com
                                                    </a>
                                                    <a href="" class="shop-detail__donation--report regular">Report problem</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="shop-detail__tabs">
                            <div class="shop-detail__tabs--head d-flex">
                                <div class="shop-detail__tabs--menu regular active" data-tab="0">
                                    Characteristics
                                </div><!-- end -->
                                <div class="shop-detail__tabs--menu regular" data-tab="1">
                                    Descriptions
                                </div><!-- end -->
                                <div class="shop-detail__tabs--menu regular" data-tab="2">
                                    Return Policy
                                </div><!-- end -->
                            </div><!-- head end -->
                            <div class="shop-detail__tabs--body">
                                <div class="shop-detail__tabs--content active" data-tab="0">
                                    info 1
                                </div><!-- end -->
                                <div class="shop-detail__tabs--content" data-tab="1">
                                    info 2
                                </div><!-- end -->
                                <div class="shop-detail__tabs--content" data-tab="2">
                                    info 3
                                </div><!-- end -->

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="products-slider">
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
                                    <h2 class="products__section--text regular">Products</h2>
                                    <a href="" class="products__section--link regular">View all</a>
                                </div>
                            </div><!-- section head end -->
                            <!-- product slider desktop-->
                            <div class="splide__track d-none d-lg-block">
                                <ul class="splide__list">
                                    <div class="splide__slide">
                                        <div class="products-slider__item">
                                            <button class="products-slider__item--fav"><img src="img/svg/product-fav.svg" alt=""></button>
                                            <!-- item slider -->
                                            <div class="item-slider">
                                                <div class="splide__arrows item-slider__navs">
                                                    <button class="splide__arrow splide__arrow--prev item-slider__navs--btn item-slider__navs--prev">
                                                        <img src="/assets/img/svg/item-prev.svg" alt="">
                                                    </button>
                                                    <button class="splide__arrow splide__arrow--next item-slider__navs--btn item-slider__navs--next">
                                                        <img src="/assets/img/svg/item-next.svg" alt="">
                                                    </button>
                                                </div>
                                                <div class="splide__track">
                                                    <ul class="splide__list">
                                                        <div class="splide__slide">
                                                            <div class="item-slider__item">
                                                                <img src="/assets/img/watch.png" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="splide__slide">
                                                            <div class="item-slider__item">
                                                                <img src="/assets/img/headphone.png" alt="">
                                                            </div>
                                                        </div>
                                                    </ul>
                                                </div>
                                            </div><!-- item slide end -->
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
                                            <!-- item slider -->
                                            <div class="item-slider">
                                                <div class="splide__arrows item-slider__navs">
                                                    <button class="splide__arrow splide__arrow--prev item-slider__navs--btn item-slider__navs--prev">
                                                        <img src="/assets/img/svg/item-prev.svg" alt="">
                                                    </button>
                                                    <button class="splide__arrow splide__arrow--next item-slider__navs--btn item-slider__navs--next">
                                                        <img src="/assets/img/svg/item-next.svg" alt="">
                                                    </button>
                                                </div>
                                                <div class="splide__track">
                                                    <ul class="splide__list">
                                                        <div class="splide__slide">
                                                            <div class="item-slider__item">
                                                                <img src="/assets/img/watch.png" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="splide__slide">
                                                            <div class="item-slider__item">
                                                                <img src="/assets/img/headphone.png" alt="">
                                                            </div>
                                                        </div>
                                                    </ul>
                                                </div>
                                            </div><!-- item slide end -->
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
                                            <!-- item slider -->
                                            <div class="item-slider">
                                                <div class="splide__arrows item-slider__navs">
                                                    <button class="splide__arrow splide__arrow--prev item-slider__navs--btn item-slider__navs--prev">
                                                        <img src="/assets/img/svg/item-prev.svg" alt="">
                                                    </button>
                                                    <button class="splide__arrow splide__arrow--next item-slider__navs--btn item-slider__navs--next">
                                                        <img src="/assets/img/svg/item-next.svg" alt="">
                                                    </button>
                                                </div>
                                                <div class="splide__track">
                                                    <ul class="splide__list">
                                                        <div class="splide__slide">
                                                            <div class="item-slider__item">
                                                                <img src="/assets/img/watch.png" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="splide__slide">
                                                            <div class="item-slider__item">
                                                                <img src="/assets/img/headphone.png" alt="">
                                                            </div>
                                                        </div>
                                                    </ul>
                                                </div>
                                            </div><!-- item slide end -->
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
                            <!-- product mobile -->
                            <div class="row d-flex d-lg-none">
                                <div class="col-6">
                                    <div class="products-slider__item">
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
                                </div>
                                <div class="col-6">
                                    <div class="products-slider__item">
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
                                </div>
                                <div class="col-6">
                                    <div class="products-slider__item">
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
                                </div>
                                <div class="col-6">
                                    <div class="products-slider__item">
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </FrontPageVue>
</template>