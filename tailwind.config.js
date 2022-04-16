module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
    ],
    theme: {
        variants: {
            borderColor: ["responsive", "hover", "focus", "focus-within"],
        },
        extend: {
            fontFamily: {
                Montserrat: ["Montserrat"],
                SourceSansPro: ["Source Sans Pro"],
            },
            colors: {
                kuning: "#ffe601",
                biru: "#142040",
                putih: "#ffffff",
                merah: "#da0037",
                hitam: "#171717",
                abu: "#444444",
                abumuda: "#EDEDED",
            },
        },
    },
    plugins: [require("flowbite/plugin")],
};
