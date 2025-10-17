// import preset from "./vendor/filament/support/tailwind.config.preset";

/** @type {import('tailwindcss').Config} */

export default {
    // presets: [preset],
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                // Green theme for booking/reservation system
                primary: {
                    50: '#F0FDF4',   // Very light green
                    100: '#DCFCE7',  // Light green
                    200: '#BBF7D0',  // Soft green
                    300: '#86EFAC',  // Fresh green
                    400: '#4ADE80',  // Bright green
                    500: '#22C55E',  // Main green
                    600: '#16A34A',  // Deep green (primary)
                    700: '#15803D',  // Dark green
                    800: '#166534',  // Darker green
                    900: '#14532D',  // Deepest green
                    950: '#052E16',  // Ultra dark green
                },
                secondary: {
                    50: '#FAFAF9',   // Off white
                    100: '#F5F5F4',  // Light gray
                    200: '#E7E5E4',  // Gray
                    300: '#D6D3D1',  // Medium gray
                    400: '#A8A29E',  // Dark gray
                    500: '#78716C',  // Darker gray
                    600: '#57534E',  // Deep gray (secondary)
                    700: '#44403C',  // Very dark gray
                    800: '#292524',  // Almost black
                    900: '#1C1917',  // Black
                },
                accent: {
                    50: '#FFF7ED',   // Light orange
                    100: '#FFEDD5',  // Soft orange
                    200: '#FED7AA',  // Pale orange
                    300: '#FDBA74',  // Light orange
                    400: '#FB923C',  // Orange
                    500: '#F97316',  // Main orange (accent)
                    600: '#EA580C',  // Deep orange
                    700: '#C2410C',  // Dark orange
                    800: '#9A3412',  // Darker orange
                    900: '#7C2D12',  // Deepest orange
                },
                background: {
                    white: '#FFFFFF',
                    light: '#F9FAFB',    // Light background
                    soft: '#F3F4F6',     // Soft background
                    subtle: '#E5E7EB',   // Subtle background
                },
                success: '#10B981',
                error: '#EF4444',
                warning: '#F59E0B',
                info: '#3B82F6',
            },
            fontFamily: {
                sans: ['Inter', 'system-ui', '-apple-system', 'BlinkMacSystemFont', 'Segoe UI', 'Roboto', 'sans-serif'],
                display: ['Poppins', 'Inter', 'sans-serif'],
            },
            fontSize: {
                'xs': ['0.75rem', { lineHeight: '1rem' }],
                'sm': ['0.875rem', { lineHeight: '1.25rem' }],
                'base': ['1rem', { lineHeight: '1.5rem' }],
                'lg': ['1.125rem', { lineHeight: '1.75rem' }],
                'xl': ['1.25rem', { lineHeight: '1.75rem' }],
                '2xl': ['1.5rem', { lineHeight: '2rem' }],
                '3xl': ['1.875rem', { lineHeight: '2.25rem' }],
                '4xl': ['2.25rem', { lineHeight: '2.5rem' }],
                '5xl': ['3rem', { lineHeight: '1' }],
                '6xl': ['3.75rem', { lineHeight: '1' }],
            },
            spacing: {
                '18': '4.5rem',
                '88': '22rem',
                '128': '32rem',
            },
            borderRadius: {
                'xl': '1rem',
                '2xl': '1.5rem',
                '3xl': '2rem',
            },
            boxShadow: {
                'soft': '0 2px 8px rgba(0, 0, 0, 0.04)',
                'medium': '0 4px 16px rgba(0, 0, 0, 0.08)',
                'strong': '0 8px 32px rgba(0, 0, 0, 0.12)',
                'green': '0 4px 14px rgba(34, 197, 94, 0.25)',
                'green-lg': '0 10px 40px rgba(34, 197, 94, 0.3)',
            },
            animation: {
                'fade-in': 'fadeIn 0.3s ease-in',
                'slide-up': 'slideUp 0.4s ease-out',
                'slide-down': 'slideDown 0.4s ease-out',
                'scale-in': 'scaleIn 0.2s ease-out',
            },
            keyframes: {
                fadeIn: {
                    '0%': { opacity: '0' },
                    '100%': { opacity: '1' },
                },
                slideUp: {
                    '0%': { transform: 'translateY(20px)', opacity: '0' },
                    '100%': { transform: 'translateY(0)', opacity: '1' },
                },
                slideDown: {
                    '0%': { transform: 'translateY(-20px)', opacity: '0' },
                    '100%': { transform: 'translateY(0)', opacity: '1' },
                },
                scaleIn: {
                    '0%': { transform: 'scale(0.95)', opacity: '0' },
                    '100%': { transform: 'scale(1)', opacity: '1' },
                },
            },
        },
    },
    plugins: [
        require("@tailwindcss/forms"),
        require("@tailwindcss/typography"),
    ],
};
