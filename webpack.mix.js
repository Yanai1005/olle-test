const mix = require('laravel-mix');
const workboxPlugin = require('workbox-webpack-plugin');

mix.webpackConfig({
    plugins: [
        new workboxPlugin.InjectManifest({
            swSrc: 'public/sw-offline.js',
            swDest: 'sw.js',
            importsDirectory: 'service-worker'
        })
    ]
});
