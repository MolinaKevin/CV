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
                gray: {
                    darkest: '#1f2d3d',
                    dark: '#3c4858',
                    DEFAULT: '#c0ccda',
                    light: '#e0e6ed',
                    lighter: '#f9fafc',
                    100: '#eeeae6',
                },
                paleta: {
                    primario:       '#001946',
                    secundario:     '#F5FAFA',
                    terciario:      '#001946',
                    cuaternario:    '#F55310',
                    quinario:       '#8AB0BF',
                },
                theme: {
                    fondo: '#F5FAFA',
                    texto: '#025373',
                    titulo: '#001946',
                    hover: '#001946',
                    //iconos: '#8AB0BF',
                    iconos: '#D4B629',
                    //iconos: '#E3A72F',
                    menu: '#024959',
                    // bgsec: '#025373',
                    bgsec: '#14445C',
                    textsec: '#F5FAFA',
                    help: '#8AB0BF',
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
