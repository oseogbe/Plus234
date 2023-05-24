const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            screens: {
                'sm': '576px',
            },
            colors: {
                primary: '#4ADE80',
                secondary: '#FFBF00',
                myPurple: '#9C67E8',
                myGray: '#6B7280'
            },
        },
    },

    plugins: [
        require('@tailwindcss/forms'),
        require('daisyui')
    ],
};
