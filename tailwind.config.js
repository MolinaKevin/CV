const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require('tailwindcss/colors');

module.exports = {
    purge: [
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            colors: {
                'light-blue': colors.lightBlue,
                cyan: colors.cyan,
                'green': {
                    light: '#6EE7B7',
                    DEFAULT: '#10B981',
                    dark: '#047857',
                },
                grey: {
                    darkest: '#1f2d3d',
                    dark: '#3c4858',
                    DEFAULT: '#c0ccda',
                    light: '#e0e6ed',
                    lighter: '#f9fafc',
                },
                red: colors.red,
            },
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            spacing: {
                128: '32rem',
            }
        },
    },

    variants: {
        extend: {
            textColor: ['responsive', 'hover', 'focus', 'group-hover'],
            opacity: ['disabled'],
            translate: ['motion-reduce'],
        },
    },

    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
        require('daisyui'),
    ],
};
