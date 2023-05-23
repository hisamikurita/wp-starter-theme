/** @type {import('tailwindcss').Config} */

export default {
    content: [
      "./**/*.php",
      "./assets/**/*.js",
      "./assets/*.js",
    ],
    theme: {
      extend: {
        colors: {
          "black": "#1a1a1a",
          "white": "#ffffff",
        },
        transitionTimingFunction: {
          "transform": 'cubic-bezier(0.43, 0.05, 0.17, 1)',
          "material": 'cubic-bezier(0.26, 0.16, 0.1, 1)',
        },
        transitionDuration: {
          "short": '300ms',
          "base": '400ms',
          "full": '600ms',
        }
      },
      fontFamily: {
        "yugo": ['游ゴシック体', 'YuGothic', "游ゴシック Medium", "Yu Gothic Medium", "游ゴシック", "Yu Gothic", 'sans-serif'],
      }
    },
  plugins: [],
}

