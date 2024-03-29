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
        'primary-700': '#1C7D50',
        'primary-500': '#29B473',
        'primary-250': '#F4FBF8',

        'gray-200': '#EAECF0',
        'gray-300': '#D0D5DD',
        'gray-400': '#98A2B3',
        'gray-500': '#667085',
        'gray-600': '#475467',
        'gray-700': '#344054',

        'black': '#121212',

        'warning-500': '#F79009',

        'success-500': '#12B76A',

        'blue-light-500': '#0BA5EC',

        'orange-500': '#FB6514',

        'error-500': '#F04438',

      },
      fontSize: {
        'display-sm': '1.875rem'
      }

    },
  },
  plugins: [],
}
