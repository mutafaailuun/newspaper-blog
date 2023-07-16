/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontFamily: {
        "sprat-reg" : "Sprat_Regular",
        "sprat-eb" : "Sprat_EB",
        "beng-b" : "Benguiat_B",
        roboto: "Roboto",
        "roboto-light": "Roboto Light"
      }
    },
    fontSize: {
      sm: '0.8rem',
      base: '1rem',
      xl: '1.25rem',
      '2xl': '1.563rem',
      '3xl': '1.953rem',
      '4xl': '2.441rem',
      '5xl': '3.052rem',
      '6xl': ' 3.75rem',
      '7xl':'4.5rem',
      '8xl': '6rem',
      '9xl': '8rem'
  },
  plugins: [],
}
}
