const mix = require('laravel-mix');

require('laravel-mix-tailwind');

mix.js('assets/js/app.js', 'dist/js')
    .postCss('assets/css/app.css', 'dist/css')
    .tailwind('./tailwind.config.js');
