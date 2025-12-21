import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/scss/front/front.scss",
                "resources/js/front/front.js",
                "resources/scss/portfolio/portfolio.scss",
                "resources/js/portfolio/portfolio.js",
            ],
            refresh: true,
        }),
    ],
    resolve: {
        alias: {
            vue: "vue/dist/vue.esm-bundler.js",
        },
    },
    build: {
        chunkSizeWarningLimit: 100000000,
    },
});
