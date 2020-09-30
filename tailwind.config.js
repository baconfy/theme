const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
    purge: [
        './resources/views/**/*.blade.php',
        './resources/css/**/*.css',
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Inter var', ...defaultTheme.fontFamily.sans],
                serif: ['Prata', ...defaultTheme.fontFamily.sans],
            },
        }
    },
    variants: {},
    plugins: [
        require('@tailwindcss/ui'),
        require('@tailwindcss/custom-forms'),
    ]
}
