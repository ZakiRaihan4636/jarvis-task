<?php

namespace App\Http\Controllers;

use App\Models\Pustakawan;
use App\Models\Pustakawans;
use Illuminate\Http\Request;

class PustakawanController extends Controller
{
    public function index()
    {
        $data = Pustakawans::all();

        return response()->json([
            'message' => 'Get all resources',
            'status_code' => true,
            'data' => $data,
        ], 200);
    }

    public function store(Request $request)
    {
        $input = [
            'nama' => $request->nama,
            'gender' => $request->gender,
            'ship' => $request->ship
        ];

        $data = Pustakawans::create($input);

        $result = [
            "message" => "Create resource sucsessfully",
            "data" => $data,
        ];

        return response()->json($result, 201);
    }

    public function show($id)
    {
        $data = Pustakawans::find($id);

        return response()->json($data);
    }
}
