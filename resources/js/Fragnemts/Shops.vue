<script setup>
const shops = [
  {
    Id: 1,
    icon: "./image/ee.png",
    name: "Elit El",
    redirectUrl: "#",
  },
  {
    Id: 2,
    icon: "./image/alta.png",
    name: "Alta",
    redirectUrl: "#",
  },
  {
    Id: 3,
    icon: "./image/ee.png",
    name: "Elit El",
    redirectUrl: "#",
  },
  {
    Id: 4,
    icon: "./image/alta.png",
    name: "Alta",
    redirectUrl: "#",
  },
  {
    Id: 5,
    icon: "./image/ee.png",
    name: "Elit El",
    redirectUrl: "#",
  },
  {
    Id: 6,
    icon: "./image/alta.png",
    name: "Alta",
    redirectUrl: "#",
  },
  {
    Id: 7,
    icon: "./image/ee.png",
    name: "Elit El",
    redirectUrl: "#",
  },
  {
    Id: 8,
    icon: "./image/alta.png",
    name: "Alta",
    redirectUrl: "#",
  },
  {
    Id: 9,
    icon: "./image/ee.png",
    name: "Elit El",
    redirectUrl: "#",
  },
  {
    Id: 10,
    icon: "./image/alta.png",
    name: "Alta",
    redirectUrl: "#",
  },
  {
    Id: 1,
    icon: "./image/ee.png",
    name: "Elit El",
    redirectUrl: "#",
  },
  {
    Id: 2,
    icon: "./image/alta.png",
    name: "Alta",
    redirectUrl: "#",
  },
  {
    Id: 3,
    icon: "./image/ee.png",
    name: "Elit El",
    redirectUrl: "#",
  },
  {
    Id: 4,
    icon: "./image/alta.png",
    name: "Alta",
    redirectUrl: "#",
  },
  {
    Id: 5,
    icon: "./image/ee.png",
    name: "Elit El",
    redirectUrl: "#",
  },
  {
    Id: 6,
    icon: "./image/alta.png",
    name: "Alta",
    redirectUrl: "#",
  },
  {
    Id: 7,
    icon: "./image/ee.png",
    name: "Elit El",
    redirectUrl: "#",
  },
  {
    Id: 8,
    icon: "./image/alta.png",
    name: "Alta",
    redirectUrl: "#",
  },
  {
    Id: 9,
    icon: "./image/ee.png",
    name: "Elit El",
    redirectUrl: "#",
  },
  {
    Id: 10,
    icon: "./image/alta.png",
    name: "Alta",
    redirectUrl: "#",
  },
  {
    Id: 1,
    icon: "./image/ee.png",
    name: "Elit El",
    redirectUrl: "#",
  },
  {
    Id: 2,
    icon: "./image/alta.png",
    name: "Alta",
    redirectUrl: "#",
  },
  {
    Id: 3,
    icon: "./image/ee.png",
    name: "Elit El",
    redirectUrl: "#",
  },
  {
    Id: 4,
    icon: "./image/alta.png",
    name: "Alta",
    redirectUrl: "#",
  },
]
</script>
<!-- ... -->
<template>
  <div class="shops-list-container">
    <div class="shops-section-title">
      <p class="section-title">Shops</p>
      <a href="#" class="section-view-all">View all</a>
    </div>
    <div class="shops-items-list row">
      <div class="shop-item-box-container" v-for="shop in shops" :key="shop.index">
        <div :data-id="shop.Id" :data-name="shop.name" class="shop-item-box">
          <a :href="shop.redirectUrl">
            <img :src="shop.icon" alt="shop logo" />
          </a>
        </div>
      </div>
    </div>
  </div>
</template>