// vite.config.js
import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import react from '@vitejs/plugin-react';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/components/ReactTest.jsx', // 更新這裡的文件名
                'resources/js/auth/register.js', // 添加你的新 JavaScript 檔案
                'resources/js/auth/account_check.js'
            ],
            refresh: true,
        }),
        react(),
    ],
});

