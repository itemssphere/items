<script setup>
/** Source */
import { usePaymentMethods } from '@/Composables/Billing/usePaymentMethods'
/** Constants */
const { paymentMethods } = usePaymentMethods()
</script>
<!-- Mobile Payment Methods Picker's Template -->
<template>
  <div class="col-12 d-lg-none">
    <div class="footer__payment d-flex align-items-center">
      <h2 class="footer__payment--title regular">Payment method</h2>
      <div class="d-flex">
        <img class="footer__payment--icon"
          v-for="method in paymentMethods" :key="method.index"
          :src="method.icon"
          :alt="method.name"
        />
      </div>
    </div>
  </div>
</template>