const mix = require('laravel-mix');

mix.copy('resources/assets/images', 'dist', false);

mix.postCss('resources/assets/css/app.css', 'dist', [
    require('postcss-import'),
    require('tailwindcss'),
    require('postcss-nested'),
    require('autoprefixer'),
]);

