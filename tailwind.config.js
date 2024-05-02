/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
    ],
    theme: {
        extend: {
            fontFamily: {
                JF:"jf"
            },
            colors: {
                'granada-betrolum': '#13504A',
                'granada-betrolum-light': '#CAF3EF',
                'granada-betrolum-warm': '#35a196',
                'granada-betrolum-lighter': '#7CD4CB',
                'granada-betrolum-wraming': '#96DDD6',
                'granada-mint': '#29ADA0',
                'granada-gray': '#F5F5F5',
                'granada-blue-light': '#F3FCFB',
                'granada-betrolum-black': '#13504A'

            },


        },
    },
    plugins: [],
}
