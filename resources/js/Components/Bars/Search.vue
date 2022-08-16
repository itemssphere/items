<script setup>
/** Source */
import { ref } from 'vue'
/** Components */
import ApplicationLogo from '../ApplicationLogo.vue'
import AuthorizationBlock from '../Blocks/AuthorizationBlock.vue'
import MobileLogo from '../MobileLogo.vue'
import SearchPopup from '../Popups/SearchPopup.vue'
/** Props */
defineProps({
    pageName: String
})
/** Constants */
const searchKey = ref('')
</script>
<!-- Search Bar Template --->
<template>
    <div class="container">
        <div class="row">
            <div class="col-2 d-none d-lg-block">
                <ApplicationLogo />
            </div>
            <div class="col-10 d-none d-lg-flex justify-content-between align-items-center">
                <form class="header__search d-flex align-items-center justify-content-between">
                    <input v-model="searchKey" type="text" placeholder="search" class="header__search--input regular">
                    <button class="header__search--btn">
                        <img src="/assets/img/svg/loop.svg" alt="">
                    </button>
                </form>
                <AuthorizationBlock />
            </div>
            <MobileLogo :pageName="pageName"/>
        </div>
    </div>
    <SearchPopup :searchKey="searchKey" />
</template>