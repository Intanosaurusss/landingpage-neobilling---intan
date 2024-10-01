<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
</head>
<body>
<section id="about" class="bg-white">
    <h2 class="text-center font-bold tracking-wide text-3xl pt-10 text-orange-600">About Us</h2>

    <!-- div untuk kedua kontainer -->
    <div class="py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6 text-gray-500">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 h-full">

            <!-- Kontainer Kiri: Teks dan List -->
            <div class="flex flex-col justify-between" data-aos="slide-right">
                <div>
                    <p class="mb-4">RadbooX adalah Aplikasi Radius Server untuk pengguna mikrotik yang menerapkan sistem Otentikasi, Otorisasi, dan Akuntansi (AAA) pada jaringan PPPoE dan Hotspot sebagai Network Access.</p>
                    <ul class="space-y-2 text-left text-gray-500 dark:text-gray-500">
                        <li class="flex items-center space-x-3 rtl:space-x-reverse">
                            <svg class="flex-shrink-0 w-3.5 h-3.5 text-blue-500 dark:text-blue-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5"/>
                            </svg>
                            <span><span class="font-bold">Radius</span> sebagai protokol yang mengelola akses jaringan</span>
                        </li>
                        <li class="flex items-center space-x-3 rtl:space-x-reverse">
                            <svg class="flex-shrink-0 w-3.5 h-3.5 text-blue-500 dark:text-blue-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5"/>
                            </svg>
                            <span>Support enkripsi tipe CHAP, MSCHAP dan PAP</span>
                        </li>
                        <li class="flex items-center space-x-3 rtl:space-x-reverse">
                            <svg class="flex-shrink-0 w-3.5 h-3.5 text-blue-500 dark:text-blue-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5"/>
                            </svg>
                            <span>Lebih aman dan memudahkan proses pengolahan data Users</span></span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Kontainer Kanan: Teks dan Button -->
            <div class="flex flex-col" data-aos="slide-right">
                <div>
                    <p>RadbooX selain untuk Radius Server juga dapat digunakan untuk <span class="font-bold">Manajemen Keuangan (Billing).</span></p>
                    <p class="mb-6">Dengan fasilitas dan kemudahan layanan yang kami berikan, cukup satu pintu cukup dengan RadbooX.</p>
                </div>
                <div>
                    <a href="http://my.idneobilling.com/auth/login" type="button" class="py-2 px-5 text-sm font-medium text-orange-600 hover:text-white focus:outline-none bg-white rounded-lg border-2 border-orange-600 focus:z-10 dark:hover:bg-orange-600">
                        Free Trial
                    </a>
                </div>
            </div>

            <!-- section about kedua -->
            <div class="flex flex-col justify-between mt-10 md:order-1 order-2" >
                <div>
                    <div data-aos="zoom-in">
                    <p class="text-2xl font-semibold text-red-400">Semua fitur RadbooX tidak perlu join Third Party</p>
                    <p class="mb-4">RadbooX dirancang untuk memenuhi kebutuhan di bidang jasa penyedia layanan internet kususnya pengguna MikroTik dan kami berikan solusi untuk memudahkan manajemen user, keuangan, laporan, tagihan, pemberitahuan/notifikasi. itu semua dapat di kelola oleh radboox baik secara otomatis dan manual.</p>
                    </div>

                    <div class="dropdown-container relative grid gap-4">
                        <!-- Dropdown 1 -->
                        <div class="dropdown relative border-2 border-red-200 rounded-md" data-aos="fade-up">
                            <button class="dropdown-toggle w-full flex items-center justify-between p-3 bg-white rounded-t-md cursor-pointer focus:outline-none" aria-haspopup="menu" aria-expanded="false">
                                01 Notifikasi Via WhatsApp Menggunakan Nomor Sendiri
                                <svg class="hs-dropdown-open:rotate-180 size-4 transition-transform duration-300 ease-in-out transform rotate-0" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="m6 9 6 6 6-6"/>
                                </svg>
                            </button>
                            <div class="dropdown-menu bg-white rounded-md p-2 z-10 hidden" role="menu" aria-orientation="vertical">
                                <p class="block p-2 text-gray-500 no-underline">NewsleFitur gratis ini langsung anda bisa gunakan secara penuh tanpa ada biaya tambahan. Dan kami sudah menyediakan Scan QR Code langsung melalui halaman account jika anda ingin menggunakan nomor whatsapp sendiri, namun secara default kami sudah menyiapkan nomor WhatsApp khusus untuk notifikasi bilamana anda tidak ingin menggunakan nomor whatsapp sendiri.</p>
                            </div>
                        </div>

                        <!-- Dropdown 2 -->
                        <div class="dropdown relative border-2 border-red-200 rounded-md" data-aos="fade-up">
                            <button class="dropdown-toggle w-full flex items-center justify-between p-3 bg-white rounded-t-md cursor-pointer focus:outline-none" aria-haspopup="menu" aria-expanded="false">
                                02 Generate invoice otomatis oleh sistem
                                <svg class="hs-dropdown-open:rotate-180 size-4 transition-transform duration-300 ease-in-out transform rotate-0" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="m6 9 6 6 6-6"/>
                                </svg>
                            </button>
                            <div class="dropdown-menu bg-white rounded-md p-2 z-10 hidden" role="menu" aria-orientation="vertical">
                                <p class="block p-2 text-gray-500 no-underline">Tagihan pelanggan otomatis akan di buat di setiap tanggal atau pada tiap bulan nya. Pelanggan secara realtime akan mendapatkan notifikasi terkait terbitnya invoice.</p>
                            </div>
                        </div>

                        <!-- Dropdown 3 -->
                        <div class="dropdown relative border-2 border-red-200 rounded-md" data-aos="fade-up">
                            <button class="dropdown-toggle w-full flex items-center justify-between p-3 bg-white rounded-t-md cursor-pointer focus:outline-none" aria-haspopup="menu" aria-expanded="false">
                                03 Notifikasi Via WhatsApp Menggunakan Nomor Sendiri
                                <svg class="hs-dropdown-open:rotate-180 size-4 transition-transform duration-300 ease-in-out transform rotate-0" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="m6 9 6 6 6-6"/>
                                </svg>
                            </button>
                            <div class="dropdown-menu bg-white rounded-md p-2 z-10 hidden" role="menu" aria-orientation="vertical">
                                <a href="" class="block p-2 text-gray-500 no-underline">NewsleFitur gratis ini langsung anda bisa gunakan secara penuh tanpa ada biaya tambahan. Dan kami sudah menyediakan Scan QR Code langsung melalui halaman account jika anda ingin menggunakan nomor whatsapp sendiri, namun secara default kami sudah menyiapkan nomor WhatsApp khusus untuk notifikasi bilamana anda tidak ingin menggunakan nomor whatsapp sendiri.</a>
                            </div>
                        </div>

                        <!-- Dropdown 4 -->
                        <div class="dropdown relative border-2 border-red-200 rounded-md" data-aos="fade-up">
                            <button class="dropdown-toggle w-full flex items-center justify-between p-3 bg-white rounded-t-md cursor-pointer focus:outline-none" aria-haspopup="menu" aria-expanded="false">
                                04 Rekap Laporan Harian dan Bulanan
                                <svg class="hs-dropdown-open:rotate-180 size-4 transition-transform duration-300 ease-in-out transform rotate-0" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="m6 9 6 6 6-6"/>
                                </svg>
                            </button>
                            <div class="dropdown-menu bg-white rounded-md p-2 z-10 hidden" role="menu" aria-orientation="vertical">
                                <p class="block p-2 text-gray-500 no-underline">Semua transaksi akan di rekap dalam harian dan bulanan. Anda tidak perlu repot membuat laporan secara manual, karena system akan membuatkan untuk anda secara otomatis.</p>
                            </div>
                        </div>

                        <!-- Dropdown 5 -->
                        <div class="dropdown relative border-2 border-red-200 rounded-md" data-aos="fade-up">
                            <button class="dropdown-toggle w-full flex items-center justify-between p-3 bg-white rounded-t-md cursor-pointer focus:outline-none" aria-haspopup="menu" aria-expanded="false">
                              05 Support Multi User and Role
                                <svg class="hs-dropdown-open:rotate-180 size-4 transition-transform duration-300 ease-in-out transform rotate-0" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="m6 9 6 6 6-6"/>
                                </svg>
                            </button>
                            <div class="dropdown-menu bg-white rounded-md p-2 z-10 hidden" role="menu" aria-orientation="vertical">
                                <p class="block p-2 text-gray-500 no-underline">Jika anda memiliki karyawan atau teknisi lainnya, anda cukup bikin user tambahan sebagai Operator dan kasir untuk pencatatan keuangan atau lain nya.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- image kedua -->
            <div class="flex flex-col md:order-2 order-1">
                <div>
                    <img class="w-auto h-auto mt-2 animate-ping-and-bounce" src="{{ asset('assets/ilus.png') }}" alt="dashboard image">
                </div>
            </div>

            
      </div>
    </div>
    

      <!-- div untuk kedua kontainer -->
    <div class="md:py-0 py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6 text-gray-500">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center h-full">
    <!-- section about ketiga -->
            <!-- Kontainer Kiri: Teks dan List -->
            <div class="flex flex-col">
                <div>
                    <img class="w-auto h-auto animate-ping-and-bounce" src="{{ asset('assets/ilus2.png') }}" alt="dashboard image">
                </div>
            </div>

            <!-- Kontainer Kanan: Teks dan Button -->
            <div class="flex flex-col" data-aos="zoom-in">
                <div>
                <p class="text-2xl font-semibold text-orange-400">Hemat Biaya dan Waktu</p>
                <br>
                <div>
                  <p>Bersama RadbooX anda tidak perlu ada tambahan applikasi atau daftar penyedia lain nya, RadbooX akan meringankan pekerjaan anda!.</p><br>
                  <p>RadbooX berupaya semaksimal mungkin dalam menyajikan fitur dan seringan mungkin hasil kerjaan yang akan anda lakukan ketika menggunakan layanan kami.</p><br>
                  <p>Daftar sekarang juga, gratis 100% selama 1 minggu.</p>
                  <a href="http://my.idneobilling.com/auth/login" type="button" class="mt-3 py-3 px-4 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border-2 border-red-300 text-red-500 hover:border-red-200 hover:bg-red-200  disabled:opacity-50 disabled:pointer-events-none transition duration-300">
                    Free Trial
                  </a>
                </div>
            </div>
        </div>


        <!-- section about keempat -->
            <!-- Kontainer Kiri: Teks dan List -->
            <div class="flex flex-col">
                <div>
                    <img class="w-auto h-auto animate-ping-and-bounce" src="{{ asset('assets/ilus3.png') }}" alt="dashboard image">
                </div>
            </div>

            <!-- Kontainer Kanan: Teks dan Button -->
            <div class="flex flex-col" data-aos="zoom-in">
                <div>
                <p class="text-2xl font-semibold text-red-400">Data Center</p>
                <br>
                <div>
                  <p>Server kami berada di cyber data center Jakarta, sehingga dapat di akses dari manapun secara cepat. Dengan dukungan listrik backup jaminan uptime SLA 99%.</p>
                  <br>
                  <p>100% Penyimpanan menggunakan Solid State Drive (SSD) dengan tambahan controller RAID 10. Jaminan query yang sangat cepat untuk proses input output data.</p>
                </div>
            </div>
        </div>

    </div>
</div>
</section>


<!-- javascript ini juga berfungsi di file faq bagian dropdown -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
    const dropdowns = document.querySelectorAll('.dropdown');

    dropdowns.forEach(dropdown => {
        const toggleButton = dropdown.querySelector('.dropdown-toggle');
        const dropdownMenu = dropdown.querySelector('.dropdown-menu');
        const icon = toggleButton.querySelector('svg');

        toggleButton.addEventListener('click', function () {
            // Tutup semua dropdown lainnya
            dropdowns.forEach(otherDropdown => {
                if (otherDropdown !== dropdown) {
                    const otherMenu = otherDropdown.querySelector('.dropdown-menu');
                    const otherIcon = otherDropdown.querySelector('svg');
                    otherMenu.classList.add('hidden');
                    otherIcon.style.transform = 'rotate(0deg)';
                }
            });

            // Toggle visibility dari dropdown ini
            dropdownMenu.classList.toggle('hidden');

            // Rotate icon untuk dropdown ini
            const isMenuVisible = !dropdownMenu.classList.contains('hidden');
            icon.style.transform = isMenuVisible ? 'rotate(180deg)' : 'rotate(0deg)';
        });
    });
});
</script>

</body>
</html>
