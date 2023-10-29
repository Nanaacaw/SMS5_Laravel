<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BiodataController extends Controller
{
    public function index()
    {
        $content['biodatas'] =
            [
                [
                    'nama' => "Nana Casmana Ade Wikarta",
                    'jk' => "Laki - laki",
                    'ttl' => "Majalengka, 15 Oktober 2002",
                    'alamat' => "Jln. Bekasi",
                ],
                [
                    'nama' => "Leilaa",
                    'jk' => "Perempuan",
                    'ttl' => "Majalengka, 25 Oktober 2005",
                    'alamat' => "Jln. Bogor",
                ],
                [
                    'nama' => "Lulul",
                    'jk' => "Perempuan",
                    'ttl' => "Bekasi, 25 Oktober 2005",
                    'alamat' => "Jln. Bogor",
                ],
            ];
        return view('content', $content);
    }
}
