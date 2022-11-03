<?php

namespace App\Http\Controllers;

use App\Models\Books;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function index()
    {
        //get all data in books
        $buku = Books::all();

        //send 201 if books table
        if (count($buku) == 0) {
            return response()->json([
                'message' => 'Get all resources',
                'data' => $buku,
            ], 204);
        }


        return response()->json([
            'message' => 'Get all resources',
            'data' => $buku,
        ]);
    }

    public function store(Request $request)
    {

        $input = [
            'title' => $request->title,
            'author' => $request->author,
            'publisher' => $request->publisher,
            'rating' => $request->rating,
            'published_date' => $request->published_date
        ];

        $buku = Books::create($input);

        $data = [
            "massage" => "Create is sucsessfully",
            "data" => $buku,
        ];

        return response()->json($data, 201);
    }

    public function show($id)
    {
        $buku = Books::find($id);

        $data = [
            "massage" => "Show resources by id $id",
            "data" => $buku
        ];

        return response()->json($data, 200);
    }
}
