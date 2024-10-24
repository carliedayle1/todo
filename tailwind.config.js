/** @type {import('tailwindcss').Config} */
export default {
  darkMode: 'class', // Ensures that the 'dark' class is used for dark mode
  theme: {
    extend: {},
  },
    content: [ 
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
      'node_modules/preline/dist/*.js',
    ],
    theme: {
      extend: {},
    },
    plugins: [
      require('preline/plugin')
    ],
  }
  
 