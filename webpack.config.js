var path = require('path');
var themeLocation = './public/wp-content/themes/cwp-fsgl';

module.exports = {
	entry: themeLocation + "/assets/js/scripts.js",
	output:{
		path:path.resolve(__dirname,themeLocation + "/assets/js/bundled"),
		filename: "app.js"
	},

  module: {
    rules: [
      {
        test: /\.js$/,
        exclude: /node_modules/,
        use: {
          loader: 'babel-loader',
          options: {
            presets: ['@babel/preset-env']
          }
        }
      }
    ]
  },
  mode: 'development'

	
}