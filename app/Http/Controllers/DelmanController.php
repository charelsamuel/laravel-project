<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DelmanController extends Controller
{
    public function isiTabel()
    {
        $data = [
            [
                'nama' => 'Delman 1',
                'warna' => 'Merah',
            ],
            [
                'nama' => 'Delman 2',
                'warna' => 'Biru',
            ],
            // Tambahkan data lain sesuai kebutuhan
        ];

        Delman::insert($data);

        return "Tabel 'delman' berhasil diisi.";
    }


}