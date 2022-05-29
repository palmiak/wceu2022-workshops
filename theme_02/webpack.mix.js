const mix = require('laravel-mix');
require('mix-tailwindcss');

mix.postCss('assets/css/app.css', 'dist/css')
    .tailwind();