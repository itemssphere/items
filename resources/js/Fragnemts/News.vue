<script setup>
import NewsItem from '@/Fragnemts/NewsItem.vue'
</script>
<!-- ... -->
<template>
    <div class="news-list-container">
        <div class="news-section-title">
            <p class="section-title">News</p>
            <a href="#" class="section-view-all">View all</a>
        </div>
        <div class="news-items-list">
            <NewItem class="news-item-container" />
            <NewItem class="news-item-container" />
            <NewItem class="news-item-container" />
            <NewItem class="news-item-container" />
        </div>
    </div>
</template>