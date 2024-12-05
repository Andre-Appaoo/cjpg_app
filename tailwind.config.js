/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./assets/**/*.js",
    "./templates/**/*.html.twig",
    "./vendor/tales-from-a-dev/flowbite-bundle/templates/**/*.html.twig",
  ],
  darkMode: 'media',
  theme: {
    extend: {
      colors: {
        primary: {"50":"#eff6ff","100":"#dbeafe","200":"#bfdbfe","300":"#93c5fd","400":"#60a5fa","500":"#3b82f6","600":"#2563eb","700":"#1d4ed8","800":"#1e40af","900":"#1e3a8a","950":"#172554"},
        blue_loto: '#0055A4',
        red_loto: '#EF4135',
        blue_euromillions: '#003399',
        gold_euromillions: '#eebb05',
      },
      boxShadow: {
        'ball_shadow': '.1em .1em 1em rgba(0, 0, 0, 0.250)',
      },
      backgroundImage: {
        'white_star': 'url("../images/logos/white-star.png")',
        'gold_star': 'url("../images/logos/gold-star.png")',
      }
    },
    fontFamily: {
      'body': [
        'Inter',
        'ui-sans-serif',
        'system-ui',
        '-apple-system',
        'system-ui',
        'Segoe UI',
        'Roboto',
        'Helvetica Neue',
        'Arial',
        'Noto Sans',
        'sans-serif',
        'Apple Color Emoji',
        'Segoe UI Emoji',
        'Segoe UI Symbol',
        'Noto Color Emoji'
      ],
      'sans': [
        'Inter',
        'ui-sans-serif',
        'system-ui',
        '-apple-system',
        'system-ui',
        'Segoe UI',
        'Roboto',
        'Helvetica Neue',
        'Arial',
        'Noto Sans',
        'sans-serif',
        'Apple Color Emoji',
        'Segoe UI Emoji',
        'Segoe UI Symbol',
        'Noto Color Emoji'
      ]
    },
    fontSize: {
      sm: '1rem',
      md: '1.5rem',
      base: '2rem',
      xl: '2.25rem',
      '2xl': '2.563rem',
      '3xl': '2.953rem',
      '4xl': '3.441rem',
      '5xl': '4.052rem',
    },
    container: {
      center: true,
      padding: {
        DEFAULT: '1rem',
        sm: '2rem',
        lg: '4rem',
        xl: '5rem',
        '2xl': '6rem',
        /*DEFAULT: '0.5rem',
        sm: '1rem',
        lg: '2rem',
        xl: '2.5rem',
        '2xl': '3rem',*/
      },
    },
  },
  plugins: [],
}
