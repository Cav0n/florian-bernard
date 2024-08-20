/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
      ],
    theme: {
        extend: {
            fontFamily: {
                dm: "DM Serif Text",
                montserrat: "Montserrat",
            },
        },
    },
    plugins: [],
}

