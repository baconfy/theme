const mix = require('laravel-mix');

mix.setPublicPath('dist');

mix.autoload({jquery: ['$', 'window.jQuery']});

mix.sass('resources/assets/sass/app.scss', 'dist');