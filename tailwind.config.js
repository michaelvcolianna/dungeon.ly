const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Alegreya Sans', ...defaultTheme.fontFamily.sans],
                serif: ['Alegreya', ...defaultTheme.fontFamily.serif],
                mono: ['Overpass Mono', ...defaultTheme.fontFamily.mono],
            },
        },
        screens: {
            'xs': '480px',
            ...defaultTheme.screens,
        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
