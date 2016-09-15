var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.sass('fe-main.scss',
             './public/assets/css/fe-main.css')
        .sass('be-main.scss',
              './public/assets/css/be-main.css')
        .scripts([
            'libs/sweetalert-dev.js',
            'libs/lity.js',
            ], './public/assets/js/libs.js')
        .styles( ['libs/sweetalert.css', 'libs/responsive.css','libs/lity.css', 'libs/manuscript.css'], './public/assets/css/libs.css')
        .version(['./public/assets/css/fe-main.css', './public/assets/js/libs.js', './public/assets/css/be-main.css']);
});
