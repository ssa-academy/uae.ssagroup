/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./*.{php,html,js}", // Top-level files
    "./**/*.{php,html,js}", // All subdirectories
    "./src/**/*.{php,html,js}", // Source directory
    "./wp-content/themes/**/*.{php,html,js}", // theme directory
  ],
  theme: {
    screens: {
      sm: "480px",
      md: "768px",
      lg: "1020px",
      xl: "1440px",
    },
    extend: {
      colors: {
        softBlue: "hsl(231, 69%, 60%)",
        softRed: "hsl(0, 94%, 66%)",
        grayishBlue: "hsl(229, 8%, 60%)",
      },
    },
  },
  plugins: [],
};
