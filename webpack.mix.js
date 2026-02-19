// webpack.mix.js

const os = require('os');
const path = require('path');

// Caminho para os certificados do Local by WPEngine
const certPath = path.join(
  os.homedir(),
  'AppData/Roaming/Local/run/router/nginx/certs' // Windows
  // 'Library/Application Support/Local/run/router/nginx/certs' // Mac
);

let mix = require('laravel-mix');

mix
  .setPublicPath('dist')
  .setResourceRoot('./')
  .autoload({
    jquery: ['$', 'window.jQuery']
  })
  .js('assets/js/main.js', 'dist')
  .sass('assets/sass/main.sass', 'dist')
  .sass('assets/sass/admin-login.sass', 'dist')

  .disableNotifications()
  .browserSync({
    proxy: "https://stricker-shop.digid",
    host: "stricker-shop.digid",
    open: "external",
    port: 3000,
    ws: true,
    https: {
      key: path.join(certPath, 'stricker-shop.digid.key'),
      cert: path.join(certPath, 'stricker-shop.digid.crt'),
    },
    files: ["./**/*.php", "./dist/*.js", "./dist/*.css"]
  });

if (!mix.inProduction()) {
  mix
    .webpackConfig({
      devtool: "source-map"
    })
    .sourceMaps();
}

if (mix.inProduction()) {
  mix.version();
}