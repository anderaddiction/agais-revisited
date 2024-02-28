import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/sass/app.scss",
                "resources/js/app.js",
                "resources/js/agais.js",
                "resources/js/forms.js",
                "resources/js/dropdowns.js",
                "resources/js/choices.js",
                "resources/js/yajra.js",
            ],
            refresh: true,
        }),
    ],
});
