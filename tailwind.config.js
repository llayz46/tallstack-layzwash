import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Space Grotesk', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'title': 'var(--text-title)',
                'body': 'var(--text-body)',
                'background': 'var(--background)',
                'primary': {
                    '50': '#f2fbfa',
                    '100': '#d2f5f0',
                    '200': '#a4ebe1',
                    '300': '#6fd9cf',
                    '400': '#41c0b8',
                    '500': '#269f99',
                    '600': '#1d8481',
                    '700': '#1b6a69',
                    '800': '#1a5555',
                    '900': '#1a4747',
                    '950': '#09292a',
                }
            },
        },
    },
    plugins: [
        require('autoprefixer'),
        require('postcss-custom-properties'),
        require('@tailwindcss/aspect-ratio')
    ],
}
