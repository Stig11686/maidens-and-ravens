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
      'beauty': ['beauty-of-the-beast']
    },
    extend: {
      zIndex: {
        '1': '1',
      },
      aspectRatio: {
        '3/4': '3/4',
      },
      colors: {
        //'primary': '#431A2F',
        'primary': '#974A87',
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

