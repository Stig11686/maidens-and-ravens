const path = require('path');

module.exports = {
    mode: 'production',
  entry: './js/index.js',
  output: {
    filename: 'main.js',
    path: path.resolve(__dirname, './js'), 
  },
  module: {
    rules: [
      {
        test: /\.js$/, // Match JavaScript files
        exclude: /node_modules/, // Exclude node_modules
        use: {
          loader: 'babel-loader', // Use Babel loader for transpiling
          options: {
            presets: ['@babel/preset-env'], // Transpile for compatibility
          },
        },
      },
    ],
  },
};