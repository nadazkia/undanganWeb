/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                poppins: ["Poppins"],
                awesome: ["Font Awesome 6 Free"],
            },
            colors: {
                tosca: {
                    100: "#B9EEE1",
                    200: "#79D3BE",
                    300: "#39B89A",
                    400: "#00a79d",
                },
                mermud: {
                    100: "#FFEBF0",
                    200: "#FFD6E0",
                    300: "#FFC2D1",
                    400: "#FFADC2",
                    500: "#FF99B3",
                    600: "#FF85A3",
                    700: "#FF7094",
                    800: "#FF5C85",
                    900: "#F5003D",
                },
                oke: {
                    100: "#ffdbeb", //pink
                    200: "#b34e7b", //ungu tua
                    300: "#ff8d70", //oren
                    400: "#ff70ff", //ungu muda jreng
                    500: "#b34eb3", //ungu agak tua
                    600: "#64b5c1", //tosca
                    700: "#ffb0a0", //oren muda
                    800: "#aad3ff", //biru muda
                    900: "#e5b7f7", //ungu muda
                },
                abu: "#989CA0",
            },
        },
    },
    plugins: [],
};

/*
#FF7094
#b34e7b
#ff8d70
#ff70ff
#b34eb3
*/
