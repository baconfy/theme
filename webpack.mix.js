const mix = require('laravel-mix');

require('laravel-mix-tailwind');

mix
    .sass('resources/assets/css/app.scss', 'dist/')
    .tailwind('./tailwind.config.js');

if (mix.inProduction()) {
    mix.version();
}