import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    presets: [
        require("./vendor/wireui/wireui/tailwind.config.js")
    ],
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./vendor/wireui/wireui/src/*.php",
        "./vendor/wireui/wireui/ts/**/*.ts",
        "./vendor/wireui/wireui/src/WireUi/**/*.php",
        "./vendor/wireui/wireui/src/Components/**/*.php",
    ],
    theme: {
        extend: {
            gridTemplateRows: {
                '[auto,auto,1fr]': 'auto auto 1fr',
            },
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
        require('@tailwindcss/aspect-ratio'),
        require('@tailwindcss/forms'),
    ],
}
