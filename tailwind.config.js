module.exports = {
  purge: [],
  theme: {
    extend: {
      fontFamily: {
        "brand": ["Open Sans", "sans-serif"]
      },
      colors: {
        brand: {
          100: '#31303a',
          200: '#434f53',
        },
      }
    },
  },
  variants: {},
  plugins: [
    require('@tailwindcss/ui'),
  ],
}
