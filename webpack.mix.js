const mix = require('laravel-mix');

mix.copy('resources/images', 'dist');

mix
    .js("resources/js/app.js", "dist/js")
    .postCss("resources/css/app.css", "dist/css", [
        require("tailwindcss"),
    ]);