import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/icons/icons.css',
                'resources/css/pages/HomePage.css',
                'resources/css/pages/AboutPage.css',
                'resources/css/pages/ServicesPage.css',
                'resources/css/pages/ContactPage.css',
                'resources/css/pages/Authentication.css',
                'resources/css/pages/MainApp.css',
                'resources/css/pages/Dashboard.css',

                'resources/js/app.js'
            ],
            refresh: true,
        }),
        tailwindcss(),
    ],
});
