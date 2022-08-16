<script setup>
/** Source */
import { toRef, computed } from 'vue'
import { useSearch } from '@/Composables/Search/useSearch'
import { useI18n } from 'vue-i18n'
/** Props */
const props = defineProps({
    searchKey: String
})
/** Constants */
const { t } = useI18n({ inheritLocale: true })
const { search } = useSearch()
const searchKey = toRef(props, 'searchKey')
/** Computed */
const data = computed(() => {
    if(searchKey.value.length > 2){
        return search(searchKey.value)
    }
    return []
})
const display = computed(() => {
    if(searchKey.value.length > 2){
        return 'block'
    }
    return 'none'
})
/** Functions */
</script>
<!-- Search Popup Template -->
<template>
    <div class="header__search__bar" :style="`display: ${display}`">
        <div class="container">
            <div class="row">
                <div class="col-12 d-lg-none">
                    <form class="m-header__search d-flex align-items-center justify-content-end">
                        <input type="text" placeholder="I want to buy…" class="m-header__search--input regular">
                        <div class="m-search-cancel">
                            <img src="/assets/img/svg/header-btn/m-search-cancel.svg" alt="">
                        </div>
                    </form>
                </div>
                <template v-for="(items, index) in data" :key="index">
                    <div class="col-12" v-if="items.length">
                        <div class="row">
                            <div class="col-lg-2">
                                <div class="header__search__bar--left d-flex flex-column align-items-end regular">
                                    {{ index.toUpperCase() }} ({{ items.length }})
                                    <a href="">{{ t("links.view_all") }}</a>
                                </div>
                            </div>
                            <div class="col-lg-10">
                                <ul class="header__search__bar__list">
                                    <li class="header__search__bar__list--li" v-for="item in items" :key="item.index">
                                        <a href="" class="header__search__bar__list--link d-flex align-items-center">
                                            <figure class="header__search__bar__list--img">
                                                <img :src="item.cover" alt="">
                                            </figure>
                                            <h1 class="header__search__bar__list--title regular">{{ item?.title || item?.name }}</h1>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </template>
            </div>
        </div>
    </div>
</template>