<script setup>
/** Source */
import { ref, toRef, onMounted } from 'vue'
import { useI18n } from 'vue-i18n'
import { useProducts } from '@/Composables/Data/useProducts'
/** Components */
import FrontPage from '@/Layouts/FrontPage.vue'
import ProductsSlider from '@/Components/Sliders/Products/ProductsSlider.vue';
import ProductsSliderMobile from '@/Components/Sliders/Products/ProductsSliderMobile.vue';
import BlockSeller from '@/Components/Blocks/BlockSeller.vue';
import BlockDonation from '@/Components/Blocks/BlockDonation.vue';
import ThumbnailSlider from '../../Components/Sliders/ThumbnailSlider.vue';
import SubUrl from '@/Components/Blocks/SubUrl.vue';
import ProductDetailsTabs from '@/Components/Forms/Products/Tabs/ProductDetailsTabs.vue';
import Characteristics from '../../Components/Forms/Products/Sections/Details/Characteristics.vue';
import Reviews from '../../Components/Forms/Products/Sections/Details/Reviews.vue';
import Questions from '../../Components/Forms/Products/Sections/Details/Questions.vue';
/** Props */
const props = defineProps({
    product: Object,
})
/** Constants */
const { locale, t } = useI18n({ inheritLocale: true })

const product = toRef(props, 'product')
const { products } = useProducts()
const similarItemsSliderOptions = ref({
    perPage: 3,
})

const activeTab = ref(0);
const tabs = ref([
  { title: t('tabs.product.details.characteristics') },
  { title: t('tabs.product.details.descriptions') },
  { title: t('tabs.product.details.return_policy') },
  { title: t('tabs.product.details.customer_reviews') },
  { title: t('tabs.product.details.customer_reviews') },
]);
/** Functions */
const onSwitch = (value) => {
  activeTab.value = value
  console.log(value)
};
/** Hooks */
onMounted(() => {
    // console.log(product.value)
    // console.log(locale)
})
</script>

<template>
    <FrontPage>
        <div class="shop-detail">
        <div class="container">
            <div class="row">
                <div class="col-12 d-block d-lg-none">
                    <SubUrl />
                </div>
                <div class="col-lg-5">
                    <ThumbnailSlider />
                </div>
                <div class="col-lg-7">
                    <div class="shop-detail__info">
                        <SubUrl />
                        <ul class="page__navigation--hashtags d-lg-flex">
                            <li class="page__navigation--hashtag">
                                <span>#Anniversary</span>
                            </li>
                            <li class="page__navigation--hashtag">
                                <span>#christmas</span>
                            </li>
                            <li class="page__navigation--hashtag">
                                <span>#Winner</span>
                            </li>
                        </ul>
                        <h1 class="shop-detail__info--title bold">TCL 40S325 40 Inch 1080p  Smart LED Roku TV</h1>
                        <p class="shop-detail__info--create-data regular">Created: 2020-03-30</p>
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="d-flex align-items-center">
                                    <div class="products-slider__item--status regular shop-detail__info--new">
                                        NEW
                                    </div>
                                    <div class="products-slider__item--stars regular d-flex align-items-center shop-detail__info--rate">
                                        <div class="products-slider__item--stars--item products-slider__item--stars--item--active"></div>
                                        <div class="products-slider__item--stars--item products-slider__item--stars--item--active"></div>
                                        <div class="products-slider__item--stars--item products-slider__item--stars--item--active"></div>
                                        <div class="products-slider__item--stars--item products-slider__item--stars--item--active"></div>
                                        <div class="products-slider__item--stars--item"></div>
                                        <span>132 review</span>
                                    </div>
                                    <div class="shop-detail__info--favorite regular d-flex align-items-center">
                                        <img src="/assets/img/svg/red-heart.svg" alt="">
                                        28
                                    </div>
                                    <div class="shop-detail__info--view regular d-flex align-items-center">
                                        <img src="/assets/img/svg/eye.svg" alt="">
                                        Looking now: 6
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <p class="shop-detail__info--manufacturing-data regular">
                                        Manufacturing Year: 2019
                                    </p>
                                    <p class="shop-detail__info--manufacturing-data regular">
                                        Location: Tbilisi
                                    </p>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="shop-detail__info--color">
                                            <p class="bold">Color: <span class="regular">Pink</span></p>
                                            <ul class="d-flex shop-detail__info--color__products">
                                                <li>
                                                    <a href="" class="active d-flex align-items-center justify-content-center">
                                                        <img src="/assets/img/headphone.png" alt="">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="" class="d-flex align-items-center justify-content-center">
                                                        <img src="/assets/img/watch.png" alt="">
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="d-flex">
                                            <div class="shop-detail__info--size">
                                                <div class="shop-detail__info--color">
                                                    <p class="bold">Size: </p>
                                                </div>
                                                <div class="d-flex">
                                                    <div class="select">
                                                        <select name="" id="" class="select__list select__list--options regular">
                                                            <option value="" class="select__list--item">40 mm</option>
                                                            <option value="" class="select__list--item">erti</option>
                                                            <option value="" class="select__list--item">ori</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="shop-detail__info--size">
                                                <div class="shop-detail__info--color">
                                                    <p class="bold">Capacity: </p>
                                                </div>
                                                <div class="d-flex">
                                                    <div class="select">
                                                        <select name="" id="" class="select__list select__list--options regular">
                                                            <option value="" class="select__list--item">40 mm</option>
                                                            <option value="" class="select__list--item">erti</option>
                                                            <option value="" class="select__list--item">ori</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div style="color: #41C227;" class="shop-detail__info--price products-slider__item--price products-slider__item--price--red bold">
                                            <div class="shop-detail__info--color">
                                                <p class="bold">Price: </p>
                                            </div>
                                            ₾1,239.39
                                            <span class="products-slider__item--price--old" style="color: #E82828;">₾1,239.39</span>
                                        </div>
                                        <div>
                                            <div class="shop-detail__info--color">
                                                <p class="bold">Shipping type: </p>
                                            </div>
                                            <div class="mt-1">
                                                <p class="with-gphost" style="margin-bottom: 0;">
                                                    Georgia Post (2 days)
                                                </p>
                                                <p class="own-delivery">
                                                    Own delivery (1 day)
                                                </p>
                                            </div>
                                        </div>
                                        <br />
                                        <form class="d-flex">
                                            <div>
                                                <div class="shop-detail__info--color">
                                                    <p class="bold">Quantity: </p>
                                                </div>
                                                <div class="shop-detail__info--quantity quantity d-flex align-items-center  justify-content-between">
                                                    <div class="dec quantity__btn regular">-</div>
                                                    <input type="text" name="turtle-doves" value="0" class="quantity__input regular">
                                                    <div class="inc quantity__btn regular">+</div>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="shop-detail__info--color">
                                                    <p class="bold">Total:</p>
                                                </div>
                                                <div class="shop-detail__info--color shop-detail__info--total-amount">
                                                    <p class="bold">₾1,239.39</p>
                                                </div>
                                            </div>
                                        </form>
                                        <p class="shop-detail__info--create-data regular">On stock: 249</p>
                                        <button class="shop-detail__add-cart bold">Add To Cart</button>
                                    </div>
                                    <div class="col-lg-6 d-none d-lg-flex align-items-end">
                                        <BlockDonation />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 d-none d-lg-flex align-items-end">
                                <BlockSeller />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="shop-detail__tabs">
                        <ProductDetailsTabs @switch="onSwitch" :tabs="tabs" :activeTab="activeTab" />
                        <div class="shop-detail__tabs--body">
                            <Characteristics v-if="activeTab == 0" />
                            <div class="shop-detail__tabs--content active" v-if="activeTab == 1">
                                info 2
                            </div><!-- end -->
                            <div class="shop-detail__tabs--content active" v-if="activeTab == 2">
                                info 3
                            </div><!-- end -->
                            <Reviews v-if="activeTab == 3" />
                            <Questions v-if="activeTab == 4" />
                        </div>
                    </div>
                </div>
                <div class="col-12 d-block d-lg-none">
                    <br /><br />
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
        <!-- products slider | top offer-->
        <div class="container">
            <!-- product slider desktop-->
            <ProductsSlider :data="products" :options="similarItemsSliderOptions">
                <template v-slot:title>
                    <div class="d-flex align-items-center">
                        <h2 class="products__section--text regular">Similar items</h2>
                    </div>
                </template>
            </ProductsSlider>
            <!-- product mobile -->
            <ProductsSliderMobile />
        </div>
    </FrontPage>
</template>