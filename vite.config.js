import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import react from '@vitejs/plugin-react';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/css/pages/home.css',
                'resources/css/pages/memberCenter.css',
                'resources/css/pages/studentCases.css',
                'resources/css/pages/teacherLists.css',
                'resources/css/pages/aboutUs.css',
                'resources/css/pages/services.css',
                'resources/css/pages/contactUs.css',
                'resources/css/pages/faq.css',

                'resources/js/pages/memberCenter.jsx',
            ],
            refresh: true,
        }),
        react(),
    ],
});
