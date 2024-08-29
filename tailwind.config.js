import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import AspectRatio from '@tailwindcss/aspect-ratio';
import Typography from '@tailwindcss/typography';
import LineClamp from '@tailwindcss/line-clamp';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [forms, AspectRatio, Typography, LineClamp],
};
