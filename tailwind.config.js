/** @type {import('tailwindcss').Config} */
export default {
  content: [ 
     "./resources/**/*.blade.php",
    "./resources/**/*.js",],
  theme: {
    extend: {
      colors: {
        "black" : "#28282B",
        
      },
      fontFamily: {
        "handjet" : ["Handjet", "sans-serif"]
      },
      fontSize: {
        "2xs": "10px"
      }
    },
  },
  plugins: [],
}

