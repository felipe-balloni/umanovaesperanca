const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require('tailwindcss/colors')

module.exports = {
    mode: 'jit',
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],
    theme: {
        container: {
            center: true,
            padding: {
                DEFAULT: '1rem',
                lg: '2rem',
            },
        },
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
                rancho: ['Rancho', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                sky: colors.sky,
                orange: colors.orange,
                'top': '#aadbe4',
                'footer': '#008a53',
            },
            backgroundSize: {
                '50%': '50%',
            },
        },
    },
    variants: {
        extend: {
            opacity: ['disabled'],
        },
    },

    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/aspect-ratio'),
    ],
};
