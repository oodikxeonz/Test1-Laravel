<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Sage extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {$siswabu = [
            ['nama' => 'Aoddi', 'kelas' => 'XI RPL'],
            ['nama' => 'Faiz', 'kelas' => 'XI RPL'],
            ['nama' => 'Rais', 'kelas' => 'XI RPL'],
            ['nama' => 'Rafay', 'kelas' => 'XI RPL'],
            ['nama' => 'Bima', 'kelas' => 'XI RPL'],
            ['nama' => 'Ali', 'kelas' => 'XI RPL'],
            ['nama' => 'Faisap', 'kelas' => 'XI RPL'],
            ['nama' => 'Glenn', 'kelas' => 'XI RPL'],
            ['nama' => 'TuanMuda', 'kelas' => 'XI RPL'],
            ['nama' => 'Yusuf', 'kelas' => 'XI RPL'],
            ['nama' => 'Sattar', 'kelas' => 'XI RPL'],
            ['nama' => 'Shabira', 'kelas' => 'XI RPL'],
            ['nama' => 'ghani', 'kelas' => 'XI RPL'],
            ['nama' => 'Rangga', 'kelas' => 'XI RPL'],
            ['nama' => 'Tristas', 'kelas' => 'XI RPL'],
            ['nama' => 'Rafasyah', 'kelas' => 'XI RPL'],
            ['nama' => 'Rafa', 'kelas' => 'XI RPL'],
            ['nama' => 'Denis', 'kelas' => 'XI RPL'],
            ['nama' => 'Aksaj', 'kelas' => 'XI RPL'],
            ['nama' => 'Azzam', 'kelas' => 'XI RPL'],
            ['nama' => 'Keyza', 'kelas' => 'XI RPL'],
            ['nama' => 'Raditc', 'kelas' => 'XI RPL'],
            ['nama' => 'Adit', 'kelas' => 'XI RPL'],
            ['nama' => 'Rafka', 'kelas' => 'XI RPL'],
            ['nama' => 'Hazel', 'kelas' => 'XI RPL'],
            ['nama' => 'Thoriq', 'kelas' => 'XI RPL'],
            ['nama' => 'TuanMuda', 'kelas' => 'XI RPL'],
            ['nama' => 'zia', 'kelas' => 'XI RPL'],
            ['nama' => 'Yunita', 'kelas' => 'XI RPL'],
            
        ];



        return view('about',
        ['title' => 'Daftar Siswa XI RPL',
        ] , compact('siswabu')
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
