module.exports = {
  content: [
    './**/*.php',
    './template-parts/**/*.php'
  ],
  theme: {
    extend: {
      colors: {
        'wp-primary': '#3858e9',
      }
    }
  },
  plugins: [
    require('@tailwindcss/typography'),
    require('@tailwindcss/forms')
  ]
}