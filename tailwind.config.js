module.exports = {
  purge: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
    darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {

      margin: {
        '1/12':  '8.333333%',
        '2/12':	'16.666667%',
        '3/12':	'25%',
        '4/12':	'33.333333%',
        '5/12':	'41.666667%',
        '6/12':	'50%',
        '7/12':	'58.333333%',
        '8/12':  '66.666667%',
        '9/12':  '75%',
        '10/12':	'83.333333%',
        '11/12':	'91.666667%',
      },


      // top, bottom, r, l 
      inset : {
        '43': '10,5rem',
      },


      colors: {
        red: {
          '500' : '#ff0000',
        },
        gray: {
          '500' : '#737373',
          'light': '#5c5c5c',
        },
        blue: {
          'light': '#00d9ff',
          'dark' : '#0011ff',
          'glass': '#577AB4',
          'dog': '#577AB4',
        },
      },


      height: {
        '1/12':  '8.333333%',
        '2/12':	'16.666667%',
        '3/12':	'25%',
        '4/12':	'33.333333%',
        '5/12':	'41.666667%',
        '6/12':	'50%',
        '7/12':	'58.333333%',
        '8/12':  '66.666667%',
        '9/12':  '75%',
        '10/12':	'83.333333%',
        '11/12':	'91.666667%',
        
      },


      fontFamily: {
        montserrat: 'Montserrat, sans-serif',
        poppins: 'Poppins, sans-serif',
        apple: '-apple-system, BlinkMacSystemFont Segoe UI, Roboto, Oxygen, Ubuntu, Cantarell, Open Sans, Helvetica Neue, sans-serif',
        inter: 'Inter, sans-serif',
      },


      boxShadow: {
          inset: 'inset 30px 30px 60px #494949, -30px -30px 60px #838383',
          insetSmaller: 'inset 7px 7px 18px #494949, inset -7px -7px 18px #838383',

          out:          '30px 30px 60px #494949, -30px -30px 60px #838383',
          outSmaller: '7px 7px 14px #3b3b3b, -7px -7px 14px #ababab',

          test:     '7px 7px 14px #282828, -7px -7px 14px #979797',
          
          pokusout:     '14px 14px 28px #282828, -14px -14px 28px #a2a2a2',
          pokusin:      'inset 14px 14px 28px #282828, inset -14px -14px 28px #a2a2a2',
      },

      animation: {
        backdrop: 'backdrop 20s infinite',
      },

      keyframes: {
        backdrop: {
          '0%': {
            backgroundColor: '#ff0000',
          },
          '25%': {
            backgroundColor: '#008aff',
          },
          '50%': {
            backgroundColor: '#303030',
          },
          '75%': {
            backgroundColor: '#14CC60',
          },
          '100%': {
            backgroundColor: '#ff0000',
          },
        },
      }
      /*přidat další      
        .... {

      },

      
      */


    },
  },
  variants: {
    extend: {},
  },

  plugins: [],
}
