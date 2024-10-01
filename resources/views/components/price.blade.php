<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/ede348c88.js" crossorigin="anonymous"></script>
    <title>3D Card Flip Hover Animation</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body  class="flex items-center justify-center h-screen ">
<section id="price" data-aos="zoom-in" class="pb-14">
    
<!-- div pembungkus paling awal -->
    <div class="container mx-auto">
        <h2 class="text-center font-bold tracking-wide text-3xl pt-12 pb-4 text-orange-600">Pricing</h2>

        <!-- deskripsi -->
        <div class="w-auto h-auto mx-auto max-w-screen-xl items-center md:py-2 py-2 px-4 sm:py-4 lg:px-6 text-gray-500 text-center">
            <p>Jumlah Users adalah batas pelanggan dalam table baik hotspot dan PPPoE, Ketika sudah mencapai batas maka tidak dapat membuat user baru, namun anda bisa menghapus user yang lama atau tidak terpakai kemudian membuat user baru, untuk hotspot voucher anda bisa menghapus user yang sudah habis lalu bikin voucher ulang, tidak ada batasan untuk membuat ulang user baik hotspot dan PPPoE selama dalam table belum memenuhi batas quota. Unlimited NAS, tidak ada batasan Router mikrotik yang akan di hubungkan ke Radius, jika anda punya cabang lebih dari satu anda dapat menghubungkan semua router.</p>
            <br>
            <p class="font-semibold text-orange-500">Pilih paket sesuai dengan pilihan anda</p>
         </div>

        <!-- Container untuk cards -->
        <div class="grid grid-cols-1 sm:grid-cols-2 sm:px-8 px-4 lg:grid-cols-3 gap-8 pt-6">

        <!-- Card 1 -->
        <div class="card-wrapper group relative">
            <div class="card light bg-white shadow-md shadow-orange-400 p-6 transform transition-transform duration-700 ease-in-out hover:scale-105 min-h-[400px]">
                <div class="text-overlay text-center">
                    <h2 class="text-lg font-bold text-orange-300">Radius Starter</h2>
                    <h2 class="text-3xl mt-2 text-orange-600">Rp.100.000</h2>
                    <p class="text-sm text-orange-300">/Bulan</p>
                    <div class="details-text flex flex-col gap-2 text-gray-500 text-sm pt-3">
                        <!-- Icon di sebelah kiri teks -->
                        <div class="flex items-center">
                            <svg class="flex-shrink-0 w-3.5 h-3.5 text-blue-500 dark:text-blue-400 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                            </svg>
                            <span>Unlimited NAS</span>
                        </div>
                        <div class="flex items-center">
                            <svg class="flex-shrink-0 w-3.5 h-3.5 text-blue-500 dark:text-blue-400 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                            </svg>
                            <span>200 Users PPPoE</span>
                        </div>
                        <div class="flex items-center">
                            <svg class="flex-shrink-0 w-3.5 h-3.5 text-blue-500 dark:text-blue-400 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                            </svg>
                            <span>10.000 Users Hotspot</span>
                        </div>
                        <div class="flex items-center">
                            <svg class="flex-shrink-0 w-3.5 h-3.5 text-blue-500 dark:text-blue-400 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                            </svg>
                            <span>300 Hotspot Sesi Aktif</span>
                        </div>
                        <div class="flex items-center">
                            <svg class="flex-shrink-0 w-3.5 h-3.5 text-blue-500 dark:text-blue-400 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                            </svg>
                            <span>Free VPN</span>
                        </div>
                        <div class="flex items-center">
                            <svg class="flex-shrink-0 w-3.5 h-3.5 text-blue-500 dark:text-blue-400 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                            </svg>
                            <span>Free Setup</span>
                        </div>
                        <div class="flex items-center">
                            <svg class="flex-shrink-0 w-3.5 h-3.5 text-blue-500 dark:text-blue-400 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                            </svg>
                            <span>Free WhatsApp Notifikasi</span>
                        </div>
                        <div class="flex items-center">
                            <svg class="flex-shrink-0 w-3.5 h-3.5 text-blue-500 dark:text-blue-400 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                            </svg>
                            <span>No Additional Fee</span>
                        </div>
                        <a href="http://my.idneobilling.com/auth/login" class="purchase-button w-1/2 mx-auto justify-center bg-white text-red-600 px-6 py-2 my-4 rounded-full border border-red-600 hover:bg-red-600 hover:text-white transition-colors duration-300 cursor-pointer">
                       Order Now
                    </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="card-wrapper group relative">
                    <div class="card light bg-white shadow-md shadow-orange-400 p-6 transform transition-transform duration-700 ease-in-out hover:scale-105 min-h-[400px]">
                        <div class="text-overlay text-center">
                            <h2 class="text-lg font-bold text-orange-300">Radius Basic</h2>
                            <h2 class="text-3xl mt-2 text-orange-600">Rp.150.000</h2>
                            <p class="text-sm text-orange-300">/Bulan</p>
                            <div class="details-text flex flex-col gap-2 text-gray-500 text-sm pt-3">
                                <!-- Icon di sebelah kiri teks -->
                                <div class="flex items-center">
                                    <svg class="flex-shrink-0 w-3.5 h-3.5 text-blue-500 dark:text-blue-400 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                                    </svg>
                                    <span>Unlimited NAS</span>
                                </div>
                                <div class="flex items-center">
                                    <svg class="flex-shrink-0 w-3.5 h-3.5 text-blue-500 dark:text-blue-400 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                                    </svg>
                                    <span>300 Users PPPoE</span>
                                </div>
                                <div class="flex items-center">
                                    <svg class="flex-shrink-0 w-3.5 h-3.5 text-blue-500 dark:text-blue-400 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                                    </svg>
                                    <span>20.000 Users Hotspot</span>
                                </div>
                                <div class="flex items-center">
                                    <svg class="flex-shrink-0 w-3.5 h-3.5 text-blue-500 dark:text-blue-400 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                                    </svg>
                                    <span>500 Hotspot Sesi Aktif</span>
                                </div>
                                <div class="flex items-center">
                                    <svg class="flex-shrink-0 w-3.5 h-3.5 text-blue-500 dark:text-blue-400 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                                    </svg>
                                    <span>Free VPN</span>
                                </div>
                                <div class="flex items-center">
                                    <svg class="flex-shrink-0 w-3.5 h-3.5 text-blue-500 dark:text-blue-400 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                                    </svg>
                                    <span>Free Setup</span>
                                </div>
                                <div class="flex items-center">
                                    <svg class="flex-shrink-0 w-3.5 h-3.5 text-blue-500 dark:text-blue-400 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                                    </svg>
                                    <span>Free WhatsApp Notifikasi</span>
                                </div>
                                <div class="flex items-center">
                                    <svg class="flex-shrink-0 w-3.5 h-3.5 text-blue-500 dark:text-blue-400 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                                    </svg>
                                    <span>No Additional Fee</span>
                                </div>
                                <a href="http://my.idneobilling.com/auth/login" class="purchase-button w-1/2 mx-auto justify-center bg-white text-red-600 px-6 py-2 my-4 rounded-full border border-red-600 hover:bg-red-600 hover:text-white transition-colors duration-300 cursor-pointer">
                                    Order Now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

        <!-- Card 3 -->
        <div class="card-wrapper group relative">
                    <div class="card light bg-white shadow-md shadow-orange-400 p-6 transform transition-transform duration-700 ease-in-out hover:scale-105 min-h-[400px]">
                        <div class="text-overlay text-center">
                            <h2 class="text-lg font-bold text-orange-300">Radius Premium</h2>
                            <h2 class="text-3xl mt-2 text-orange-600">Rp.250.000</h2>
                            <p class="text-sm text-orange-300">/Bulan</p>
                            <div class="details-text flex flex-col gap-2 text-gray-500 text-sm pt-3">
                                <!-- Icon di sebelah kiri teks -->
                                <div class="flex items-center">
                                    <svg class="flex-shrink-0 w-3.5 h-3.5 text-blue-500 dark:text-blue-400 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                                    </svg>
                                    <span>Unlimited NAS</span>
                                </div>
                                <div class="flex items-center">
                                    <svg class="flex-shrink-0 w-3.5 h-3.5 text-blue-500 dark:text-blue-400 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                                    </svg>
                                    <span>600 Users PPPoE</span>
                                </div>
                                <div class="flex items-center">
                                    <svg class="flex-shrink-0 w-3.5 h-3.5 text-blue-500 dark:text-blue-400 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                                    </svg>
                                    <span>35.000 Users Hotspot</span>
                                </div>
                                <div class="flex items-center">
                                    <svg class="flex-shrink-0 w-3.5 h-3.5 text-blue-500 dark:text-blue-400 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                                    </svg>
                                    <span>1000 Hotspot Sesi Aktif</span>
                                </div>
                                <div class="flex items-center">
                                    <svg class="flex-shrink-0 w-3.5 h-3.5 text-blue-500 dark:text-blue-400 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                                    </svg>
                                    <span>Free VPN</span>
                                </div>
                                <div class="flex items-center">
                                    <svg class="flex-shrink-0 w-3.5 h-3.5 text-blue-500 dark:text-blue-400 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                                    </svg>
                                    <span>Free Setup</span>
                                </div>
                                <div class="flex items-center">
                                    <svg class="flex-shrink-0 w-3.5 h-3.5 text-blue-500 dark:text-blue-400 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                                    </svg>
                                    <span>Free WhatsApp Notifikasi</span>
                                </div>
                                <div class="flex items-center">
                                    <svg class="flex-shrink-0 w-3.5 h-3.5 text-blue-500 dark:text-blue-400 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                                    </svg>
                                    <span>No Additional Fee</span>
                                </div>
                                <a href="http://my.idneobilling.com/auth/login" class="purchase-button w-1/2 mx-auto justify-center bg-white text-red-600 px-6 py-2 my-4 rounded-full border border-red-600 hover:bg-red-600 hover:text-white transition-colors duration-300 cursor-pointer">
                                    Order Now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

        <!-- Card 4 -->
        <div class="card-wrapper group relative">
                    <div class="card light bg-white shadow-md shadow-orange-400 p-6 transform transition-transform duration-700 ease-in-out hover:scale-105 min-h-[400px]">
                        <div class="text-overlay text-center">
                            <h2 class="text-lg font-bold text-orange-300">Radius Gold</h2>
                            <h2 class="text-3xl mt-2 text-orange-600">Rp.400.000</h2>
                            <p class="text-sm text-orange-300">/Bulan</p>
                            <div class="details-text flex flex-col gap-2 text-gray-500 text-sm pt-3">
                                <!-- Icon di sebelah kiri teks -->
                                <div class="flex items-center">
                                    <svg class="flex-shrink-0 w-3.5 h-3.5 text-blue-500 dark:text-blue-400 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                                    </svg>
                                    <span>Unlimited NAS</span>
                                </div>
                                <div class="flex items-center">
                                    <svg class="flex-shrink-0 w-3.5 h-3.5 text-blue-500 dark:text-blue-400 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                                    </svg>
                                    <span>1000 Users PPPoE</span>
                                </div>
                                <div class="flex items-center">
                                    <svg class="flex-shrink-0 w-3.5 h-3.5 text-blue-500 dark:text-blue-400 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                                    </svg>
                                    <span>50.000 Users Hotspot</span>
                                </div>
                                <div class="flex items-center">
                                    <svg class="flex-shrink-0 w-3.5 h-3.5 text-blue-500 dark:text-blue-400 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                                    </svg>
                                    <span>1500 Hotspot Sesi Aktif</span>
                                </div>
                                <div class="flex items-center">
                                    <svg class="flex-shrink-0 w-3.5 h-3.5 text-blue-500 dark:text-blue-400 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                                    </svg>
                                    <span>Free VPN</span>
                                </div>
                                <div class="flex items-center">
                                    <svg class="flex-shrink-0 w-3.5 h-3.5 text-blue-500 dark:text-blue-400 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                                    </svg>
                                    <span>Free Setup</span>
                                </div>
                                <div class="flex items-center">
                                    <svg class="flex-shrink-0 w-3.5 h-3.5 text-blue-500 dark:text-blue-400 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                                    </svg>
                                    <span>Free WhatsApp Notifikasi</span>
                                </div>
                                <div class="flex items-center">
                                    <svg class="flex-shrink-0 w-3.5 h-3.5 text-blue-500 dark:text-blue-400 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                                    </svg>
                                    <span>No Additional Fee</span>
                                </div>
                                <a href="http://my.idneobilling.com/auth/login" class="purchase-button w-1/2 mx-auto justify-center bg-white text-red-600 px-6 py-2 my-4 rounded-full border border-red-600 hover:bg-red-600 hover:text-white transition-colors duration-300 cursor-pointer">
                                    Order Now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

        <!-- Card 5 -->
        <div class="card-wrapper group relative">
                    <div class="card light bg-white shadow-md shadow-orange-400 p-6 transform transition-transform duration-700 ease-in-out hover:scale-105 min-h-[400px]">
                        <div class="text-overlay text-center">
                            <h2 class="text-lg font-bold text-orange-300">Radius Corporate</h2>
                            <h2 class="text-3xl mt-2 text-orange-600">Rp.600.000</h2>
                            <p class="text-sm text-orange-300">/Bulan</p>
                            <div class="details-text flex flex-col gap-2 text-gray-500 text-sm pt-3">
                                <!-- Icon di sebelah kiri teks -->
                                <div class="flex items-center">
                                    <svg class="flex-shrink-0 w-3.5 h-3.5 text-blue-500 dark:text-blue-400 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                                    </svg>
                                    <span>Unlimited NAS</span>
                                </div>
                                <div class="flex items-center">
                                    <svg class="flex-shrink-0 w-3.5 h-3.5 text-blue-500 dark:text-blue-400 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                                    </svg>
                                    <span>1500 Users PPPoE</span>
                                </div>
                                <div class="flex items-center">
                                    <svg class="flex-shrink-0 w-3.5 h-3.5 text-blue-500 dark:text-blue-400 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                                    </svg>
                                    <span>100.000 Users Hotspot</span>
                                </div>
                                <div class="flex items-center">
                                    <svg class="flex-shrink-0 w-3.5 h-3.5 text-blue-500 dark:text-blue-400 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                                    </svg>
                                    <span>2500 Hotspot Sesi Aktif</span>
                                </div>
                                <div class="flex items-center">
                                    <svg class="flex-shrink-0 w-3.5 h-3.5 text-blue-500 dark:text-blue-400 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                                    </svg>
                                    <span>Free VPN</span>
                                </div>
                                <div class="flex items-center">
                                    <svg class="flex-shrink-0 w-3.5 h-3.5 text-blue-500 dark:text-blue-400 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                                    </svg>
                                    <span>Free Setup</span>
                                </div>
                                <div class="flex items-center">
                                    <svg class="flex-shrink-0 w-3.5 h-3.5 text-blue-500 dark:text-blue-400 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                                    </svg>
                                    <span>Free WhatsApp Notifikasi</span>
                                </div>
                                <div class="flex items-center">
                                    <svg class="flex-shrink-0 w-3.5 h-3.5 text-blue-500 dark:text-blue-400 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                                    </svg>
                                    <span>No Additional Fee</span>
                                </div>
                                <a href="http://my.idneobilling.com/auth/login" class="purchase-button w-1/2 mx-auto justify-center bg-white text-red-600 px-6 py-2 my-4 rounded-full border border-red-600 hover:bg-red-600 hover:text-white transition-colors duration-300 cursor-pointer">
                                    Order Now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

        <!-- Card 6 -->
        <div class="card-wrapper group relative">
                    <div class="card light bg-white shadow-md shadow-orange-400 p-6 transform transition-transform duration-700 ease-in-out hover:scale-105 min-h-[400px]">
                        <div class="text-overlay text-center">
                            <h2 class="text-lg font-bold text-orange-300">Radius VPS-1</h2>
                            <h2 class="text-3xl mt-2 text-orange-600">Rp.450.000</h2>
                            <p class="text-sm text-orange-300">/Bulan</p>
                            <div class="details-text flex flex-col gap-2 text-gray-500 text-sm pt-3">
                                <!-- Icon di sebelah kiri teks -->
                                <div class="flex items-center">
                                    <svg class="flex-shrink-0 w-3.5 h-3.5 text-blue-500 dark:text-blue-400 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                                    </svg>
                                    <span>vCPU 4 - RAM 4GB</span>
                                </div>
                                <div class="flex items-center">
                                    <svg class="flex-shrink-0 w-3.5 h-3.5 text-blue-500 dark:text-blue-400 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                                    </svg>
                                    <span>Unlimited NAS</span>
                                </div>
                                <div class="flex items-center">
                                    <svg class="flex-shrink-0 w-3.5 h-3.5 text-blue-500 dark:text-blue-400 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                                    </svg>
                                    <span>Unlimited Users PPPoE</span>
                                </div>
                                <div class="flex items-center">
                                    <svg class="flex-shrink-0 w-3.5 h-3.5 text-blue-500 dark:text-blue-400 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                                    </svg>
                                    <span>Unlimited Users Hotspot</span>
                                </div>
                                <div class="flex items-center">
                                    <svg class="flex-shrink-0 w-3.5 h-3.5 text-blue-500 dark:text-blue-400 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                                    </svg>
                                    <span>Free VPN</span>
                                </div>
                                <div class="flex items-center">
                                    <svg class="flex-shrink-0 w-3.5 h-3.5 text-blue-500 dark:text-blue-400 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                                    </svg>
                                    <span>Free Setup</span>
                                </div>
                                <div class="flex items-center">
                                    <svg class="flex-shrink-0 w-3.5 h-3.5 text-blue-500 dark:text-blue-400 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                                    </svg>
                                    <span>Free WhatsApp Notifikasi</span>
                                </div>
                                <div class="flex items-center">
                                    <svg class="flex-shrink-0 w-3.5 h-3.5 text-blue-500 dark:text-blue-400 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                                    </svg>
                                    <span>No Additional Fee</span>
                                </div>
                                <a href="http://my.idneobilling.com/auth/login" class="purchase-button w-1/2 mx-auto justify-center bg-white text-red-600 px-6 py-2 my-4 rounded-full border border-red-600 hover:bg-red-600 hover:text-white transition-colors duration-300 cursor-pointer">
                                    Contact Us
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

        <!-- akhir container card dan div penutup  -->
        </div>

    <!-- container dua  -->
    <div class="pt-10 mt-6 ml-5 mr-5 lg:ml-8 lg:mr-9 bg-white transform transition-transform duration-700 ease-in-out hover:scale-105 shadow-md shadow-orange-400">
        <h2 class="text-lg font-bold text-orange-300 text-center">Radius Server Mandiri</h2>
        <h2 class="text-3xl mt-2 text-orange-600 text-center">Rp.250.000/bulan</h2>
        <p class="text-sm text-orange-300 text-center">Syarat dan ketentuan berlaku</p>

        <!-- div untuk kedua kontainer -->
        <div class="py-8 px-10 mx-auto max-w-screen-xl sm:py-16 lg:px-6 text-gray-500 text-sm">
        <div class="grid grid-cols-1 md:grid-cols-[4fr_2fr] gap-8 h-full">

        <!-- Kontainer Kiri: Teks dan List -->
        <div class="flex flex-col justify-between">
                <div>
                    <ul class="space-y-2 text-left text-gray-500 dark:text-gray-500">
                        <li class="flex items-center space-x-3 rtl:space-x-reverse">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                        </svg>
                            <span>Pelanggan harus menyiapkan PC/mini PC/Raspbery atau lain nya untuk dijadikan server</span>
                        </li>
                        <li class="flex items-center space-x-3 rtl:space-x-reverse">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                        </svg>
                            <span>Instalasi dilakukan oleh tim teknisi kami</span>
                        </li>
                        <li class="flex items-center space-x-3 rtl:space-x-reverse">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                        </svg>
                            <span>Sebelum instalasi, semua pembayaran harus sudah selesai</span>
                        </li>
                        <li class="flex items-center space-x-3 rtl:space-x-reverse">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                        </svg>
                            <span>Data server termasuk user dan password hanya kami yang pegang</span>
                        </li>
                        <li class="flex items-center space-x-3 rtl:space-x-reverse">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                        </svg>
                            <span>Jika system terjadi error kami bertanggung jawab untuk memperbaiki</span>
                        </li>
                        <li class="flex items-center space-x-3 rtl:space-x-reverse">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                        </svg>
                            <span>Kerjasama berkelanjutan, selama tiap bulan melakukan perpanjangan licence</span>
                        </li>
                    </ul>
                </div>
            </div>

        <!-- Kontainer Kanan -->
        <div class="flex flex-col justify-between">
                <div>
                    <ul class="space-y-2 text-left text-gray-500 dark:text-gray-500">
                        <li class="flex items-center space-x-3 rtl:space-x-reverse">
                            <svg class="flex-shrink-0 w-3.5 h-3.5 text-blue-500 dark:text-blue-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5"/>
                            </svg>
                            <span>Unlimited NAS</span>
                        </li>
                        <li class="flex items-center space-x-3 rtl:space-x-reverse">
                            <svg class="flex-shrink-0 w-3.5 h-3.5 text-blue-500 dark:text-blue-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5"/>
                            </svg>
                            <span>Unlimited Users PPPoE</span>
                        </li>
                        <li class="flex items-center space-x-3 rtl:space-x-reverse">
                            <svg class="flex-shrink-0 w-3.5 h-3.5 text-blue-500 dark:text-blue-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5"/>
                            </svg>
                            <span>Unlimited Users Hotspot</span>
                        </li>
                        <li class="flex items-center space-x-3 rtl:space-x-reverse">
                            <svg class="flex-shrink-0 w-3.5 h-3.5 text-blue-500 dark:text-blue-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5"/>
                            </svg>
                            <span>Free VPN</span>
                        </li>
                        <li class="flex items-center space-x-3 rtl:space-x-reverse">
                            <svg class="flex-shrink-0 w-3.5 h-3.5 text-blue-500 dark:text-blue-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5"/>
                            </svg>
                            <span>Setup Fee Rp 500.000</span>
                        </li>
                        <li class="flex items-center space-x-3 rtl:space-x-reverse">
                            <svg class="flex-shrink-0 w-3.5 h-3.5 text-blue-500 dark:text-blue-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5"/>
                            </svg>
                            <span>Free WhatsApp Notifikasi</span>
                        </li>
                        <li class="flex items-center space-x-3 rtl:space-x-reverse">
                            <svg class="flex-shrink-0 w-3.5 h-3.5 text-blue-500 dark:text-blue-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5"/>
                            </svg>
                            <span>No Additional Fee</span>
                        </li>
                    </ul>
                </div>
            </div>

<!-- pembungkus container awal dan button contact us -->
    </div>
        <!-- Tambahkan tombol di bagian bawah -->
        <div class="flex justify-center mt-6">
            <a href="http://my.idneobilling.com/auth/login" class="purchase-button mx-auto justify-center bg-white text-red-600 px-6 py-2 my-2 rounded-full border border-red-600 hover:bg-red-600 hover:text-white transition-colors duration-300 cursor-pointer">
                Contact Us
            </a>
        </div>
    </div>
    </div>

        <!-- div penutup paling awal -->
    </div>

</section>
</body>
</html>
