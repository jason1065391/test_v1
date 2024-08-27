import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import react from '@vitejs/plugin-react';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/js/auth/account_check.js',
                'resources/css/layouts/footer.css',
                'resources/css/layouts/header.css',
                'resources/css/pages/loginregister.css',
                'resources/css/pages/home.css',
                'resources/css/pages/memberCenter.css',
                'resources/css/pages/studentCases.css',
                'resources/css/pages/teacherLists.css',
                'resources/css/pages/aboutUs.css',
                'resources/css/pages/services.css',
                'resources/css/pages/contactUs.css',
                'resources/css/pages/faq.css',
                'resources/js/pages/home.jsx',
                'resources/js/pages/memberCenter.jsx',
            ],
            refresh: true,
        }),
        react(),
    ],
    publicDir: 'public', // 確保 public 目錄中的靜態資源被正確處理
});
