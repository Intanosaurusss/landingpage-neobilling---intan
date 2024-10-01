/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      scrollBehavior: {
          smooth: 'smooth'
        },
      keyframes: {
        
        // Custom ping untuk muncul tiba-tiba
        'custom-ping': {
          '0%': { transform: 'scale(0)', opacity: '0' },  // Mulai dari ukuran 0 dan opacity 0
          '80%': { transform: 'scale(1)', opacity: '1' }, // Memperbesar elemen
          '100%': { transform: 'scale(1)', opacity: '1' },  // Kembali ke ukuran normal
        },
        // Custom bounce
        'custom-bounce': {
          '0%, 100%': { transform: 'translateY(0)' }, 
          '50%': { transform: 'translateY(-20px)' }, 
        },
        //custom fade-up
        'fade-up': {
          '0%': { transform: 'translateY(20%)', opacity: '0' },
          '100%': { transform: 'translateY(0)', opacity: '1' },
        },
      },
      animation: {
        'ping-and-bounce': 'custom-ping 2s ease-out forwards, custom-bounce 4s ease-in-out infinite 2s', // Gabungan ping dan bounce
        'fade-up': 'fade-up 2s ease-out forwards',
      },
    },
  },
  plugins: [],
}
