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
                'resources/css/pages/studentCases.css',
                'resources/css/pages/teacherLists.css',
                'resources/css/pages/memberCenter.css',
                
                'resources/js/app.js',
                'resources/js/pages/home.js'
            ],
            refresh: true,
        }),
        react(),
    ],
});

