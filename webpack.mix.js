const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix
  .styles(['resources/src/shared/css/fa5.css'], 'public/shared/css/fa5.css')
  .sass('resources/src/shared/scss/app.scss', 'public/shared/css/styles.css')
  .copyDirectory('resources/src/shared/img', 'public/shared/img')
  .scripts(['resources/src/shared/js/app.js'], 'public/shared/js/app.js')
  .version()
  .sourceMaps();
