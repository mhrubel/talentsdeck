/** @type {import('tailwindcss').Config} */
export default ({
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./node_modules/flowbite/**/*.js"
    ],
    theme: {
        extend: {
            colors: {
                'td-background': "#333333",
            }
        }
    },
    plugins: [
        require('flowbite/plugin')
    ],

});
