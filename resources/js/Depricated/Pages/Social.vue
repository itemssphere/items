<script setup>
/** Source */
import { useCategories } from '@/Composables/Data/useCategories'
import { useSocials } from '@/Composables/Data/useSocials'
import { useI18n } from 'vue-i18n'
/** Components */
import { Head } from '@inertiajs/inertia-vue3'
import FrontPage from '@/Layouts/FrontPage.vue'
import BannerSocial from '@/Components/Cards/BannerSocial.vue'
import SubUrl from '@/Components/Blocks/SubUrl.vue'
import FormSearch from '../Components/Forms/FormSearch.vue'
/** Constants */
const title = "Socials"
const { t } = useI18n({ inheritLocale: true })
const { socials } = useSocials()
const { social_categories } = useCategories()
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
                            <h2 class="categories--title regular">{{ t('titles.categories') }}</h2>
                            <ul class="categories__list">
                                <li class="categories__list--item" v-for="category in social_categories" :key="category.id">
                                    <a href="" class="categories__list--link regular">{{ category.name }}</a>
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
                            <template v-for="social in socials" :key="social.id">
                                <BannerSocial :social="social" />
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