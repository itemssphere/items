/** Source */
import { ref } from 'vue'
export function useBanners() {
    /** Constants */
    const banners = ref([
        {
            name: 'banner1',
            icon: '/assets/img/mini-banner1.png',
        },
        {
            name: 'banner2',
            icon: '/assets/img/mini-banner2.png',
        },
        {
            name: 'banner3',
            icon: '/assets/img/mini-banner3.png',
        },
        {
            name: 'banner3',
            icon: '/assets/img/mini-banner3.png',
        },
    ])
    return { banners }
}