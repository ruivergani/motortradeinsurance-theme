/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.{html,js,php}"],
  theme: {
    backgroundImage: {
      img_bg_hero: "url('./assets/bg-home-hero.svg')",
    },
    screens: {
      sm: "480px",
      md: "768px",
      lg: "976px",
      xl: "1440px",
    },
    extend: {
      colors: {
        darkRed: "#C20023",
        lightRed: "#E94158",
        lightYellow: "#FFFBF4",
        gray100: "#F6F6F6",
        gray200: "#DADCDD",
        gray300: "#C6C7C8",
        gray400: "#BABCBD",
        gray500: "#9A9D9E",
        gray600: "#78797A",
        gray700: "#4F5152",
        gray800: "#2D3235",
        gray900: "#030E15",
      },
      spacing: {
        128: "32rem",
      },
      borderRadius: {
        "1xl": "2rem",
      },
    },
  },
  plugins: ["prettier-plugin-tailwindcss"],
};
