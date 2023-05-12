import laravel from 'laravel-vite-plugin'
import { defineConfig } from 'vite'
import { resolve, dirname } from 'node:path'
import { fileURLToPath } from 'url'
import vue from '@vitejs/plugin-vue'
import { vueI18n } from '@intlify/vite-plugin-vue-i18n'

export default defineConfig({
    server: {
        // host: 'items.magischer.de',
        // host: '192.168.56.56',
        // hmr: { host: '127.0.0.1' },
        watch: { usePolling: true },
    },
    plugins: [
        laravel({
            input: ['resources/js/app.js'],
        }),
        vue({
            template: {
                transformAssetUrls: {
                    base: null,
                    includeAbsolute: false,
                },
            },
        }),
        vueI18n({
          include: resolve(dirname(fileURLToPath(import.meta.url)), './resources/locales/**'),
          compositionOnly: false,
          runtimeOnly: false,
        })
    ],
})
