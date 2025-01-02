import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./node_modules/flowbite/**/*.js",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
            },
            backdropBlur: {
                custom: "9px", // Gantilah '10px' dengan nilai sembarang sesuai keinginan Anda
            },
            width: {
                custom: "800px",
            },
            rotate: {
                270: "270deg",
            },
            top: {
                custom: "5rem",
            },
            boxShadow: {
                'custom-light': '0 4px 6px rgba(0, 0, 0, 0.1)', // Shadow dengan opacity 10%
                'custom-dark': '0 4px 8px rgba(0, 0, 0, 0.3)',  // Shadow dengan opacity 50%
              },f
        },
    },

    plugins: [forms, require("flowbite/plugin")],
};
