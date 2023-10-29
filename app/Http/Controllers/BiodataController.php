<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BiodataController extends Controller
{
    public function index()
    {
        //array asosisatif
        $content['biodatas'] =
            [
                [
                    'nama' => "Nana Casmana Ade Wikarta",
                    'jk' => "Laki - laki",
                    'ttl' => "Majalengka, 15 Oktober 2002",
                    'alamat' => "Jln. Bekasi",
                ],
                [
                    'nama' => "Anselma",
                    'jk' => "Perempuan",
                    'ttl' => "Majalengka, 25 Oktober 2005",
                    'alamat' => "Jln. Bogor",
                ],
                [
                    'nama' => "Vonzy",
                    'jk' => "Perempuan",
                    'ttl' => "Bekasi, 25 Maret 2003",
                    'alamat' => "Jln. Begal",
                ],
            ];
        return view('content', $content);
    }
}
