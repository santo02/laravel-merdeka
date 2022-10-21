module.exports = {
    root: true,
    env: {
      node: true,
      jest: true
    },
    extends: [
      'plugin:vue/essential',
      '@vue/airbnb'
    ],
    rules: {
      'no-console': 'error',
      'no-debugger': 'error',
      'space-in-parens': ['off'],
    quotes: ['error', 'single'],
      'no-undef': ['off'],
      'computed-property-spacing': ['off'],
      'linebreak-style': ['off'],
      'brace-style': [2, 'stroustrup', { allowSingleLine: false }],
      'comma-dangle': ['error', 'never'],
    }
}
