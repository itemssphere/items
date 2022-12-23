/** Source */
import { ref } from 'vue'
/** Constants */
export function usePaymentMethods () {
    const paymentMethods = ref([
        {
          name: 'visa',
          icon: '/assets/img/svg/footer-icon/visa.svg',
        },
        {
          name: 'master',
          icon: '/assets/img/svg/footer-icon/master.svg',
        },
        {
          name: 'cash',
          icon: '/assets/img/svg/footer-icon/cash.svg',
        },
    ])
    return { paymentMethods }
}
