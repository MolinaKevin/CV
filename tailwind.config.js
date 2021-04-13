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
                paleta: {
                    primario:       '#F5FAFA',
                    secundario:     '#001946',
                    terciario:      '#E3A72F',
                    cuaternario:    '#025373',
                    quinario:       '#8AB0BF',
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
            backgroundColor: ['group-focus'],
        },
        animation: ['responsive', 'motion-safe', 'motion-reduce'],
        scrollbar: ['rounded']
    },

    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
        require('daisyui'),
        require('tailwind-scrollbar'),
    ],
};
