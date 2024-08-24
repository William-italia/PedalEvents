// tailwind.config.js
module.exports = {
  content: [
    './app/views/**/*.{php,html}',
    './public/**/*.html',
    './index.html',
    './index.php',
  ],
  theme: {
    extend: {
      colors: {
        colorLogo: 'hsl(207, 100%, 50%)',
        strongCyan: 'hsl(171, 66%, 44%)',
        lightBlue: 'hsl(233, 100%, 69%)',
        darkGrayishBlue: 'hsl(210, 10%, 33%)',
        grayishBlue: 'hsl(201, 11%, 66%)',
        'dark-blue': '#003B7A',
        'light-blue': '#006CE0',
      },
      backgroundImage: {
        'bgGradient': 'linear-gradient(45deg, #003B7A, #006CE0)',
      },
      fontFamily: {
        russo: ['Russo One', 'sans-serif'],
        roboto: ['Roboto', 'sans'],
      },
      backgroundImage: {
        'bgGradiente': "url('/assets/img/bg-header-desktop.png')",
      }
    },
  },
  plugins: [],
};
