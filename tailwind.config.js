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
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
        colors: {
            primary: '#F9C115',
            secondary: '#D71C50',
            primaryHover: '#FFE6A1',
            secondaryHoover: '#C41E51',
            grayP: '#7C7C7C',
            greenCanvas: '#2DFA53',
            redError: '#FF1818',
            whiteCanvas: '#F7F7F7',
            grayCanvas: '#EEEEEE',
            orangeCanvas: '#FF8400',
            blackCanvas: '#393E46',
            'white': '#ffffff',
            'purple': '#3f3cbb',
            'midnight': '#121063',
            'metal': '#565584',
            'tahiti': '#3ab7bf',
            'silver': '#ecebff',
            'bubble-gum': '#ff77e9',
            'bermuda': '#78dcca',
        }
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
