/** Source */
import { ref, computed } from 'vue'
export function useBanners() {
    /** Constants */
    const banners = ref([
        {
            id: 1,
            title: 'banner1',
            cover: '/assets/img/main_banner.png',
            section: 'mini',
        },
        {
            id: 2,
            title: 'banner2',
            cover: '/assets/img/mini-banner2.png',
            section: 'mini',
        },
        {
            id: 3,
            title: 'banner3',
            cover: '/assets/img/mini-banner3.png',
            section: 'mini',
        },
        {
            id: 4,
            title: 'banner3',
            cover: '/assets/img/mini-banner3.png',
            section: 'mini',
        },
        {
            id: 5,
            title: 'banner3',
            cover: '/assets/img/main_banner.png',
            section: 'main',
        },
        {
            id: 6,
            title: 'banner3',
            cover: '/assets/img/slider-banner.png',
            section: 'main',
        },
    ])

    /** Computed */
    const main_banners = computed(() => {
        return banners.value.filter((banner) => {
            return banner.section == 'main'
        })
    })
    const mini_banners = computed(() => {
        return banners.value.filter((banner) => {
            return banner.section == 'mini'
        })
    })
    return { banners, main_banners, mini_banners }
}