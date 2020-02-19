const mix = require('laravel-mix');

mix
    .sass('sass/app.scss', 'dist')
    .copy('images', 'dist/img')
    .js('js/app.js', 'dist')
    .version()