/** @type {import('tailwindcss').Config} */
export default {
    content: [
      './resources/views/auth/*.blade.php', // Update the paths based on where your views are
      './resources/**/*.js',
      './resources/**/*.vue',
    ],
    theme: {
      extend: {},
    },
    plugins: [],
  }
  