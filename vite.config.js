import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
                'resources/css/app.css',
                'resources/css/home.css',
                'resources/js/preguntas.js',
                'resources/css/preguntas.css',
                'resources/css/contact.css',
                'resources/css/requisitosAfiliacion.css',
                'resources/css/requisitosAfiliacionCompensacion.css',
                'resources/css/tarifas.css',
                'resources/css/solicitaAqui.css',
                'resources/css/appPasajero.css',
                'resources/css/planillaindex.css'
            ],
            refresh: true,
        }),
    ],
});
