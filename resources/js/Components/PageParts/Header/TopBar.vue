<script setup>
import _ from 'lodash'
import { ref } from 'vue'
const isActive = ref(false)

const setActive = function(){
    isActive.value = !isActive.value
}

</script>
<template>
    <div class="header__head">
        <div class="container header__head--container d-flex align-items-center">
            <h3 class="header__head--text regular">
                <p> _('heading.message') </p>
            </h3>
            <div class="header__head--lang">
                <!-- Toggle -->
                <div class="header__head--lang-btn d-none d-lg-flex align-items-center" :class="{ active: isActive }" @click="setActive">
                    <div class="header__head--lang-active d-flex align-items-center regular">
                        <img src="@/Components/assets/img/svg/georgia.svg" alt="">
                        Geo
                    </div>
                    <img src="@/Components/assets/img/svg/lang-arrow-down.svg" alt="">
                </div>
                <!-- List -->
                <div class="header__head--lang-list" :class="{ active: isActive }" @click="setActive">
                    <div class="header__head--lang-item d-flex align-items-center regular">
                        <img src="@/Components/assets/img/svg/georgia.svg" alt="">
                        Geo
                    </div>
                    <div class="header__head--lang-item d-flex align-items-center regular">
                        <img src="@/Components/assets/img/svg/england.svg" alt="">
                        En
                    </div>
                </div>
                <button class="header__head--close btn d-block d-lg-none">
                    <img src="@/Components/assets/img/svg/close-head-green.svg" alt="">
                </button>
            </div>
        </div>
    </div>
</template>