/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./*.{php,html,js}", // Top-level files
    "./**/*.{php,html,js}", // All subdirectories
    "./src/**/*.{php,html,js}", // Source directory
    "./wp-content/themes/**/*.{php,html,js}", // theme directory
    "./src/js/*.js" // Javascript
  ],
  theme: {
    screens: {
      sm: "640px",
      md: "768px",
      lg: "1020px",
      xl: "1440px",
    },
    container:{
      center: true,
    },
    fontFamily:{
      poppins :["Poppins", "Arial", 'sans-serif'],
      navfont: ["Open Sans", "sans-serif"],
    },
    extend: {
      colors: {
        customWhite: "#FAF9F6",
        customYellow: "#FE9E14",
        customDark: "#121212",
        customDark2: "#1f1f1f",
        customDark3: "#090909",
        customGray: "#2D3335",
        customGray2: "#B0AFAD"
      },
      backgroundImage: {
        'hero-pattern' : "linear-gradient(to bottom, rgba(0, 0, 0, 0.9), rgba(0, 0, 0, 0.8)), url('https://s3-alpha-sig.figma.com/img/04a0/cf9c/8736a0f9b272b299ee363c98bee53ea5?Expires=1721001600&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=meua666O4tb9CMhfAHzE4Po4QTVG0Du68L7z6LQdJtrcgoqjQFi9Zshp8LHTIZ42BB~vuOAC42vM7hw3KoLfdOgtAUjxV5RaEuNw2sbNbaJ73fhkM6Xdo5-HSyxSTd1ZlBgQllWQcwrRs7A6qpaRdBi1D8dAhKwj~vQm9mmToRg9TvevtgWXsJ12fGsf8ETkJ7VIAjbmpCXiQRLr58NRZVcVz45JqbZuUHvkmbNMRJ3oVFZLtknP3Zd1M3yOQaLNWNeqIOF1trjOpZENXGonR~4nAjNsoy3x27y6PV24Y~CC6tE-3WyRnXE~e2Qh1gcuIS0W04t6c8~ffZ3kCxnwHg__')",
      },
      keyframes : {
        'open-menu' : {
          '0%' : {transform : 'scaleY(0)'},
          '100%' : {transform : 'scaleY(1)'}
        },
      },
      animation : {
        'open-menu' : 'open-menu 0.3s ease forwards'
      }
    },
  },
  plugins: [],
};
