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
    fontSize: {
      sm: '0.8rem',
      base: '1rem',
      xl: '1.25rem',
      '2xl': '1.563rem',
      '3xl': '1.953rem',
      '4xl': '2.5rem',
      '5xl': '3.052rem',
    }
  }
}

module.exports = {
  theme: {
    extend: {
      colors: {
        'main-default': '#F2563A',
        'custom-purple': '#6E6C83',
      },
    },
  },
};



module.exports = {
  theme: {
    extend: {
      letterSpacing: {
        wider: '0.8px',
        0.64: '0.64px',
        tight: '0.4px',
      },
    },
  },
  variants: {},
  plugins: [],
}
module.exports = {
  theme: {
    extend: {
      width: {
        '357': '357.333px',
      },
    },
  },
}
