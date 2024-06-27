import forms from "@tailwindcss/forms";
import typography from "@tailwindcss/typography";
import preset from './vendor/filament/support/tailwind.config.preset'

/* @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./vendor/protonemedia/laravel-splade/lib/**/*.vue",
        "./vendor/protonemedia/laravel-splade/resources/views/**/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./resources/js/**/*.vue",
        './app/Filament/**/*.php',
        './resources/views/filament/**/*.blade.php',
        './vendor/filament/**/*.blade.php',
        // "./app/Forms/*.php",
        // "./app/Tables/*.php",
    ],
preset: [preset],
    theme: {
        extend: {},
    },

    plugins: [forms, typography],
};
