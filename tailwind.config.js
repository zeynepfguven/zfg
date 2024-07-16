/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],  theme: {
    extend: {},
  },
  plugins: [],
}

module.exports = {
  theme: {
    extend: {
      height: {
        '159': '39.27rem', // 636px
        '101': '25.137rem', // 402.197px
        '159': '39.27rem', // 636px


        '112': '28rem', // 448px
        '128': '32rem', // 512px
        '144': '36rem', // 576px
        // Daha fazla boyut ekleyebilirsin
      }
    }
  }
}

module.exports = {
  theme: {
    extend: {
      colors: {
        'custom-purple': '#1E1B39',
      },
    },
  },
  variants: {},
  plugins: [],
}
module.exports = {
  theme: {
    extend: {
      colors: {
        'main-default': '#F2563A',
      },
    },
  },
  variants: {},
  plugins: [],
}