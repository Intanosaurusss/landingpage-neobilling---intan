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
        <!-- judul -->
        <div class="text-center pt-10 space-y-3">
        <h2 class="font-bold tracking-wide text-3xl text-orange-600 inline-block relative">
            Harga
            <span class="absolute left-1/2 transform -translate-x-1/2 -bottom-3 bg-orange-400 h-0.5 w-12"></span>
        </h2>
        </div>

        <!-- Container untuk cards --> 
<div class="grid grid-cols-1 sm:grid-cols-2 sm:px-8 px-4 lg:grid-cols-3 gap-8 pt-6">

<!-- Card 1 -->
@if (isset($data_card) && count($data_card) > 0)
@foreach ($data_card as $data_card)
<div class="card-wrapper group relative mt-3">
    <div class="card light bg-white shadow-md shadow-gray-300 hover:shadow-orange-400 p-6 transform transition-transform duration-700 ease-in-out hover:scale-105 h-full flex flex-col">
        <div class="text-overlay text-center flex-grow-0 flex flex-col justify-between">
            <h2 class="text-lg font-bold text-orange-300">{{ $data_card['name'] }}</h2>
            <h2 class="text-3xl mt-2 text-orange-600">Rp.{{ number_format($data_card['tariff'], 0, ',', '.') }}</h2>
            <p class="text-sm text-orange-300">
                @if ($data_card['year'] > 0)
                    {{ $data_card['year'] }} Tahun
                @endif
                @if ($data_card['month'] > 0)
                    {{ $data_card['month'] }} Bulan
                @endif
                @if ($data_card['day'] > 0)
                    {{ $data_card['day'] }} Hari
                @endif
            </p>
        </div>
        <div class="details-text flex flex-col gap-2 text-gray-500 text-sm pt-3 text-left flex-grow">
            @foreach (explode('</li>', strip_tags($data_card['description'], '<li>')) as $item)
                @if (!empty(trim($item)))
                    <div class="flex items-center" style="list-style-type: none; padding-left: 0;">
                        <svg class="flex-shrink-0 w-3.5 h-3.5 text-green-500 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5" />
                        </svg>
                        <span>{!! trim($item) !!}</span> <!-- Display the item content -->
                    </div>
                @endif
            @endforeach
        </div>
        <a href="http://my.idneobilling.com/auth/login" class="purchase-button w-full mx-auto justify-center text-white hover:text-white transition-colors duration-300 cursor-pointer text-center mt-auto">
            @if ($data_card['is_trial'])
                <p class="text-white bg-green-500 hover:bg-green-600 px-6 py-2 my-4 rounded-md">Paket Trial</p>
            @else
                <p class="text-white bg-red-500 hover:bg-red-600 px-6 py-2 my-4 rounded-md">Paket Berbayar</p>
            @endif
        </a>
    </div>
</div> 
@endforeach
@else
    <p class="text-center text-gray-500">Tidak ada paket yang tersedia saat ini.</p>
@endif
</div>

        <!-- akhir container card dan div penutup  -->
        </div>

    <!-- pembungkus container awal-->
    </div>
        
<!-- div penutup paling awal -->
</div>

</section>
</body>
</html>
