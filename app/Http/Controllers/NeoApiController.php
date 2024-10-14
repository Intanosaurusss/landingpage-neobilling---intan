<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class NeoApiController extends Controller
{
    public function getData()
    {
        try {
            // Inisiasi GuzzleHttp Client
            $client = new Client();
            // Mengirimkan request GET ke API
            $response = $client->request('GET', 'https://my.idneobilling.com/api/open/license/list');
            // Mendecode data JSON dari response API
            $data = json_decode($response->getBody()->getContents(), true);

            // Mengambil data 'data' dari response API
            if (isset($data['data'])) {
                $data_card = $data['data'];  // Data packages diambil dari 'data'
            } else {
                $data_card = [];
            }
        } catch (\Exception $e) {
            \Log::error('Gagal mengambil data dari API: ' . $e->getMessage());
            $data_card = [];
        }

        // Mengembalikan view 'components.price' dan mengirimkan data 'packages'
        return view('welcome', compact('data_card'));
    }
}
