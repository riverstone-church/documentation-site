module.exports = {
    content: require('fast-glob').sync([
        'source/**/*.{blade.php,md,html,vue}',
        '!source/**/_tmp/*' // exclude temporary files
    ], { dot: true }),
    theme: {
        extend: {
            fontFamily: {
                sans: ["Arial", "Helvetica", "sans-serif"],
            },
            fontSize: {
                lg: "1.2rem",
                xl: "1.44rem",
                "2xl": "1.728rem",
                "3xl": "2.074rem",
                "4xl": "2.488rem",
                "5xl": "3.6rem",
            },
            colors: {
                blue: {
                    DEFAULT: "#004FAD",
                },
            },
            screens: {
                'print': { 'raw': 'print' },
            },
        },
    },
    variants: {
        extend: {},
    },
    plugins: [
        require('@tailwindcss/typography')
    ],
};
