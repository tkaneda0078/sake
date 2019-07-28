var Encore = require('@symfony/webpack-encore')

if (!Encore.isRuntimeEnvironmentConfigured()) {
  Encore.configureRuntimeEnvironment(process.env.NODE_ENV || 'dev')
}

Encore
  .setOutputPath('public/build/')
  .setPublicPath('/build')
  .addEntry('app', './assets/js/app.js')
  .addEntry('uikit', './assets/js/uikit.min.js')
  .addEntry('uikitIcons', './assets/js/uikit-icons.min.js')
  .addEntry('jqueryJapanMap', './assets/js/jquery.japan-map.js')
  .addEntry('japanMap', './assets/js/japan-map.js')

  .splitEntryChunks()

  .enableSingleRuntimeChunk()

  .cleanupOutputBeforeBuild()
  .enableBuildNotifications()
  .enableSourceMaps(!Encore.isProduction())
  .enableVersioning(Encore.isProduction())

  .configureBabel(() => {}, {
    useBuiltIns: 'usage',
    corejs: 3
  })

  .autoProvidejQuery()


module.exports = Encore.getWebpackConfig()
