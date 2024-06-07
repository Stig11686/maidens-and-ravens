/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["*.{html,php,js}", "./template-parts/*.{php,html,js}", "./template-parts/**/*.{php,html,js}", "./assets/js/*.js"],
  theme: {
    fontFamily: {
      sans: ['seasonsregular', 'sans-serif'],
    },
    extend: {
      colors: {
        'purple': {
          '900': '#59315F',
        },
        'blue': {
          '900': '#004F71',
        },
        'yellow' : {
          '900': '#F1C400',
        },
        'olive': {
          '900': '#6D712E',
        },
        'orange': {
          '900': '#BE531C',
        },
        'blush': {
          '900': '#910048',
        }
      },
      boxShadow: {
        'grey': '0px 0px 8px rgba(0, 0, 0, 0.29)',
      },
    },
  },
  plugins: [],
}

