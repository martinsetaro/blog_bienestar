/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./*.{html,js,php}","./**/*.{html,js,php}"],
  theme: {
    extend: {
      spacing: {
        '400': '40rem',
      }
    },
    fontFamily: {
      'averta':'avertaR',
    }
  },
  plugins: [],
}
