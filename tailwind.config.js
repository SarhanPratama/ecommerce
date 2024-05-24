const colors = require('tailwindcss/colors')
const { createThemes } = require("tw-colors");

/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    'node_modules/preline/dist/*.js',
    './resources/**/*.vue',
    './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
  ],
  darkMode: ['class'],

  theme: {

    container: {
      center: true,
      padding: "1.5rem"
    },

    extend: {
      fontFamily: {
        'body': ['Work Sans', 'sans-serif'],
      },

      spacing: {
        15: '60px',
        18: '72px'
      },

      zIndex: {
        '60': '60',
        '70': '70',
      },

    },
  },

  plugins: [
    require('@tailwindcss/aspect-ratio'),
    require('@tailwindcss/forms'),
    require('preline/plugin'),
    createThemes({
      light: {
        primary: {
          ...colors.emerald,
          "DEFAULT": colors.emerald[500],
        },

        default: colors.slate,
      },

      dark: {
        primary: {
          ...colors.emerald,
          "DEFAULT": colors.emerald[500],
        },

        default: {
          '950': '#fafafa',
          '900': '#f4f4f5',
          '800': '#e4e4e7',
          '700': '#d4d4d8',
          '600': '#a1a1aa',
          '500': '#71717a',
          '400': '#52525b',
          '300': '#3f3f46',
          '200': '#27272a',
          '100': '#18181b',
          '50': '#09090b'
        },
      },
    },
      {
        defaultTheme: 'light'
      })
  ],
}
