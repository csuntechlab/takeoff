module.exports = {
    dest: "public/docs",
    base: "/docs/",
    themeConfig: {
        nav: [
            { text: 'Home', link: '/' },
            { text: 'Elements', link: '/elements/' },
            { text: 'Blocks', link: '/blocks/' },
            { text: 'Resources', link: '/resources/' },
        ],
        sidebar: [
            '/elements/',
            '/blocks/',
            '/resources/'
        ],
        repo: 'csun-metalab/badges',
    }
}
