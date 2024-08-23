// vite.config.js
import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import react from '@vitejs/plugin-react';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/pages/home.css',
                'resources/js/app.js',  // 如果有 JavaScript 入口文件，也可以在這裡指定
                'resources/js/pages/home.js'
            ],
            refresh: true,
        }),
        react(),
    ],
});

