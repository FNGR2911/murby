const path = require('path')
const MiniCssExtractPlugin = require('mini-css-extract-plugin')
const ImageminPlugin = require('imagemin-webpack-plugin').default
const imageminMozjpeg = require('imagemin-mozjpeg')
const WebpackNotifierPlugin = require('webpack-notifier')
const merge = require('webpack-merge')
const LiveReloadPlugin = require('webpack-livereload-plugin')

const commonConfig = {
  context: path.resolve(__dirname, './assets/'),
  entry: './js/index.js',
  output: {
    path: path.resolve(__dirname, './web/assets/'),
    publicPath: '/',
    filename: './js/bundle.js'
  },
  module: {
    rules: [
      {
        test: /\.js$/,
        exclude: /(node_modules)/,
        use: {
          loader: 'babel-loader',
          options: {
            presets: ['@babel/preset-env']
          }
        }
      },
      {
        test: /\.(sa|sc|c)ss$/,
        use: [
          {
            loader: MiniCssExtractPlugin.loader
          },
          {
            loader: 'css-loader'
          },
          {
            loader: 'postcss-loader'
          },
          {
            loader: 'sass-loader',
            options: {
              implementation: require('sass')
            }
          }
        ]
      },
      {
        test: /\.(png|jpe?g|gif|svg)$/,
        loader: 'url-loader',
        options: {
          name: '[name].[hash].[ext]',
          outputPath: '/images/',
          publicPath: '../images/',
          limit: 8192
        }
      }
    ]
  },
  plugins: [
    new LiveReloadPlugin(),
    new MiniCssExtractPlugin({
      filename: './css/bundle.css'
    }),
    new ImageminPlugin({
      test: /\.(jpe?g|png|gif)$/i,
      plugins: [imageminMozjpeg({ quality: 100, progressive: true })]
    }),
    new WebpackNotifierPlugin({ title: 'Webpack', alwaysNotify: true })
  ]
}

/**
 * Export config based on mode
 */
module.exports = (env, argv) => {
  const mode = argv.mode

  /**
   * Development config
   */
  if (mode === 'development') {
    return merge(commonConfig, {
      devtool: 'inline-source-map'
    })
  }

  /**
   * Production config
   */
  if (mode === 'production') {
    return merge(commonConfig, {})
  }
}
