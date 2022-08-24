<script setup>
/** Source */
import { useCategories } from "@/Composables/Data/useCategories";
import { useShops } from "@/Composables/Data/useShops";
import { useI18n } from "vue-i18n";
/** Components */
import { Head } from "@inertiajs/inertia-vue3";
import Page from "@/Layouts/FrontPage.vue";
import PickerCategories from "@/Components/Navigation/Pickers/PickerCategories.vue";
import SubUrl from "@/Components/Blocks/SubUrl.vue";
import FormSearch from "@/Components/Forms/FormSearch.vue";
/** Constants */
const { shops } = useShops();
const { locale, t } = useI18n({ inheritLocale: true });
</script>
<!-- Shops Page Template -->
<template>
  <Head title="Shop Page" />
  <Page>
    <section class="touch shop-touch">
      <!-- categories, main slider, banner -->
      <div class="container">
        <div class="row">
          <PickerCategories>
            <template v-slot:default>
              <div class="col">
                <div class="row">
                  <SubUrl />
                  <div class="col-6 col-lg-12">
                    <div class="page__title bold">
                      Shops <span class="regular">{{ shops.length }}</span>
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
                          <div
                            class="
                              product-filter__item
                              d-flex
                              align-items-center
                              justify-content-end justify-content-lg-center
                            "
                          >
                            <p class="product-filter__item--title regular">
                              Sort by
                            </p>
                            <!-- select -->
                            <div class="select">
                              <select
                                name=""
                                id=""
                                class="select__list regular"
                              >
                                <option value="" class="select__list--item">
                                  Delivery
                                </option>
                                <option value="" class="select__list--item">
                                  erti
                                </option>
                                <option value="" class="select__list--item">
                                  ori
                                </option>
                              </select>
                            </div>
                          </div>
                        </div>
                        <!-- end -->
                      </div>
                    </div>
                  </div>

                  <div
                    class="col-lg-4 col-xl-3 col-6"
                    v-for="shop in shops"
                    :key="shop.id"
                  >
                    <div class="social-program-slider__item shop__item">
                      <figure class="social-program-slider__item--cover">
                        <img :src="shop.cover" :alt="shop.name" />
                      </figure>
                      <div class="social-program-slider__item--text">
                        <a href="" class="title-link">
                          <h1 class="social-program-slider__item--title bold">
                            {{ shop.name.toUpperCase() }}
                          </h1>
                        </a>
                        <p class="social-program-slider__item--desc regular">
                          {{ shop.description }}
                        </p>
                        <div class="social-program-slider__item--btns">
                          <ul class="d-flex align-items-center item-btns">
                            <li
                              class="
                                header__btns--item
                                item-btns__item
                                regular
                                d-flex
                                align-items-center
                              "
                            >
                              <a
                                href=""
                                class="
                                  header__btns--link
                                  item-btns__item--btn
                                  d-flex
                                  align-items-center
                                  justify-content-center
                                "
                              >
                                <img
                                  src="/assets/img/svg/man-icon.svg"
                                  alt=""
                                  class="item-btns__item--icon convert-svg"
                                />
                              </a>
                              {{ shop.followers_count }}
                            </li>
                            <li
                              class="
                                header__btns--item
                                item-btns__item
                                regular
                                d-flex
                                align-items-center
                              "
                            >
                              <a
                                href=""
                                class="
                                  header__btns--link
                                  item-btns__item--btn
                                  d-flex
                                  align-items-center
                                  justify-content-center
                                "
                              >
                                <img
                                  src="/assets/img/svg/socshare.svg"
                                  alt=""
                                  class="item-btns__item--icon convert-svg"
                                />
                              </a>
                              {{ shop.shares_count }}
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="page__navigation d-flex justify-content-center">
                      <button class="page__navigation--btn bold">More</button>
                    </div>
                  </div>
                </div>
              </div>
            </template>
          </PickerCategories>
        </div>
      </div>
    </section>
  </Page>
</template>