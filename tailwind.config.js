const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            colors: ({ colors }) => ({
                current: colors.current,
                transparent: colors.transparent,
                black: colors.black,
                white: colors.white,
                gray: colors.gray,
                'gray-background' : '#f7f8fc',
                'custom-blue': '#328af1',
                'custom-blue-hover': '#2879bd',
                'custom-yellow' : '#ffc73c',
                'custom-red' : '#ec454f',
                'custom-green' : '#1aab8b',
                'custom-purple' : '#8b60ed',
            }),
            maxWidth: {
                thousandPixel: '62.5rem', /* 1000px */
            },
            fontFamily: {
                sans: ['Open Sans', ...defaultTheme.fontFamily.sans],
            },
            fontSize: {
                xxs: ['0.625rem', { lineHeight: '1rem' }],
            }
        },
    },

    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/line-clamp')
    ],
};
