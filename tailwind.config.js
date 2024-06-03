/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["*.{html,php,js}", "./template-parts/*.{php,html,js}", "./assets/js/*.js"],
  theme: {
    fontFamily: {
      sans: ['Spectral', 'sans-serif'],
    },
    extend: {},
  },
  plugins: [],
}

