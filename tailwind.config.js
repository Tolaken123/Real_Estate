module.exports = {
  purge: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {},
  },
  variants: {
    extend: {
      backgroundcolor:['even'],
      maxHeight: ['focus'],
      scale: ['focus-within'],
    },
  },
  plugins: [],
}
