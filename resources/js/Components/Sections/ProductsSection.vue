<script setup>
/** Source */
import { useProducts } from '@/Composables/useProducts'
/** Components */
import ProductsSlider from '../Sliders/Products/ProductsSlider.vue'
/** Constants */
const { products } = useProducts()
</script>
<!-- Template of Products Section -->
<template>
    <ProductsSlider :data="products">
        <template #title>
            <h2 class="products__section--text regular">Top Offers</h2>     
        </template>
        <template #link>
            <a href="" class="products__section--link regular">View all</a>
        </template>
    </ProductsSlider>
</template>