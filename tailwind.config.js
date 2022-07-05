/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.ts",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {},
        colors: {
            'gray-100': '#f3f4f6',
            'gray-200': '#e5e7eb',
            'gray-400': '#9ca3af',
            'gray-500': '#6b7280',
            'gray-600': '#4b5563',
            'blue-500': '#3b82f6',
            'blue-600': '#2563eb',
            'blue-700': '#1d4ed8',
            'red-400': '#f87171',
            'red-500': '#ef4444',
            'white': '#ffffff',
            transparent: 'transparent',
            current: 'currentColor',
            'purple': '#3f3cbb',
            'midnight': '#121063',
            'metal': '#565584',
            'tahiti': '#3ab7bf',
            'silver': '#ecebff',
            'bubble-gum': '#ff77e9',
            'bermuda': '#78dcca',
        },
    },
    plugins: [],
}
