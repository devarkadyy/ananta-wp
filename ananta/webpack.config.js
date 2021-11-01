const path = require('path');
const miniCss = require('mini-css-extract-plugin');
const minify = require('optimize-css-assets-webpack-plugin');

module.exports = {
    mode: 'production',
    entry: './src/index.js',
    output: {
        path: path.resolve(__dirname, 'assets'),
        filename: 'js/main.js'
    },
    module: {
        rules: [{
            test:/\.(s*)css$/,
            use: [
                miniCss.loader,
                'css-loader',
                'sass-loader',
            ]
        }]
    },
    optimization: {
        minimizer: [
            new minify({})
        ],
    },
    plugins: [
        new miniCss({
            filename: '/css/main.css',
        }),
    ]
};