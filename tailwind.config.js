module.exports = {
    purge: [
        './resources/views/**/*.blade.php',
        './resources/css/**/*.css',
    ],
    theme: {
        extend: {
            colors: {
                primary: '#C94748',
            },
            sizes: {
                navigation: '300px'
            }
        }
    },
    variants: {},
    plugins: [
        require('@tailwindcss/custom-forms')
    ]
}
