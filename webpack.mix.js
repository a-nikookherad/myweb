const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |.js('resources/js/app.js', 'public/js').js('resources/js/script.js', 'public/js/script.js')
 */

mix.js('resources/js/script.js', 'public/js/script.js')
    .sass('resources/sass/style.scss', 'public/css/style.css');
mix.styles([
    'public/css/vendor/normalize.css',
    'public/css/vendor/videojs.css'
], 'public/css/all.css');