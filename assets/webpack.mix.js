const mix = require('laravel-mix');

mix.sass('resources/assets/sass/app.scss', 'dist')
mix.copy('resources/assets/images', 'dist/img')
mix.js('resources/assets/js/app.js', 'dist')
