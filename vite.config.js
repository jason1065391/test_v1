// vite.config.js
import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import react from '@vitejs/plugin-react';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/ReactTest.jsx', // 更新這裡的文件名
            ],
            refresh: true,
        }),
        react(),
    ],
});

