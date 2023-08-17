/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.{html,js,php}"],
  theme: {
    backgroundImage: {
      img_bg_hero: "url('./assets/bg-home-hero.svg')",
      img_yellow_square: "url('./assets/bg-card-yellow.png')",
      img_red_square: "url('./assets/bg-card-red.png')",
      img_blue_square: "url('./assets/bg-card-blue.png')",
    },
    screens: {
      sm: "480px",
      md: "768px",
      lg: "1100px",
      xl: "1440px",
    },
    extend: {
      colors: {
        darkRed: "#C20023",
        darkRedOpacity: 'rgba(233, 65, 88, 0.15)',
        lightRed: "#E94158",
        lightYellow: "#FFFBF4",
        darkYellow: "#FFAE10",
        darkBlue: "#00BDE5",
        cardYellow: "#FFF3C9",
        cardRed: "rgba(233, 65, 88, 0.10)",
        cardBlue: "#CCF6FF",
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
