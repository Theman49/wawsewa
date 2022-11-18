/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    container: {
      center: true,
    },
    extend: {
      colors: {
        'primary-250': '#F4FBF8',
        'primary-700': '#1C7D50',
        'primary-500': '#29B473',
        'gray-200': '#EAECF0',
        'gray-400': '#98A2B3',
        'black': '#121212',
        'warning-500': '#F79009'
      },

    },
  },
  plugins: [],
}
