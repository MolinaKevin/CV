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
                    //primario:      '#E3A72F',
                    primario:       '#CAAF7A',
                    //primario:       '#000000',
                    //secundario:     '#001946',
                    secundario:     '#270140',
                    //secundario:     '#23A3AE',
                    //terciario:      '#025373',
                    terciario:      '#F5CE35',
                    //terciario:      '#93C8D1',
                    //cuaternario:    '#8AB0BF',
                    cuaternario:    '#F55310',
                    //cuaternario:    '#CBCBCB',
                    //quinario:       '#F5FAFA',
                    quinario:       '#487FB1',
                    //quinario:       '#FEFEFE',
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
        animation: ['responsive', 'motion-safe', 'motion-reduce']
    },

    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
        require('daisyui'),
    ],
};
