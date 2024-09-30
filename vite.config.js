import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import { glob } from 'glob';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                ...glob.sync('resources/css/**/*.css'),
                ...glob.sync('resources/js/**/*.js'),
                ...glob.sync('resources/assets/css/**/*.css'),
                ...glob.sync('resources/assets/js/**/*.js'),
            ],
            refresh: true,
        }),
    ],
});
