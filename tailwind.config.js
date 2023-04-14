const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        colors: {
            'red': '#D90101',
            'white': '#FEFEFF',
            'black': '#000001',
            'gray': '#040404',
        },
        extend: {
            fontFamily: {
                sans: ['Helvetica', 'Arial', 'sans-serif'],
            },
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
