<script setup>
/** Source */
import { useProducts } from '@/Composables/useProducts'
import { useI18n } from 'vue-i18n'
/** Components */
import ProductsSlider from '../Sliders/Products/ProductsSlider.vue'
/** Constants */
const { products } = useProducts()
const { t } = useI18n({ inheritLocale: true })
</script>
<!-- Template of Sales Section -->
<template>
    <div class="container">
        <div class="products_slider">
            <ProductsSlider slider_id="sales_slider" :data="products">
                <template #title>
                    <h2 class="products__section--text regular">{{ t("titles.sales") }}</h2>     
                </template>
                <template #link>
                    <a href="" class="products__section--link regular">{{ t("links.view_all") }}</a>
                </template>
            </ProductsSlider>
        </div>
    </div>
</template>