const mix = require('laravel-mix');

mix
  .styles(['resources/src/shared/css/fa5.css'], 'public/shared/css/fa5.css')
  .sass('resources/src/shared/scss/app.scss', 'public/shared/css/styles.css')
  .sass('resources/src/admin/scss/app.scss', 'public/manager/css/styles.css')
  .copyDirectory('resources/src/shared/img', 'public/shared/img')
  .scripts(['resources/src/shared/js/vue3.js'], 'public/shared/js/vue3.js')
  .scripts(['resources/src/shared/js/app.js'], 'public/shared/js/app.js')
  .scripts(['resources/src/admin/js/app.js'], 'public/manager/js/app.js')
  .version()
  .sourceMaps();
