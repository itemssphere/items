/** Source */
import { useProducts } from '../Data/useProducts'
import { useCharities } from '../Data/useCharities'
import { useNews } from '../Data/useNews'
/** Export Statement */
export function useSearch() {
    /** Constants */
    const { products } = useProducts()
    const { charities } = useCharities()
    const { news } = useNews()

    /** Functions */
    const search = (searchKey) => {
        return {
            'products': products.filter((item) => { return item.name.includes(searchKey) }),
            'charities': charities.value.filter((item) => { return item.title.includes(searchKey) }),
            'news': news.value.filter((item) => { return item.title.includes(searchKey) })
        }
    }

    return { search }
}