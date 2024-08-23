/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["*.{html,php,js}", "./templates/*.{php,html,js}", "./template-parts/*.{php,html,js}", "./template-parts/**/*.{php,html,js}", "./assets/js/*.js", "./woocommerce/*.{php, html, js}"],
  diasyui: {
    themes: ['valentine', 'dark'],
  },
  theme: {
    fontFamily: {
      sans: ['seasonsregular', 'sans-serif'],
    },
    extend: {
      zIndex: {
        '1': '1',
      },
      colors: {
        'overlay-color': 'rgba(23, 21, 21, 0.8)',
        'card-bg': 'rgba(50, 44, 44, 0.8)',
        'primary': '#b80548',
        'secondary': '#a2b3a2',
        'neutral': '#e3aaa6',
        'gray': {
          '100': 'rgba(199, 197, 197, 0.3)'
        },
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
  plugins: [
    require('daisyui')
  ],
}

