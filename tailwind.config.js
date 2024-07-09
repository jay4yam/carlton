/** @type {import('tailwindcss').Config} */
export default {
  content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
  ],
    theme: {
        extend: {
            colors:{
                gold: '#c9b676',
                white: '#ffffff'
            },
            fontFamily:{
                fontawesome:['font']
            },
        },
    },
  plugins: [],
}

