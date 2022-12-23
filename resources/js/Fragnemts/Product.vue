<script setup>
    // ...
</script>
<!-- ... -->
<template>
    <div class="product-container">
        <div class="product-image" style="background-image: url('/image/watch.png')">
            <div class="hearts-on-hover">
                <img src="image/svg/double-heart.svg" alt="" />
            </div>
            <div class="product-add-favorite">
                <button class="product-add-favorite-btn">
                    <img src="/image/svg/product-fav.svg" alt="" />
                </button>
            </div>
            <div class="product-status-description">
                <span class="product-condition-on-image">New</span>
                <span class="product-disscount-on-image">-10%</span>
            </div>
        </div>
        <div class="product-description">
            <div class="product-price">
                <p class="product-price-disscounted bold">1,239.39₾</p>
                <p class="product-price-old-price">1,430.30₾</p>
                <p class="free-item bold">free</p>
            </div>
            <p class="product-description-text">
                TCL 40S325 40 Inch 1080p Smart LED Roku TV
            </p>
            <div class="product-rates-and-view">
                <div class="product-rate">
                    <div class="rate-circle selected-circle"></div>
                    <div class="rate-circle selected-circle"></div>
                    <div class="rate-circle selected-circle"></div>
                    <div class="rate-circle selected-circle"></div>
                    <div class="rate-circle"></div>
                </div>
                <p class="product-view">132 review</p>
            </div>
        </div>
    </div>
</template>