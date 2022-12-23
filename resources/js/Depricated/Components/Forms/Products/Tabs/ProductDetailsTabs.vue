<script setup>
/** Props */
const props = defineProps({
    tabs: Array,
    activeTab: Number,
})
const emit = defineEmits(['switch'])
</script>
<template>
  <div class="shop-detail__tabs--head d-flex">
    <template v-for="(tab, index) in tabs" :key="index">
      <div
        class="shop-detail__tabs--menu regular"
        :class="{ active: activeTab == index }"
        @click="emit('switch',index)"
      >
        {{ tab.title }}
      </div>
    </template>
  </div>
</template>