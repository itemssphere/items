<script setup>
/** Props */
const props = defineProps({
    tabs: Array,
    activeTab: Number,
})
</script>
<template>
    <div class="upload__head d-flex desktop-tabs-list">
      <template v-for="(tab, index) in tabs" :key="index">
        <div
          class="upload__head--menu regular"
          :class="{ active: activeTab == index }"
        >
          {{ tab.title }}
        </div>
      </template>
    </div>
</template>