<script setup>
/** Source */
import { useI18n } from 'vue-i18n'
/** Components */
import FooterLogo from '../FooterLogo.vue'
/** Constants */
const { locale, t } = useI18n({
      inheritLocale: true
    })
</script>
<!-- Download App Sectopm Template -->
<template>
  <FooterLogo />
  <p class="footer__content--status regular">
    {{ t("components.heading.title") }}
  </p>
  <div class="footer__content--app d-flex">
    <img src="/assets/img/applestore.png" alt="" />
    <img src="/assets/img/googleplay.png" alt="" />
  </div>
</template>