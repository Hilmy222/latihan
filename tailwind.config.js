/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontFamily:{
        sans : ['Poppins']
      },
      colors:{
        cmr : '#768d3a'
      }
    },
  },
  plugins: [],
}