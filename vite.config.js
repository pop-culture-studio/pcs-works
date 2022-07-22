import {defineConfig} from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: {
                css: 'resources/css/app.css',
                app: 'resources/js/app.js',
            },
            refresh: true,
        }),
    ],
    build: {
        rollupOptions: {
            output: {
                entryFileNames: 'assets/[name].js',
                assetFileNames: 'assets/[name][extname]',
            },
        },
    },
});
