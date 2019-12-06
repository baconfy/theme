const mix = require('laravel-mix');

mix
    .js('resources/js/app.js', 'resources/baconfy')
    .sass('resources/sass/app.scss', 'resources/baconfy')
    .copy('resources/images/*', 'resources/baconfy/images');
