<script setup>
/** Source */
import { useProducts } from '@/Composables/Data/useProducts'
import { useI18n } from 'vue-i18n'
/** Components */
import ProductsSlider from '../Sliders/Products/ProductsSlider.vue'
/** Constants */
const { products } = useProducts()
const { locale, t } = useI18n({ inheritLocale: true })
</script>
<!-- Template of Products Section -->
<template>
    <div class="container">
        <div class="products_slider">
            <ProductsSlider :data="products">
                <template #title>
                    <h2 class="products__section--text regular">
                        {{ t("titles.top_offers") }}
                    </h2>
                </template>
                <template #link>
                    <a :href="route('market', locale)" class="products__section--link regular">
                        {{ t("links.view_all") }}
                    </a>
                </template>
            </ProductsSlider>
        </div>
    </div>
</template>