module.exports = {
    purge: ["source/**/*.blade.php", "source/**/*.md", "source/**/*.html"],
    theme: {
        extend: {
            fontFamily: {
                sans: ["Arial", "Helvetica", "sans-serif"],
            },
            fontSize: {
                lg: "1.25rem",
                xl: "1.563rem",
                "2xl": "1.953rem",
                "3xl": "2.441rem",
                "4xl": "3.052rem",
                "5xl": "3.815rem",
            },
        },
    },
    variants: {
        extend: {},
    },
    plugins: [],
};
