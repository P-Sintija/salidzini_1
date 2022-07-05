const mix = require('laravel-mix');
const path = require("path");

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

mix.webpackConfig({
    plugins: [
    ],
    resolve: {
        alias: {
            '@adminModules': path.resolve(__dirname, 'resources/js/admin/modules')
        },
    },
});

mix.js('resources/js/admin/app.ts', 'public/js/admin')
    .vue()
    .postCss('resources/css/admin/app.css', 'public/css/admin', [
        //
    ]);
