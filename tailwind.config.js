/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["*.{html,php,js}", "./templates/*.{php,html,js}", "./template-parts/*.{php,html,js}", "./template-parts/**/*.{php,html,js}", "./assets/js/*.js", "./woocommerce/*.{php, html, js}"],
  diasyui: {
    themes: ['valentine', 'dark'],
  },
  theme: {
    fontFamily: {
      sans: ['Alice', 'sans-serif'],
    },
    extend: {
      zIndex: {
        '1': '1',
      },
      colors: {
        'primary': '#9C0D38',
        'secondary': '#F9D6F7',
        'neutral': '#EBCBB4',
        'gray': {
          '100': '#cccccc'
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

