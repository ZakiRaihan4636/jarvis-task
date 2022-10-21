<?php

namespace App\Http\Controllers;

use GuzzleHttp\Psr7\Response;
use Illuminate\Http\Request;

class BiodataController extends Controller
{
    public function index()
    {
        $data = [
            "Name" => "Muhamad Zaki Raihan",
            "Gender" => "Laki-Laki",
            "address" => "Islam",
            "is_student" => true,
        ];

        return response()->json($data);
    }
}
