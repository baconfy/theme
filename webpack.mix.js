const mix = require('laravel-mix');

require('laravel-mix-tailwind');

mix
    .postCss('resources/assets/css/app.css', 'dist/')
    .tailwind('./tailwind.config.js');

if (mix.inProduction()) {
    mix.version();
}