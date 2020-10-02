const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
    purge: [
        './resources/views/**/*.blade.php',
        './resources/css/**/*.css',
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
                serif: ['Prata', ...defaultTheme.fontFamily.serif],
            },
            spacing: {
                '72': '18rem',
                '84': '21rem',
                '96': '24rem',
            }
        }
    },
    variants: {},
    plugins: [
        require('@tailwindcss/ui'),
        require('@tailwindcss/custom-forms'),
    ]
}
