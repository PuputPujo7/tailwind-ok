// module.exports = {
//   content: [],
//   theme: {
//     extend: {},
//   },
//   plugins: [],
// }

// module.exports = {
//   content: [
//     "./resources/**/*.blade.php",
//     "./resources/**/*.js",
//     "./resources/**/*.vue",
//   ],
//   theme: {
//     extend: {},
//   },
//   plugins: [],
// }
const colors = require('tailwindcss/colors') 
 
module.exports = {
    content: [
        './resources/**/*.blade.php',
        './vendor/filament/**/*.blade.php', 
    ],
    darkMode: 'class',
    theme: {
        extend: {
            colors: { 
                danger: colors.rose,
                primary: colors.blue,
                success: colors.green,
                warning: colors.yellow,
                sky: colors.sky,
              cyan: colors.cyan,
            }, 
            animation: {
              text:
              'text 5s ease infinite',
              'spin-slow': 'spin 5s linear infinite',
              'ping-slow': 'ping 5s cubic-bezier(1, 1, 0.2, 1) infinite',
              cursor: 'cursor .6s linear infinite alternate',
              type: 'type 1.8s ease-out .8s 1 normal both',
              'type-reverse': 'type 1.8s ease-out 0s infinite alternate-reverse both',
          },
          keyframes: {
            type: {
              '0%': { width: '0ch' },
              '5%, 10%': { width: '1ch' },
              '15%, 20%': { width: '2ch' },
              '25%, 30%': { width: '3ch' },
              '35%, 40%': { width: '4ch' },
              '45%, 50%': { width: '5ch' },
              '55%, 60%': { width: '6ch' },
              '65%, 70%': { width: '7ch' },
              '75%, 80%': { width: '8ch' },
              '85%, 90%': { width: '9ch' },
              '95%': { width: '10ch' },
            },
            wave: {
              '0%': { transform: 'rotate(0.0deg)' },
              '10%': { transform: 'rotate(14deg)' },
              '20%': { transform: 'rotate(-8deg)' },
              '30%': { transform: 'rotate(14deg)' },
              '40%': { transform: 'rotate(-4deg)' },
              '50%': { transform: 'rotate(10.0deg)' },
              '60%': { transform: 'rotate(0.0deg)' },
              '100%': { transform: 'rotate(0.0deg)' },
            },
              text: {
                  '0%, 100%': {
                     'background-size':'200% 200%',
                      'background-position': 'left center'
                  },
                  '50%': {
                     'background-size':'200% 200%',
                      'background-position': 'right center'
                  }
              },
              spin: {
                to:{
                  transform: 'rotate(-360deg)'
                }
              }
              
          }
        },

        
          

    },
    plugins: [
        require('@tailwindcss/forms'), 
        // require('@tailwindcss/typograhy'), 
        require('@tailwindcss/typography'), 
    ],
}