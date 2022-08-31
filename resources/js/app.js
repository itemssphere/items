/** Styles */
import '../css/style/fonts.css'
import '../css/style/grid.css'
import '@splidejs/splide/css'
import '@splidejs/vue-splide/css'
import '../css/style/style.scss'
// import './bootstrap'
// import '../css/app.css'

/** Source */
import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/inertia-vue3'
import { InertiaProgress } from '@inertiajs/progress'
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers'
import { ZiggyVue } from '../../vendor/tightenco/ziggy/dist/vue.m'
import { createI18n } from 'vue-i18n'
import { createStore } from 'vuex'

/*
 * The i18n resources in the path specified in the plugin `include` option can be read
 * as vue-i18n optimized locale messages using the import syntax
 */
import en from '../locales/en.json'
import ge from '../locales/ge.json'

/** Create a new store instance */ 
const store = createStore({
  state () {
    return {
        count: 0,
    }
  },
  mutations: {
    increment (state) {
      state.count++
    }
  }
})

const appName = window.document.getElementsByTagName('title')[0]?.innerText || 'Laravel'

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) => resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue')),
    setup({ el, app, props, plugin }) {
        const i18n = createI18n({
          legacy: false,
          locale: props.initialPage.props.locale,
          messages: { en, ge, }
        })

        return createApp({ render: () => h(app, props) })
          .use(i18n)
          .use(plugin)
          .use(ZiggyVue, Ziggy)
          .mount(el)
    },
});

InertiaProgress.init({ color: '#4B5563' })