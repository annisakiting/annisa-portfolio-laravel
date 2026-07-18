/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
  ],
  theme: {
    extend: {
      colors: {
        // Mengganti palet orange ke violet
        primary: {
          600: '#7c3aed', // Warna utama violet
          700: '#6d28d9',
        },
      },
    },
  },
  plugins: [],
}