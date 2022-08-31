/** Source */
import { ref, onMounted } from 'vue'

/** Export Statement */
export function useCategories(props) {

    /** Constants */
    const typeOf = ref('product')
    const data = ref([
        {
            id: 1,
            name: 'Agriculture & Food',
            url: '',
            parent_id: null,
            type: 'product',
        },
        {
            id: 2,
            name: 'Auto & Transportation',
            url: '',
            parent_id: null,
            type: 'product',
        },
        {
            id: 3,
            name: 'Clothing, Shoes & Accessories',
            url: '',
            parent_id: null,
            type: 'product',
        },
        {
            id: 4,
            name: 'Packaging, Advertising & Office',
            url: '',
            parent_id: null,
            type: 'product',
        },
        {
            id: 5,
            name: 'Agriculture & Food',
            url: '',
            parent_id: null,
            type: 'product',
        },
        {
            id: 6,
            name: 'Agriculture & Food',
            url: '',
            parent_id: 1,
            type: 'product',
        },
        {
            id: 7,
            name: 'Auto & Transportation',
            url: '',
            parent_id: 1,
            type: 'product',
        },
        {
            id: 8,
            name: 'Clothing, Shoes & Accessories',
            url: '',
            parent_id: 1,
            type: 'product',
        },
        {
            id: 9,
            name: 'Packaging, Advertising & Office',
            url: '',
            parent_id: 1,
            type: 'product',
        },
        {
            id: 10,
            name: 'Agriculture & Food',
            url: '',
            parent_id: 1,
            type: 'product',
        },
        {
            id: 11,
            name: 'Agriculture & Food',
            url: '',
            parent_id: 2,
            type: 'product',
        },
        {
            id: 12,
            name: 'Auto & Transportation',
            url: '',
            parent_id: 2,
            type: 'product',
        },
        {
            id: 13,
            name: 'Clothing, Shoes & Accessories',
            url: '',
            parent_id: 2,
            type: 'product',
        },
        {
            id: 14,
            name: 'Agriculture & Food',
            url: '',
            parent_id: 6,
            type: 'product',
        },
        {
            id: 15,
            name: 'Auto & Transportation',
            url: '',
            parent_id: 6,
            type: 'product',
        },
        {
            id: 16,
            name: 'Clothing, Shoes & Accessories',
            url: '',
            parent_id: 6,
            type: 'product',
        },
        {
            id: 17,
            name: 'Packaging, Advertising & Office',
            url: '',
            parent_id: 6,
            type: 'product',
        },
        {
            id: 18,
            name: 'Agriculture & Food',
            url: '',
            parent_id: 6,
            type: 'product',
        },
        {
            id: 19,
            name: 'Agriculture & Food',
            url: '',
            parent_id: 6,
            type: 'product',
        },
        {
            id: 20,
            name: 'Auto & Transportation',
            url: '',
            parent_id: 6,
            type: 'product',
        },
        {
            id: 21,
            name: 'Clothing, Shoes & Accessories',
            url: '',
            parent_id: 6,
            type: 'product',
        },
        {
            id: 22,
            name: 'Packaging, Advertising & Office',
            url: '',
            parent_id: 7,
            type: 'product',
        },
        {
            id: 23,
            name: 'Agriculture & Food',
            url: '',
            parent_id: 7,
            type: 'product',
        },
        {
            id: 24,
            name: 'Agriculture & Food',
            url: '',
            parent_id: 7,
            type: 'product',
        },
        {
            id: 25,
            name: 'Auto & Transportation',
            url: '',
            parent_id: 7,
            type: 'product',
        },
        {
            id: 26,
            name: 'Clothing, Shoes & Accessories',
            url: '',
            parent_id: 7,
            type: 'product',
        },
        {
            id: 27,
            name: 'Packaging, Advertising & Office',
            url: '',
            parent_id: 7,
            type: 'product',
        },
        {
            id: 28,
            name: 'Agriculture & Food',
            url: '',
            parent_id: 7,
            type: 'product',
        },
        {
            id: 29,
            name: 'Agriculture & Food',
            url: '',
            parent_id: 7,
            type: 'product',
        },
        {
            id: 30,
            name: 'Auto & Transportation',
            url: '',
            parent_id: 7,
            type: 'product',
        },
        {
            id: 31,
            name: 'Clothing, Shoes & Accessories',
            url: '',
            parent_id: 7,
            type: 'product',
        },
        {
            id: 32,
            name: 'Packaging, Advertising & Office',
            url: '',
            parent_id: 7,
            type: 'product',
        },
        {
            id: 33,
            name: 'Agriculture & Food',
            url: '',
            parent_id: 7,
            type: 'product',
        },
        {
            id: 34,
            name: 'Agriculture & Food',
            url: '',
            parent_id: 7,
            type: 'product',
        },
        {
            id: 35,
            name: 'Auto & Transportation',
            url: '',
            parent_id: 7,
            type: 'product',
        },
        {
            id: 36,
            name: 'Clothing, Shoes & Accessories',
            url: '',
            parent_id: 7,
            type: 'product',
        },
        {
            id: 37,
            name: 'Packaging, Advertising & Office',
            url: '',
            parent_id: 7,
            type: 'product',
        },
        {
            id: 38,
            name: 'Agriculture & Food',
            url: '',
            parent_id: 7,
            type: 'product',
        },
        {
            id: 39,
            name: 'Agriculture & Food',
            url: '',
            parent_id: 7,
            type: 'product',
        },
        {
            id: 40,
            name: 'Auto & Transportation',
            url: '',
            parent_id: 7,
            type: 'product',
        },
        {
            id: 41,
            name: 'Clothing, Shoes & Accessories',
            url: '',
            parent_id: 7,
            type: 'product',
        },
        {
            id: 41,
            name: 'Clothing, Shoes & Accessories',
            url: '',
            parent_id: 7,
            type: 'product',
        },
        {
            id: 42,
            name: 'Social Category 1',
            url: '',
            parent_id: null,
            type: 'social',
        },
        {
            id: 43,
            name: 'Social Category 2',
            url: '',
            parent_id: null,
            type: 'social',
        },
        {
            id: 44,
            name: 'Social Category 3',
            url: '',
            parent_id: null,
            type: 'social',
        },
        {
            id: 45,
            name: 'Social Category 4',
            url: '',
            parent_id: null,
            type: 'social',
        },
        {
            id: 46,
            name: 'Product Category 4',
            url: '',
            parent_id: 35,
            type: 'product',
        },
        {
            id: 46,
            name: 'Test',
            url: '',
            parent_id: null,
            type: 'product',
        },
        {
            id: 47,
            name: 'Test',
            url: '',
            parent_id: null,
            type: 'product',
        },
        {
            id: 48,
            name: 'Test',
            url: '',
            parent_id: null,
            type: 'product',
        },
        {
            id: 49,
            name: 'Test',
            url: '',
            parent_id: null,
            type: 'product',
        },
        {
            id: 50,
            name: 'Test',
            url: '',
            parent_id: null,
            type: 'product',
        },
        {
            id: 51,
            name: 'Test',
            url: '',
            parent_id: null,
            type: 'product',
        },
        {
            id: 52,
            name: 'Test',
            url: '',
            parent_id: null,
            type: 'product',
        },
        {
            id: 53,
            name: 'Test',
            url: '',
            parent_id: null,
            type: 'product',
        },
        {
            id: 54,
            name: 'Test',
            url: '',
            parent_id: null,
            type: 'product',
        }
    ])

    const active = ref([])
    const categories = ref(data.value.filter((category) => { return category.type == typeOf.value }))

    /**
     * 
     * @param {Object} parent 
     * @returns {Array}
     */
    const getChildren = (parent) => {
        return categories.value.filter(category => category.parent_id == parent.id)
    }
    /**
     * 
     * @param {Object} parent 
     * @returns {Boolean}
     */
    const hasChildren = (parent) => {
        return ( getChildren(parent).length )
    }
    /**
     * 
     * @param {Object} array 
     * @returns {Void}
     */
    const setActive = (array) => {
        active.value = array
    }

    /**
     * 
     * @param {Object} obj 
     * @returns {Object}
     */
    const getParent = (obj) => {
        return (hasParent(obj)) ? categories.value.filter( item => item.id == obj.parent_id )[0] : obj
    }
    /**
     * 
     * @param {Object} obj 
     * @returns {Array}
     */
    const getParents = (obj) => {
        return categories.value.filter( item => item.parent_id == getParent(obj).parent_id )
    }
    /**
     * 
     * @param {Object} obj 
     * @returns {Boolean}
     */
    const hasParent = (obj) => {
        return ( obj?.parent_id != null )
    }

    /** HOOCKS */
    onMounted(() => {
        /** Set Parent Categories as Active */
        setActive(categories.value.filter( category => category.parent_id == null ))
    })

    /** RETURNS */
    return { 
        active,
        categories,
        getChildren,
        getParent,
        getParents,
        hasParent,
        hasChildren,
        setActive
    }
}