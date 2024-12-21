/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {
      spacing: {
        '128': '32rem', // Esto añade h-128 (32rem)
      }
    },
  },
  plugins: [
    require('flowbite/plugin'),
  ],
}


