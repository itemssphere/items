<script setup>
import DefaultLayout from '@/Layouts/DefaultLayout.vue'
import Categories from '@/Fragnemts/Categories.vue'
import Slider from '@/Fragnemts/Slider.vue'
import Product from '@/Fragnemts/Product.vue'
import SocialPrograms from '@/Fragnemts/SocialPrograms.vue'
import Organizations from '@/Fragnemts/Organizations.vue'
import News from '@/Fragnemts/News.vue'
import Shops from '@/Fragnemts/Shops.vue'

/**
   * setTimeout(() => {
      $('.mobile-header-home object').attr('data', '../image/svg/menu/home1.svg');
      $('.mobile-header-home .header-mobile-items-block').addClass('active-mobile-header-items');
      $('.mobile-header-home .header-mobile-item-title').addClass('active-mobile-header-title');
  }, 500);
   */

</script>
<!-- Home page -->
<template>
  <DefaultLayout>
    <div class="container">
      <div class="row" style="position: relative;">
        <Categories class="col-md-3 mainPage" />
        <Slider class="col-md-9" />
      </div>
      <section class="top-offers-content">
        <div class="section-head-container">
          <div class="home-page-top-offers-title">
            <h3>Top offers</h3>
            <a href="/">View all</a>
          </div>
          <div class="carousel-switcher-buttons">
            <button class="show-prev-advertisement">
              <img src="/image/svg/slider-prev.svg" alt="prev icon">
            </button>
            <button class="show-prev-advertisement">
              <img src="/image/svg/slider-next.svg" alt="next icon">
            </button>
          </div>
        </div>
        <div class="top-offers-container">
          <Product class="top-offer-product" />
          <Product class="top-offer-product new-product" />
          <Product class="top-offer-product disscounted-product" />
          <Product class="top-offer-product" />
          <Product class="top-offer-product disscounted-product new-product" />
          <Product class="top-offer-product" />
        </div>
      </section>
      <div class="section-head-container" style="margin-top: 35px;">
        <div class="home-page-top-offers-title">
          <h3>Hashtags</h3>
          <a href="/">View all</a>
        </div>
        <div class="carousel-switcher-buttons">
          <button class="show-prev-advertisement">
            <img src="/image/svg/slider-prev.svg" alt="prev icon">
          </button>
          <button class="show-prev-advertisement">
            <img src="/image/svg/slider-next.svg" alt="next icon">
          </button>
        </div>
      </div>
      <div class="hashtag-items-container">
        <div class="hashtag-item">
          <div class="hashtag-image" style="background-image: url(/image/abstract-6467845_1280.png);"></div>
          <p class="hashtag-name">Anniversary</p>
        </div>
        <div class="hashtag-item">
          <div class="hashtag-image" style="background-image: url(/image/abstract-6467845_1280.png);"></div>
          <p class="hashtag-name">Anniversary</p>
        </div>
        <div class="hashtag-item">
          <div class="hashtag-image" style="background-image: url(/image/abstract-6467845_1280.png);"></div>
          <p class="hashtag-name">Anniversary</p>
        </div>
        <div class="hashtag-item">
          <div class="hashtag-image" style="background-image: url(/image/abstract-6467845_1280.png);"></div>
          <p class="hashtag-name">Anniversary</p>
        </div>
        <div class="hashtag-item">
          <div class="hashtag-image" style="background-image: url(/image/abstract-6467845_1280.png);"></div>
          <p class="hashtag-name">Anniversary</p>
        </div>
        <div class="hashtag-item">
          <div class="hashtag-image" style="background-image: url(/image/abstract-6467845_1280.png);"></div>
          <p class="hashtag-name">Anniversary</p>
        </div>
      </div>
      <SocialPrograms />
      <div class="section-head-container sales-head-title">
        <div class="home-page-top-offers-title">
          <h3>Sales</h3>
          <a href="/">View all</a>
        </div>
        <div class="carousel-switcher-buttons">
          <button class="show-prev-advertisement">
            <img src="/image/svg/slider-prev.svg" alt="prev icon">
          </button>
          <button class="show-prev-advertisement">
            <img src="/image/svg/slider-next.svg" alt="next icon">
          </button>
        </div>
      </div>
      <section id="sales-conainer">
        <Product class="sales-item-content new-product" />
        <Product class="sales-item-content" />
        <Product class="sales-item-content disscounted-product" />
        <Product class="sales-item-content" />
        <Product class="sales-item-content" />
        <Product class="sales-item-content disscounted-product new-product" />
      </section>
      <Organizations />
      <section id="news-and-shops" class="news-and-shops-content">
        <News />
        <Shops style="width: calc(100% - 690px);" />
      </section>
    </div>
  </DefaultLayout>
</template>