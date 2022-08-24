<script setup>
/** Source */
import { ref } from "vue"
/** Components */
import ApplicationLogo from "../ApplicationLogo.vue";
import AuthorizationBlock from "../Blocks/AuthorizationBlock.vue";
import MobileLogo from "../MobileLogo.vue";
import SearchPopup from "../Popups/SearchPopup.vue";
import FormSearch from "../Forms/FormSearch.vue";
/** Props */
defineProps({ pageName: String })
/** Constants */
const searchKey = ref('')
/** Functions */
const search = (string) => {
    searchKey.value = string
}
</script>
<!-- Search Bar Template --->
<template>
  <div class="container">
    <div class="row">
      <div class="col-2 d-none d-lg-block">
        <ApplicationLogo />
      </div>
      <div class="col-10 d-none d-lg-flex justify-content-between align-items-center">
        <FormSearch @search="search" />
        <AuthorizationBlock />
      </div>
      <MobileLogo :pageName="pageName" />
    </div>
  </div>
  <SearchPopup :searchKey="searchKey" />
</template>