const mix = require('laravel-mix');

mix
    .js('resources/js/app.js', 'public/baconfy')
    .sass('resources/sass/app.scss', 'public/baconfy');
