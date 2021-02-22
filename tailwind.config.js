const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
    purge: [
        './resources/**/*.blade.php',
        './resources/**/*.vue',
        './resources/**/*.js',
    ],
    darkMode: false, // or 'media' or 'class'
    theme: {
        extend: {
            fontFamily: {
                serif: ['Prata', ...defaultTheme.fontFamily.serif],
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            spacing: {
                '72': '18rem',
                '84': '21rem',
                '96': '24rem',
            },
            colors: {
                primary: '#C94747',
                gray: {
                    '100': '#E6E6E6',
                    '200': '#CCCCCC',
                    '300': '#B3B3B3',
                    '400': '#999999',
                    '500': '#808080',
                    '600': '#666666',
                    '700': '#4D4D4D',
                    '800': '#333333',
                    '900': '#1A1A1A',
                }
            }
        },
    },
    variants: {
        extend: {},
    },
    plugins: [
        require('@tailwindcss/forms'),
    ]
}
