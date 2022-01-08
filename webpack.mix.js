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
    .combine(['resources/frontend/css/layerslider.css',
            'resources/frontend/css/fullwidth/skin.css',
            'resources/frontend/css/owl.carousel.css',
            'resources/frontend/css/jquery.fancybox.css',
            'resources/frontend/css/styles.css',
            'resources/frontend/css/color-blue.css'
        ], 'public/css/frontend/styles.css')
    .copyDirectory('resources/frontend/js', 'public/js/frontend')
    .copyDirectory('resources/images','public/images')
    .copyDirectory('resources/frontend/img','public/images/frontend')
    .copyDirectory('resources/icons','public/icons')
    .copyDirectory('resources/vendor','public/vendor')
    .sourceMaps();
