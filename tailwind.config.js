/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['./**/*.{html,php}'],
  theme: {
    screens: {
      'mobile': '320px',
      'tablet': '768px',
      'laptop': '1024px',
      'desktop': '1440px',
    },
    extend: {
      fontFamily: {
        schibsted: ['Schibsted Grotesk', 'sans-serif'],
      },
      boxShadow: {
        fixed: '0 0 2px 1px rgba(255, 255, 255, 1)',
        'fixed-2': '0 0 4px 2px rgba(255, 255, 255, 1)',
      },
      backgroundImage: {
        'search-background': "url('../img/search-background.jpg')",
      },
    },
  },
  plugins: [],
}
