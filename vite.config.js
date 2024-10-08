import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    publicDir: 'public',
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    build: {
        manifest: 'manifest.json',
        rollupOptions: {
            input: {
                app: 'resources/js/app.js',
                appStyles: 'resources/css/app.css',
                index: 'resources/js/index.js',
                indexStyles: 'resources/css/index.css',
            },
        }
    },
});
