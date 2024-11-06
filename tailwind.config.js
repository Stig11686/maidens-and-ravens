/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "*.{html,php,js}",
    "./templates/*.{php,html,js}", 
    "./template-parts/*.{php,html,js}", 
    "./template-parts/**/*.{php,html,js}", 
    "./assets/js/*.js", 
    "./woocommerce/*.{php, html, js}"
  ],
  safelist: [
    "sm:col-span-2",
    "gap-6"
  ],
  diasyui: {
    themes: ['valentine', 'dark'],
  },
  theme: {
    fontFamily: {
      sans: ['Alice', 'sans-serif'],
      'beauty': ['enchant']
    },
    extend: {
      zIndex: {
        '1': '1',
      },
      aspectRatio: {
        '3/4': '3/4',
      },
      colors: {
        'primary': '#431A2F',
        'secondary': '#F9D6F7',
        'neutral': '#EBCBB4',
        'white-opacity': 'rgba(255, 255, 255, 0.4)',
        'grey-opacity': 'rgba(156, 156, 156, 0.4)',
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

