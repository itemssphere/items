/** Source */
import { ref, computed } from 'vue'
export function useCategories() {
    /** Constants */
    const categories = ref([
        {
            id: 1,
            name: 'Agriculture & Food',
            url: '',
            parent_id: null,
        },
        {
            id: 2,
            name: 'Auto & Transportation',
            url: '',
            parent_id: null,
        },
        {
            id: 3,
            name: 'Clothing, Shoes & Accessories',
            url: '',
            parent_id: null,
        },
        {
            id: 4,
            name: 'Packaging, Advertising & Office',
            url: '',
            parent_id: null,
        },
        {
            id: 5,
            name: 'Agriculture & Food',
            url: '',
            parent_id: null,
        },
        {
            id: 6,
            name: 'Agriculture & Food',
            url: '',
            parent_id: 1,
        },
        {
            id: 7,
            name: 'Auto & Transportation',
            url: '',
            parent_id: 1,
        },
        {
            id: 8,
            name: 'Clothing, Shoes & Accessories',
            url: '',
            parent_id: 1,
        },
        {
            id: 9,
            name: 'Packaging, Advertising & Office',
            url: '',
            parent_id: 1,
        },
        {
            id: 10,
            name: 'Agriculture & Food',
            url: '',
            parent_id: 1,
        },
        {
            id: 11,
            name: 'Agriculture & Food',
            url: '',
            parent_id: 2,
        },
        {
            id: 12,
            name: 'Auto & Transportation',
            url: '',
            parent_id: 2,
        },
        {
            id: 13,
            name: 'Clothing, Shoes & Accessories',
            url: '',
            parent_id: 2,
        },
        {
            id: 14,
            name: 'Agriculture & Food',
            url: '',
            parent_id: 6,
        },
        {
            id: 15,
            name: 'Auto & Transportation',
            url: '',
            parent_id: 6,
        },
        {
            id: 16,
            name: 'Clothing, Shoes & Accessories',
            url: '',
            parent_id: 6,
        },
        {
            id: 17,
            name: 'Packaging, Advertising & Office',
            url: '',
            parent_id: 6,
        },
        {
            id: 18,
            name: 'Agriculture & Food',
            url: '',
            parent_id: 6,
        },
        {
            id: 19,
            name: 'Agriculture & Food',
            url: '',
            parent_id: 6,
        },
        {
            id: 20,
            name: 'Auto & Transportation',
            url: '',
            parent_id: 6,
        },
        {
            id: 21,
            name: 'Clothing, Shoes & Accessories',
            url: '',
            parent_id: 6,
        },
        {
            id: 22,
            name: 'Packaging, Advertising & Office',
            url: '',
            parent_id: 7,
        },
        {
            id: 23,
            name: 'Agriculture & Food',
            url: '',
            parent_id: 7,
        },
        {
            id: 24,
            name: 'Agriculture & Food',
            url: '',
            parent_id: 7,
        },
        {
            id: 25,
            name: 'Auto & Transportation',
            url: '',
            parent_id: 7,
        },
        {
            id: 26,
            name: 'Clothing, Shoes & Accessories',
            url: '',
            parent_id: 7,
        },
        {
            id: 27,
            name: 'Packaging, Advertising & Office',
            url: '',
            parent_id: 7,
        },
        {
            id: 28,
            name: 'Agriculture & Food',
            url: '',
            parent_id: 7,
        },
        {
            id: 29,
            name: 'Agriculture & Food',
            url: '',
            parent_id: 7,
        },
        {
            id: 30,
            name: 'Auto & Transportation',
            url: '',
            parent_id: 7,
        },
        {
            id: 31,
            name: 'Clothing, Shoes & Accessories',
            url: '',
            parent_id: 7,
        },
        {
            id: 32,
            name: 'Packaging, Advertising & Office',
            url: '',
            parent_id: 7,
        },
        {
            id: 33,
            name: 'Agriculture & Food',
            url: '',
            parent_id: 7,
        },
        {
            id: 34,
            name: 'Agriculture & Food',
            url: '',
            parent_id: 7,
        },
        {
            id: 35,
            name: 'Auto & Transportation',
            url: '',
            parent_id: 7,
        },
        {
            id: 36,
            name: 'Clothing, Shoes & Accessories',
            url: '',
            parent_id: 7,
        },
        {
            id: 37,
            name: 'Packaging, Advertising & Office',
            url: '',
            parent_id: 7,
        },
        {
            id: 38,
            name: 'Agriculture & Food',
            url: '',
            parent_id: 7,
        },
        {
            id: 39,
            name: 'Agriculture & Food',
            url: '',
            parent_id: 7,
        },
        {
            id: 40,
            name: 'Auto & Transportation',
            url: '',
            parent_id: 7,
        },
        {
            id: 41,
            name: 'Clothing, Shoes & Accessories',
            url: '',
            parent_id: 7,
        },
    ])
    /** computed */
    const parents = computed(function(){
        return categories.value.filter(category => category.parent_id == null)
    })
    const secondary = computed(function(){
        let parent_ids = parents.value.map(parent => parent.id)
        return categories.value.filter(category => parent_ids.includes(category.parent_id))
    })
    /** Functions */
    const getChildren = (parent) => {
        return categories.value.filter(category => category.parent_id == parent.id)
    }
    const hasChildren = (parent) => {
        return getChildren(parent).length
    }
return { categories, parents, secondary, getChildren, hasChildren }
}