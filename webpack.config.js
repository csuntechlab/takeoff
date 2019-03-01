module.exports = {
    module: {
    rules: [
        {
            test: /\.styl$/,
            loader: ["style-loader", "css-loader", "stylus-loader"]
        },
        {
            test: /\.vue$/,
            loader: "vue-loader",
            options: vueConfig
        },
        {
            test: /\.js$/,
            loader: "babel",
            exclude: /node_modules/
        },
    ];
    }
};
