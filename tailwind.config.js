// tailwind.config.js
module.exports = {
  content: [
    './app/views/**/*.{php,html}',
    './public/**/*.{php,html}',
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
        'color-primary': '#2770DF',
        'color-primary-black': '',
      },
      backgroundImage: {
        'bgGradient': 'linear-gradient(45deg, #003B7A, #006CE0)',
        'bgGradiente': "url('/assets/img/bg-header-desktop.png')",
      },
      fontFamily: {
        russo: ['Russo One', 'sans-serif'],
        oswald: ['Oswald', 'sans-serif'],
        protest: ['Protest Revolution', 'sans-serif'],
        roboto: ['Roboto', 'sans'],
      },
      animation: {
        'fade-in-bottom': 'fadeInBottom .9s ease-in-out',
        'scroll-text': 'scrollText 10s linear infinite',
      },
      keyframes: {
        fadeInBottom: {
          '0%': { opacity: '0', transform: 'translateY(20px)' },
          '100%': { opacity: '1', transform: 'translateY(0)' },
        },
        scrollText: {
          '100%': { transform: 'translateX(-100%)' },
          '0%': { transform: 'translateX(0)' },
        },
      },
    },
  },
  plugins: [],
};
