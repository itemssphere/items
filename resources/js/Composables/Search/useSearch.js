/** Source */
import { useProducts } from '../useProducts'
import { useCharities } from '../useCharities'
import { useNews } from '../useNews'
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