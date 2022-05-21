module.exports = {
  content: [
    './storage/framework/views/*.php',
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  theme: {
    extend: {},
  },
  plugins: [
    // require('@tailwindcss/typography'),
    // require('@tailwindcss/forms'),
    // require('@tailwindcss/line-clamp'),
    // require('@tailwindcss/aspect-ratio'),
  ],
  safelist: [
    process.env.MIX_APP_ENV !== 'production' ? { pattern: /.*/ } : '',
  ],
  prefix: 'tw-',
}
