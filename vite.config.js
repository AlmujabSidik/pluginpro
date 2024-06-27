import { defineConfig } from "vite";
import laravel, {refreshPaths} from "laravel-vite-plugin";
import vue from "@vitejs/plugin-vue";

export default defineConfig({
    plugins: [
        laravel({
            input: "resources/js/app.js",
            ssr: "resources/js/ssr.js",
            refresh: [
                ...refreshPaths,
            ],
        }),
        vue({
            template: {
                transformAssetUrls: {
                    base: null,
                    includeAbsolute: false,
                },
            },
        }),
    ],
        'tailwindcss/nesting': 'postcss-nesting',
    ssr: {
        noExternal: ["vue", "@protonemedia/laravel-splade"]
    },
});
