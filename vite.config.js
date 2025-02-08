import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/main.css',
            ],
            refresh: true,
        }),
    ],
    server: {
        host: '0.0.0.0',
        port: 5173,
        hmr: {
            host: '192.168.30.121', // Substitua pelo domínio ou IP usado no navegador
            port: 5173, // Porta padrão do Vite
        },
        watch: {
            usePolling: true,
        },
    }
});
