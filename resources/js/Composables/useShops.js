/** Source */
import { ref } from 'vue'
/** Export Section */
export function useShops() {
    
    const shops = ref([
        {
            id: 1,
            name: 'alta',
            description: 'alta\'s description',
            cover: '/assets/img/alta.png',
            followers_count: 300,
            shares_count: 200,
        },
        {
            id: 2,
            name: 'elit electronics',
            description: 'elit electronics\' description',
            cover: '/assets/img/ee.png',
            followers_count: 300,
            shares_count: 200,
        },
        {
            id: 3,
            name: 'alta',
            description: 'alta\'s description',
            cover: '/assets/img/alta.png',
            followers_count: 300,
            shares_count: 200,
        },
        {
            id: 4,
            name: 'elit electronics',
            description: 'elit electronics\' description',
            cover: '/assets/img/ee.png',
            followers_count: 300,
            shares_count: 200,
        },
        {
            id: 5,
            name: 'alta',
            description: 'alta\'s description',
            cover: '/assets/img/alta.png',
            followers_count: 300,
            shares_count: 200,
        },
    ])

    return { shops }
}