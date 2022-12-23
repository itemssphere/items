<script setup>
/** Source */
import { ref } from "vue"
import { useI18n } from 'vue-i18n'
/** Components */
import FrontPage from "@/Layouts/FrontPage.vue";
import ListingDetails from "@/Components/Forms/Products/Sections/ListingDetails.vue";
import SellingDetails from "../../Components/Forms/Products/Sections/SellingDetails.vue";
import ShippingDetails from "../../Components/Forms/Products/Sections/ShippingDetails.vue";
import MakeDonation from "../../Components/Forms/Products/Sections/MakeDonation.vue";
import ActionsBar from "../../Components/Forms/Products/ActionsBar.vue";
import ProductCreateMobile from "../../Components/Forms/Products/Mobile/ProductCreateMobile.vue";
import ProductCreateTabs from "@/Components/Forms/Products/Tabs/ProductCreateTabs.vue";
import ProductDraftsList from "../../Components/Forms/Products/Drafts/ProductDraftsList.vue";
import ProductCreateUpload from "../../Components/Forms/Products/Upload/ProductCreateUpload.vue";
import SubUrl from "@/Components/Blocks/SubUrl.vue";

/** Constants */
const { locale, t } = useI18n({ inheritLocale: true })
const activeTab = ref(0);
const tabs = ref([
  { title: t('forms.tabs.product.list') },
  { title: t('forms.tabs.product.sell') },
  { title: t('forms.tabs.product.shipping') },
  { title: t('forms.tabs.product.donate') },
]);
/** Functions */
const onSwitch = (value) => {
  activeTab.value += value
  console.log(activeTab.value)
};
const onSave = () => {
  alert('... Saving under construction')
};
const onCancel = () => {
  alert('... Cancel under construction')
};
</script>
<template>
  <FrontPage>
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <ProductCreateUpload />
        </div>
        <div class="col-lg-7">
          <div class="shop-detail__info">
            <SubUrl />
            <h1 class="shop-detail__info--title bold d-none d-lg-block">{{ t('forms.headers.create.product') }}</h1>
            <div class="row">
              <div class="col-12">
                <div class="upload">
                    <!-- Mobile Version -->
                    <ProductCreateMobile />
                    <!-- Tabs -->
                    <ProductCreateTabs :tabs="tabs" :activeTab="activeTab" />
                    <!-- Tab Content in Form -->
                    <form class="upload__body desktop-tabs">
                      <!-- Dynamic Sections of Form -->
                      <ListingDetails v-if="activeTab == 0" />
                      <SellingDetails v-if="activeTab == 1" />
                      <ShippingDetails v-if="activeTab == 2" />
                      <MakeDonation v-if="activeTab == 3" />
                      <!-- Actions -->
                      <ActionsBar
                        :tabs="tabs"
                        :activeTab="activeTab"
                        @save="onSave"
                        @switch="onSwitch"
                        @cancel="onCancel"
                      />
                    </form>
                </div>
              </div>
              <div class="col-12">
                <ProductDraftsList />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </FrontPage>
</template>