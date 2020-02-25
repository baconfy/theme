const mix = require('laravel-mix');

mix
    .sass('assets/sass/app.scss', 'dist')
    .copy('assets/images', 'dist/img')
    .js('assets/js/app.js', 'dist')