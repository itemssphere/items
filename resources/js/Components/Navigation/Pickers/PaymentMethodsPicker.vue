<script setup>
/** Source */
import { usePaymentMethods } from '@/Composables/Billing/usePaymentMethods'
/** Constants */
const { paymentMethods } = usePaymentMethods()
</script>
<!-- Mobile Payment Methods Picker's Template -->
<template>
  <div class="d-flex">
    <img class="footer__payment--icon"
      v-for="method in paymentMethods" :key="method.index"
      :src="method.icon"
      :alt="method.name"
    />
  </div>
</template>