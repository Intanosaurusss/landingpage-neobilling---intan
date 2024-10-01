<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body>
<section id="home" class="bg-orange-400">
    <div class="gap-8 items-center py-8 px-4 mx-auto max-w-screen-xl xl:gap-16 md:grid md:grid-cols-2 sm:py-16 lg:px-6">
        <img class="w-auto h-auto mt-10 animate-ping-and-bounce" src="{{ asset('assets/image1.png') }}" alt="dashboard image">
        <div class="mt-4 md:mt-0">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold dark:text-orange-600 shadow-white">Solusi Akuntansi Dan Otentikasi MikroTik Anda</h2>
            <p class="font-light text-white md:text-lg">Radius Server, Users Management, Billing, Notification, Payment Gateway, OLT ZTE Management</p>
            <p class="mb-6 font-light text-white md:text-lg">Semua dalam satu Applikasi</p>
            
            <div class="grid md:grid-cols-3 grid-cols-2 gap-2">
            <a href="#about" class="inline-flex items-center justify-center text-center text-white bg-orange-600 hover:bg-orange-400 hover:border-orange-600 hover:border-2 focus:ring-4 focus:ring-orange-600 font-medium rounded-full text-sm py-2 w-auto">
                Get started
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 ml-3">
                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                </svg>
            </a>
            <a onclick="toggleModal(true)" class="inline-flex space-x-5 items-center justify-center text-white border-orange-600 hover:bg-orange-600 border-2 focus:ring-4 font-medium rounded-full text-sm py-2 text-center w-auto">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 mr-2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" /><path stroke-linecap="round" stroke-linejoin="round" d="M15.91 11.672a.375.375 0 0 1 0 .656l-5.603 3.113a.375.375 0 0 1-.557-.328V8.887c0-.286.307-.466.557-.327l5.603 3.112Z" />
                </svg>
                Watch Video
            </a>
            </div>

        <!-- Modal Web -->
        <div id="webModal" class="fixed inset-0 z-50 hidden flex items-center justify-center bg-black bg-opacity-100">
            <!-- Close Button Positioned on the Overlay -->
            <button class="absolute top-4 right-4 text-white hover:text-gray-300 z-50" onclick="toggleModal(false)">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>


         <!-- Modal Content -->
         <div class="relative bg-white rounded-lg shadow-lg p-4 max-w-4xl w-full h-4/5">
                <div class="w-full h-full">
                    <iframe id="webIframe" class="w-full h-full" src="" frameborder="0"></iframe>
                </div>
            </div>
        </div>

        <!-- penutup container div yang paling atas -->
        </div>
    </div>
</section>
</body>
</html>

<script>
function toggleModal(show) {
    const modal = document.getElementById('webModal');
    const iframe = document.getElementById('webIframe');
    if (show) {
        // Ganti dengan URL web yang ingin ditampilkan
        iframe.src = "http://127.0.0.1:8000/";
        modal.classList.remove('hidden');
    } else {
        iframe.src = "";
        modal.classList.add('hidden');
    }
}
</script>