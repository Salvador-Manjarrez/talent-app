/** @type {import('tailwindcss').Config} */
export default {
  content: [ 
     "./resources/**/*.blade.php",
    "./resources/**/*.js",],
  theme: {
    extend: {
      colors: {
        "black" : "#0F0F0F",
        "white" : "#FAF9F6",
        
      },
      fontFamily: {
        "poppins" : ["Poppins", "sans-serif"]
      },
      fontSize: {
        "2xs": "10px"
      }
    },
  },
  plugins: [],
}

