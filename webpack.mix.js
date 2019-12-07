const assets = require('laravel-mix');

assets
    .setPublicPath(path.normalize('public/baconfy'))
    .options({processCssUrls: false})
    .js('resources/js/app.js', 'js/baconfy.js')
    .sass('resources/sass/app.scss', 'css/baconfy.css');
