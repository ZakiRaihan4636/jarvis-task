<?php

namespace App\Http\Controllers;

use App\Models\Pustakawan;
use Illuminate\Http\Request;

class PustakawanController extends Controller
{
    public function index()
    {
        //get all data in pustakawan
        $data = Pustakawan::all();

        return response()->json([
            'message' => 'Get all resources',
            'status_code' => true,
            'data' => $data,
        ], 200);
    }
}
