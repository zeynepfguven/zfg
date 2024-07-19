/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],

  theme: {
    extend: {
      colors: {
        'footer-text':"#838E9E",
        'title-black': "#1E1B39",
        'custom-purple': "#6E6C83",
        'footer-gray':"#2B274E",
        'gray-100': "#DEDEE9",
        'white-custom': "#FFF",
        'main-default': "#F2563A",
      },
      
        height: {
          '159': '39.27rem', // 636px
          '101': '25.137rem', // 402.197px
          '164': '41rem', // 656px
          '185': '46.25rem', // 740px
          '112': '28rem', // 448px
          '128': '32rem', // 512px
          '144': '36rem', // 576px
          '720': '46.25rem', // 740px 
        },
        width: {
          '357': '357.333px',
        },
       
        letterSpacing: {
          wider: '0.8px',
          0.64: '0.64px',
          tight: '0.4px',
        },
        boxShadow: {
          'custom': '0px 5px 32px 0px rgba(8, 15, 52, 0.04)',
        },
        spacing: {
          '590': '590px',
        },
        fontFamily: {
          'clash-display': ['Clash Display', 'sans-serif'],
        },
        fontSize: {
          sm: '0.8rem',
          base: '1rem',
          xl: '1.25rem',
          '2xl': '1.563rem',
          '3xl': '1.953rem',
          '4xl': '2.5rem',
          '5xl': '3.052rem',
        },
    },
  },
  plugins: [],
}

