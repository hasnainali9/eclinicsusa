const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .combine(['resources/css/style.css','resources/css/perfect-scrollbar.css'], 'public/css/styles.css')
    .copyDirectory('resources/images','public/images')
    .copyDirectory('resources/icons','public/icons')
    .copyDirectory('resources/vendor','public/vendor')
    .sourceMaps();
