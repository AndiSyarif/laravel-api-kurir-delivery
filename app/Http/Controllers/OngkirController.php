<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class OngkirController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $url = 'https://api.rajaongkir.com/starter/province';
        $apiKey = 'fe026c21da771559279c1ef7f5b8748f';

        $response = Http::withHeaders([
            'key' => $apiKey,
        ])->get($url);

        // Check if the request was successful (status code 200)
        if ($response->successful()) {
            $data = $response->json(); // Get the response data as an array or object
            // Now you can work with $data as needed
            dd($data['rajaongkir']['results']);
            return response()->json($data);
        } else {
            // If the request was not successful, handle the error
            $statusCode = $response->status();
            $errorResponse = $response->json(); // Get the error response data
            return response()->json(['error' => $errorResponse, 'status_code' => $statusCode], $statusCode);
        }

        //return view('ongkir.ongkir');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
