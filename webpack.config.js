const path = require('path'),
    MiniCssExtractPlugin = require('mini-css-extract-plugin')



module.exports = {
    mode: 'development',
    context: __dirname,
    entry: './scripts/index.js',
    output: {
        path: path.resolve(__dirname, 'public'),
        filename: 'bundle.js'
    },
    plugins: [new MiniCssExtractPlugin({ filename: './css/app.css' })],
    module: {
        rules: [
            {
                test: /\.m?js$/,
                exclude: /(node_modules|bower_components)/,
                use: {
                    loader: 'babel-loader',
                    options: {
                        presets: ['@babel/preset-env'],
                        
                    }
                }
            },
            
            {
                test: /\.scss$/,
                include: /scss/,
                use: [
                    MiniCssExtractPlugin.loader,
                    'css-loader',
                    'postcss-loader',
                    'sass-loader',
                ]
            }
            
           
        ],
    }

}