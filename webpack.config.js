var Encore = require('@symfony/webpack-encore');

Encore
    // the project directory where compiled assets will be stored
    .setOutputPath('public/bundles/admin/build/')
    // the public path used by the web server to access the previous directory
    .setPublicPath('/bundles/admin/build')
    .cleanupOutputBeforeBuild()
    .enableSourceMaps(!Encore.isProduction())
    // uncomment to create hashed filenames (e.g. app.abc123.css)
    // .enableVersioning(Encore.isProduction())

     //uncomment to define the assets of the project
     .addEntry('js/app', './assets/bundles/admin/js/app.js')
     .addStyleEntry('css/app', './assets/bundles/admin/css/app.sass')

    // uncomment if you use Sass/SCSS files
     .enableSassLoader()

    // uncomment for legacy applications that require $/jQuery as a global variable
    // .autoProvidejQuery()
;

module.exports = Encore.getWebpackConfig();
