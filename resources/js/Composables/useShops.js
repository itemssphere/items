/** Source */
import { ref } from 'vue'
/** Export Section */
export function useShops() {
    
    const shops = ref([
        {
            id: 1,
            cover: '/assets/img/alta.png',
        },
        {
            id: 2,
            cover: '/assets/img/ee.png',
        },
        {
            id: 3,
            cover: '/assets/img/zoomer.png',
        },
        {
            id: 4,
            cover: '/assets/img/samsung.png',
        },
        {
            id: 5,
            cover: '/assets/img/alta.png',
        },
    ])

    return { shops }
}