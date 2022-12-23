<script setup>
/** Source */
import { ref,watch } from 'vue'
/** Constants */
const searchKey = ref('')
/** Emits */
const emit = defineEmits(['search'])
/** Watcher */
watch(searchKey, async (newSearchKey, oldSearchKey) => {
    emit('search', newSearchKey)
})
</script>
<!-- Search Form Template -->
<template>
    <form class="header__search d-flex align-items-center justify-content-between">
        <input v-model="searchKey" type="text" placeholder="search" class="header__search--input regular">
        <button class="header__search--btn">
            <img src="/assets/img/svg/loop.svg" alt="">
        </button>
    </form>
</template>