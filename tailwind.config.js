const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    mode: 'jit',
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                main: ['Alegreya', ...defaultTheme.fontFamily.serif],
            },
        },
        screens: {
            'xs': '414px',
            ...defaultTheme.screens,
        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
