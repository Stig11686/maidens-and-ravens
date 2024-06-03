/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["*.{html,php,js}", "./template-parts/*.{php,html,js}", "./assets/js/*.js"],
  theme: {
    fontFamily: {
      sans: ['Spectral', 'sans-serif'],
    },
    extend: {
      colors: {
        'purple': {
          '900': '#59315F',
        },
      },
      boxShadow: {
        'grey': '0px 0px 8px rgba(0, 0, 0, 0.29)',
      },
    },
  },
  plugins: [],
}

