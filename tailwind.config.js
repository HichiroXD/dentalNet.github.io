import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                'ubuntu': ['Ubuntu', 'sans-serif'],
              },
              colors: {
                'my-blue': '#003399',
                'my-skyblue': '#00C2DD',
                'my-gray': '#F3F4F6',
              },
        },
    },

    plugins: [forms, typography],
};
