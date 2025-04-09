import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/icons/icons.css',
                'resources/css/pages/compiled/HomePage.css',
                'resources/css/pages/compiled/AboutPage.css',
                'resources/css/pages/compiled/ServicesPage.css',
                'resources/css/pages/compiled/ContactPage.css',
                'resources/css/pages/compiled/Authentication.css',
                'resources/css/pages/compiled/MainApp.css',
                'resources/css/pages/compiled/Dashboard.css',

                'resources/js/app.js'
            ],
            refresh: true,
        }),
        tailwindcss(),
    ],
});
