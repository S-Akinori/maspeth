/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./src/**/*.{html,js}",
    "./**/*.php"
  ],
  theme: {
    extend: {
    colors: {
      'base': '#F6F6F6',
      'base-color': '#F6F6F6',
      'base-cont': '#222',
      'main': '#197DBB',
      'main2': '#197DBB',
      'main3': '#ffc0cb',
      'main-light': '#4BAAE0',
      'main-cont': '#F6F6F6',
      'main-cont2': '#222',
      'accent': '#A69463',
      'accent-cont': '#FFF',
    },
    },
  },
  plugins: [],
}
