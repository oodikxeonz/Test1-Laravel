<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Clove extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $siswas = [
            ['nama' => 'Aulia', 'kelas' => 'XI RPL 1'],
            ['nama' => 'Budi', 'kelas' => 'XI RPL 2'],
            ['nama' => 'Tia', 'kelas' => 'XI RPL 3'],
            ['nama' => 'Doni', 'kelas' => 'XI RPL 1'],
            ['nama' => 'Eka', 'kelas' => 'XI RPL 2'],
            ['nama' => 'Fajar', 'kelas' => 'XI RPL 3'],
            ['nama' => 'Gina', 'kelas' => 'XI RPL 1'],
            ['nama' => 'Hani', 'kelas' => 'XI RPL 2 '],
            ['nama' => 'Iwan', 'kelas' => 'XI RPL 3'],
            ['nama' => 'Joko', 'kelas' => 'XI RPL 1'],
            ['nama' => 'Kiki', 'kelas' => 'XI RPL 2'],
            ['nama' => 'Pita', 'kelas' => 'XI RPL 3'],
            ['nama' => 'Maya', 'kelas' => 'XI RPL 1'],
            ['nama' => 'Nina', 'kelas' => 'XI RPL 2'],
            ['nama' => 'Omar', 'kelas' => 'XI RPL 3'],
            ['nama' => 'Putu', 'kelas' => 'XI RPL 1'],
            ['nama' => 'Qori', 'kelas' => 'XI RPL 2'],
            ['nama' => 'Rudi', 'kelas' => 'XI RPL 3'],
            ['nama' => 'Siti', 'kelas' => 'XI RPL 1'],
            ['nama' => 'Tina', 'kelas' => 'XI RPL 2'],
            ['nama' => 'Ramadhani ', 'kelas' => 'XI RPL 3'],
            ['nama' => 'Vina', 'kelas' => 'XI RPL 1'],
            ['nama' => 'Wawan', 'kelas' => 'XI RPL 2'],
            ['nama' => 'Xena', 'kelas' => 'XI RPL 3'],
            ['nama' => 'Yani', 'kelas' => 'XI RPL 1'],
            ['nama' => 'Zara', 'kelas' => 'XI RPL 2'],
            ['nama' => 'Hadi', 'kelas' => 'XI RPL 3']
            
        ];



        return view('home',
        ['title' => 'Home Laravel',
        ] , compact('siswas')
    );
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
