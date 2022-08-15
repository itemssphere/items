/** Source */
import { ref } from 'vue'
/** Export Section */
export function useHashtags() {
    
    const hashtags = ref([
        {
            id: 1,
            title: 'Christmas & Winter',
            image: '/assets/img/main_banner.png',
        },
        {
            id: 2,
            title: 'Christmas & Winter',
            image: '/assets/img/watch.png',
        },
        {
            id: 3,
            title: 'Christmas & Winter',
            image: '/assets/img/watch.png',
        },
        {
            id: 4,
            title: 'Christmas & Winter',
            image: '/assets/img/headphone.png',
        },
        {
            id: 5,
            title: 'Christmas & Winter',
            image: '/assets/img/watch.png',
        },
        {
            id: 6,
            title: 'Christmas & Winter',
            image: '/assets/img/watch.png',
        },
        {
            id: 7,
            title: 'Christmas & Winter',
            image: '/assets/img/watch.png',
        },
    ])

    return { hashtags }
}