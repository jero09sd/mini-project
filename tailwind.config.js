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
            strokeWidth: {
                '2': '2px',
                '1': '2px',
              },
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            opacity: {
                '67': '.67',
              },
              colors: {
                'blue': '#1fb6ff',
                'purple': '#7e5bef',
                'pink': '#ff49db',
                'orange': '#ff7849',
                'green': '#13ce66',
                'yellow': '#ffc82c',
                'gray-dark': '#273444',
                'gray': '#191919',
                'gray-light': '#d3dce6',
                'white': '#fff',
                'dark': '#000'
              },
              backgroundSize: {
                'auto': 'auto',
                'cover': 'cover',
                'contain': 'contain',
                '50%': '50%',
                '16': '4rem',
              }
        },
    },

    plugins: 
    [require('@tailwindcss/forms'),('@tailwindcss/line-clamp'),('@tailwindcss/aspect-ratio'),],
};
