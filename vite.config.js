import { defineConfig } from 'vite';
import laravel, { refreshPaths } from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/override-css.scss',
                'resources/js/override-js.js',
            ],
            refresh: [
                ...refreshPaths,
                'app/Http/Livewire/**',
            ],
        }),
    ],
    build: {
        outDir: "./public/custom",
        emptyOutDir: true,
        sourcemap: true,
        rollupOptions: {
            output: {
                entryFileNames:"[name].js",
                chunkFileNames:"[name].js",
                assetFileNames:"[name].[ext]"
            }
        }
    }
});
