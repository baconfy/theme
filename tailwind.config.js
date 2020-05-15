module.exports = {
  purge: [
    './resources/assets/css/**/*.css',
  ],
  theme: {
    extend: {}
  },
  variants: {},
  plugins: [
    require('@tailwindcss/custom-forms')
  ]
}
