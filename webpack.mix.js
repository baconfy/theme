const mix = require('laravel-mix');

require('laravel-mix-tailwind');

mix
    .copy('resources/assets/images', 'dist/img')
    .js('resources/assets/js/app.js', 'dist')
    .postCss('resources/assets/css/app.css', 'dist')
    .tailwind('./tailwind.config.js')
