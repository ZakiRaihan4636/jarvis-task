<?php

namespace App\Http\Controllers;

use GuzzleHttp\Psr7\Response;
use Illuminate\Http\Request;

class MyprofileController extends Controller
{
    public function index()
    {
        $data = [
            'Nama' => 'Muhamad Zaki Raihan',
            'Alamat' => 'Bogor',
            'Gender' => 'Laki-Laki',
            'Agama' => 'Islam',
            'Tempat-lahir' => 'Bogor',
            'Tanggal-lahir' => '2004-01-19'
        ];

        return response()->json($data);
    }
}
