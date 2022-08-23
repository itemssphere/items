<script setup>

/** Source */
import { useSocials } from '@/Composables/useSocials'

/** Components */
import { Head } from '@inertiajs/inertia-vue3'
import FrontPage from '@/Layouts/FrontPage.vue'
import SocialBanner from '@/Components/Cards/SocialBanner.vue'
import SubUrl from '@/Components/Blocks/SubUrl.vue'

/** Constants */
const title = "Socials"
const { socials } = useSocials()
</script>
<!-- Social Page Component Template -->
<template>
    <Head title="Social Page" />
    <FrontPage>
        <section class="touch social-program-touch">
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
                                    {{ title }} <span class="regular">{{ socials.length }}</span>
                                </div>
                            </div>

                            <!-- filter -->
                            <div class="col-6 col-lg-12 d-block">
                                <div class="product-filter">
                                    <div class="row">
                                        <div class="col-8 d-none d-lg-block">
                                            <form class="header__search d-flex align-items-center justify-content-between">
                                                <input type="text" placeholder="search" class="header__search--input regular">
                                                <button class="header__search--btn">
                                                    <img src="/assets/img/svg/loop.svg" alt="">
                                                </button>
                                            </form>
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
                                        </div><!-- end -->
                                    </div>
                                </div>
                            </div>
                            <template v-for="social in socials" :key="social.id">
                                <SocialBanner :social="social" />
                            </template>
                            
                            <div class="col-12">
                                <div class="page__navigation d-flex justify-content-center">
                                    <button class="page__navigation--btn bold">More</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </FrontPage>
</template>