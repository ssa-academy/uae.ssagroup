/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./*.{php,html,js}", // Top-level files
    "./**/*.{php,html,js}", // All subdirectories
    "./src/**/*.{php,html,js}", // Source directory
    "./wp-content/themes/**/*.{php,html,js}", // theme directory
    "./src/js/*.js", // Javascript
  ],
  theme: {
    screens: {
      sm: "640px",
      md: "768px",
      lg: "1020px",
      xl: "1340px",
    },
    container: {
      center: true,
    },
    fontSize: {
      xs: ["13px", { lineHeight: "18px", letterSpacing: "0.1px" }],
      sm: ["15px", { lineHeight: "23px", letterSpacing: "0.1px" }],
      md: ["20px", { lineHeight: "22px", letterSpacing: "0.1px" }],
      lg: ["26px", { lineHeight: "34px" }],
      xl: ["40px", { lineHeight: "50px" }],
      xxl: ["80px"],
    },
    fontFamily: {
      poppins: ["Poppins", "Arial", "sans-serif"],
      navfont: ["Open Sans", "sans-serif"],
    },
    extend: {
      colors: {
        customWhite: "#FAF9F6",
        customYellow: "#FE9E14",
        customDark: "#121212",
        customDark2: "#1f1f1f",
        customDark3: "#090909",
        customGray: "#2D3335",
        customGray2: "#B0AFAD",
        customGray3: "#717171",
      },
      backgroundImage: {
        "hero-pattern":
          "linear-gradient(to bottom, rgba(0, 0, 0, 0.9), rgba(0, 0, 0, 0.8)), url('../src/images/hero-background-image.jpg')",
      },
      keyframes: {
        "open-menu": {
          "0%": { transform: "scaleY(0)" },
          "100%": { transform: "scaleY(1)" },
        },
        "fade-in": {
          "0%": { transform: "translateY(30px) scale(0.8)" },
          "100%": { transform: "translateY(0px) scale(1)" },
        },
      },
      animation: {
        "open-menu": "open-menu 0.3s ease forwards",
        "fade-in": "fade-in 0.3s ease",
      },
    },
  },
  plugins: [],
};
