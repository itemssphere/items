/** Source */
import { ref } from 'vue'
/** Export Statement */
export function useSocials(){
    /** Constants */
    const socials = ref([
        {
            id: 1,
            title: "Justice for Jake Blake",
            description: "On August 23rd my son was shot multiple times in the back by a …",
            goal: 42800,
            raised: 18500,
            currency: {
                code: 'USD',
                symbol: '$',
            },
            sum_follows: 400,
            sum_likes: 300,
            sum_shares: 200,
            cover: '/assets/img/Product1.png',
        },
        {
            id: 2,
            title: "Justice for Jake Blake",
            description: "On August 23rd my son was shot multiple times in the back by a …",
            goal: 20000,
            raised: 10000,
            currency: {
                code: 'USD',
                symbol: '$',
            },
            sum_follows: 1212,
            sum_likes: 1534,
            sum_shares: 321,
            cover: '/assets/img/Product1.png',
        },
        {
            id: 3,
            title: "Justice for Jake Blake",
            description: "On August 23rd my son was shot multiple times in the back by a …",
            goal: 21000,
            raised: 14000,
            currency: {
                code: 'USD',
                symbol: '$',
            },
            sum_follows: 124,
            sum_likes: 651,
            sum_shares: 503,
            cover: '/assets/img/Product1.png',
        },
        {
            id: 4,
            title: "Justice for Jake Blake",
            description: "On August 23rd my son was shot multiple times in the back by a …",
            goal: 45000,
            raised: 35000,
            currency: {
                code: 'USD',
                symbol: '$',
            },
            sum_follows: 32,
            sum_likes: 69,
            sum_shares: 56,
            cover: '/assets/img/Product1.png',
        },
        {
            id: 5,
            title: "Justice for Jake Blake",
            description: "On August 23rd my son was shot multiple times in the back by a …",
            goal: 123000,
            raised: 122000,
            currency: {
                code: 'USD',
                symbol: '$',
            },
            sum_follows: 3540,
            sum_likes: 40,
            sum_shares: 67,
            cover: '/assets/img/Product1.png',
        },
        {
            id: 6,
            title: "Justice for Jake Blake",
            description: "On August 23rd my son was shot multiple times in the back by a …",
            goal: 5000,
            raised: 4000,
            currency: {
                code: 'USD',
                symbol: '$',
            },
            sum_follows: 654,
            sum_likes: 1800,
            sum_shares: 2300,
            cover: '/assets/img/Product1.png',
        },
    ])

    return { socials }
}