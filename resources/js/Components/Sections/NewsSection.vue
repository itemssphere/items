<script setup>
/** Source */
import { useNews } from '@/Composables/useNews'
import { useShops } from '@/Composables/useShops'
/** Constants */
const { news } = useNews()
const { shops } = useShops()
</script>
<!-- News Section's Template -->
<template>
    <div class="container-lg mobile-container">
        <div class="row">
            <div class="col-12 col-lg-6">
                <div class="products__section d-flex align-items-center justify-content-center justify-content-lg-between">
                    <div class="d-flex align-items-center">
                        <h2 class="products__section--text regular">News</h2>
                        <a href="" class="products__section--link regular">View all</a>
                    </div>
                </div><!-- section head end -->
                <!-- news desktop version -->
                <ul class="news d-none d-lg-block">
                    <li class="d-flex" v-for="item in news" :key="item.id">
                        <a href="" class="news__item d-flex">
                            <figure class="news__item--img">
                                <img :src="item.cover" alt="">
                            </figure>
                            <div class="news__item--text">
                                <h1 class="news__item--title bold">{{ item.title }}</h1>
                                <p class="news__item--desc regular">{{ item.descriotion }}</p>
                                <p class="news__item--date regular">{{ item.published_at }}</p>
                            </div>
                        </a>
                    </li>
                </ul>
                <!-- news mobile version -->
                <div class="d-block d-lg-none">
                    <div class="news-slider">
                        <div class="splide__track">
                            <ul class="splide__list">
                                <div class="splide__slide">
                                    <a href="" class="news news__item d-flex flex-column">
                                        <figure class="news__item--img">
                                            <img src="assets/img/news.png" alt="">
                                        </figure>
                                        <div class="news__item--text">
                                            <p class="news__item--date regular">
                                                01/06/2021
                                            </p>
                                            <h1 class="news__item--title bold">
                                                Elit Electronics Is Going To Joined Itemssphere 
                                                With Most Highest Percentage OF CHARITY
                                            </h1>
                                            <p class="news__item--desc regular">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt nisi rem quo, nam atque tenetur dignissimos excepturi quas molestias, vero nulla alias. Nulla, quam natus. Nam, incidunt! Voluptate, debitis ducimus!
                                            </p>
                                        </div>
                                    </a>
                                </div><!-- item end -->
                                <div class="splide__slide">
                                    <a href="" class="news news__item d-flex flex-column">
                                        <figure class="news__item--img">
                                            <img src="assets/img/news.png" alt="">
                                        </figure>
                                        <div class="news__item--text">
                                            <p class="news__item--date regular">
                                                01/06/2021
                                            </p>
                                            <h1 class="news__item--title bold">
                                                Elit Electronics Is Going To Joined Itemssphere 
                                                With Most Highest Percentage OF CHARITY
                                            </h1>
                                            <p class="news__item--desc regular">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt nisi rem quo, nam atque tenetur dignissimos excepturi quas molestias, vero nulla alias. Nulla, quam natus. Nam, incidunt! Voluptate, debitis ducimus!
                                            </p>
                                        </div>
                                    </a>
                                </div><!-- item end -->
                                <div class="splide__slide">
                                    <a href="" class="news news__item d-flex flex-column">
                                        <figure class="news__item--img">
                                            <img src="assets/img/news.png" alt="">
                                        </figure>
                                        <div class="news__item--text">
                                            <p class="news__item--date regular">
                                                01/06/2021
                                            </p>
                                            <h1 class="news__item--title bold">
                                                Elit Electronics Is Going To Joined Itemssphere 
                                                With Most Highest Percentage OF CHARITY
                                            </h1>
                                            <p class="news__item--desc regular">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt nisi rem quo, nam atque tenetur dignissimos excepturi quas molestias, vero nulla alias. Nulla, quam natus. Nam, incidunt! Voluptate, debitis ducimus!
                                            </p>
                                        </div>
                                    </a>
                                </div><!-- item end -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- our shops -->
            <div class="col-12 col-lg-6">
                <div class="products__section d-flex align-items-center justify-content-center justify-content-lg-between">
                    <div class="d-flex align-items-center">
                        <h2 class="products__section--text regular">Our shops</h2>
                        <a href="" class="products__section--link regular">View all</a>
                    </div>
                </div><!-- section head end -->
                <!-- desktop version -->
                <ul class="ourshop d-none d-lg-flex flex-wrap">
                    <li class="ourshop__item" v-for="item in shops" :key="item.id">
                        <a href="" class="ourshop__item--link">
                            <img :src="item.cover" alt="" class="ourshop__item--img">
                        </a>
                    </li>
                </ul>
                <!-- mobile version -->
                <div class="d-block d-lg-none">
                    <div class="ourshop-slider">
                        <div class="splide__track">
                            <ul class="splide__list">
                                <div class="splide__slide">
                                    <li class="">
                                        <a href="" class="ourshop__item--link">
                                            <img src="assets/img/alta.png" alt="" class="ourshop__item--img">
                                        </a>
                                    </li>
                                </div><!-- item end -->
                                <div class="splide__slide">
                                    <li class="">
                                        <a href="" class="ourshop__item--link">
                                            <img src="assets/img/alta.png" alt="" class="ourshop__item--img">
                                        </a>
                                    </li>
                                </div><!-- item end -->
                                <div class="splide__slide">
                                    <li class="">
                                        <a href="" class="ourshop__item--link">
                                            <img src="assets/img/alta.png" alt="" class="ourshop__item--img">
                                        </a>
                                    </li>
                                </div><!-- item end -->
                                <div class="splide__slide">
                                    <li class="">
                                        <a href="" class="ourshop__item--link">
                                            <img src="assets/img/alta.png" alt="" class="ourshop__item--img">
                                        </a>
                                    </li>
                                </div><!-- item end -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>