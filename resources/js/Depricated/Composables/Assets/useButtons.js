/** Source */
import { ref } from 'vue'
/** Export Section */
export function useButtons(){
    /** Constants */
    const sliderButtons = ref([
        {
            name: 'prev',
            icon: '/assets/img/svg/slider-prev.svg',
        },
        {
            name: 'next',
            icon: '/assets/img/svg/slider-next.svg',
        },
    ])

    return { sliderButtons }
}