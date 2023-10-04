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
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
        },
        colors: {
            primary : '#16D76B',
            secondary : '#003344',
            extra :  '#007777'
        }
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
    
    corePlugins: {
       container: false,
    }
};
