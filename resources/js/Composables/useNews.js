/** Source */
import { ref } from 'vue'
/** Export Section */
export function useNews() {
    
    const news = ref([
        {
            id: 1,
            title: 'Elit Electronics Is Going To Joined Itemssphere With Most Highest Percentage OF CHARITY',
            description: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt nisi rem quo, nam atque tenetur dignissimos excepturi quas molestias, vero nulla alias. Nulla, quam natus. Nam, incidunt! Voluptate, debitis ducimus!',
            published_at: '01/06/2021',
            cover: '/assets/img/news.png',
        },
        {
            id: 2,
            title: 'Elit Electronics Is Going To Joined Itemssphere With Most Highest Percentage OF CHARITY',
            description: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt nisi rem quo, nam atque tenetur dignissimos excepturi quas molestias, vero nulla alias. Nulla, quam natus. Nam, incidunt! Voluptate, debitis ducimus!',
            published_at: '01/06/2021',
            cover: '/assets/img/news.png',
        },
        {
            id: 3,
            title: 'Elit Electronics Is Going To Joined Itemssphere With Most Highest Percentage OF CHARITY',
            description: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt nisi rem quo, nam atque tenetur dignissimos excepturi quas molestias, vero nulla alias. Nulla, quam natus. Nam, incidunt! Voluptate, debitis ducimus!',
            published_at: '01/06/2021',
            cover: '/assets/img/news.png',
        },
        {
            id: 4,
            title: 'Elit Electronics Is Going To Joined Itemssphere With Most Highest Percentage OF CHARITY',
            description: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt nisi rem quo, nam atque tenetur dignissimos excepturi quas molestias, vero nulla alias. Nulla, quam natus. Nam, incidunt! Voluptate, debitis ducimus!',
            published_at: '01/06/2021',
            cover: '/assets/img/news.png',
        },
    ])

    return { news }
}