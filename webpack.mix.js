const mix = require('laravel-mix');

mix.setPublicPath('dist');

mix.sass('resources/assets/sass/vendor.scss', 'dist');
mix.sass('resources/assets/sass/app.scss', 'dist');

mix.js('resources/assets/js/vendor.js', 'dist');
mix.js('resources/assets/js/app.js', 'dist');