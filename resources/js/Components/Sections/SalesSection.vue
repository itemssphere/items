<script setup>
/** Source */
import { useProducts } from '@/Composables/useProducts'
/** Components */
import ProductsSlider from '../Sliders/Products/ProductsSlider.vue'
/** Constants */
const { products } = useProducts()
</script>
<!-- Template of Sales Section -->
<template>
    <div class="container">
        <div class="products_slider">
            <ProductsSlider slider_id="sales_slider" :data="products">
                <template #title>
                    <h2 class="products__section--text regular">Sales</h2>     
                </template>
                <template #link>
                    <a href="" class="products__section--link regular">View all</a>
                </template>
            </ProductsSlider>
        </div>
    </div>
</template>