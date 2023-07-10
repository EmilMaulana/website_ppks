<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laporan;

class AdminLaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.admin.laporan.index', [
            "title" => "Satgas Pencegahan dan Penanganan Kekerasan Seksual Universitas Singaperbangsa Karawang",
            'laporans' => Laporan::latest()->paginate(10)
        ]);
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
    public function show(Laporan $laporan)
    {
        // return $laporan;
        return view('dashboard.admin.laporan.edit', [
            'title' => $laporan->jenis_kasus,
            'laporan' => $laporan
        ]);
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
    public function update(Request $request, Laporan $laporan)
    {
        // return $request;
        $validatedData = $request->validate([
            // 'user_id' => 'required',
            'status_id' => 'required',
            // 'nama' => 'max:255',
            // 'usia' => 'required',
            // 'jenis_kelamin' => 'required',
            // 'npm' => 'size:13',
            // 'tempat' => 'required',
            // 'tanggal' => 'required',
            // 'waktu' => 'required',
            // 'jenis_kasus' => 'required',
            // 'ciri_pelaku' => 'required',
            // 'kronologi' => 'required',
            // 'image' => 'required',
        ]);


        // $validatedData['user_id'] = auth()->user()->id;

        // return $validatedData;

        Laporan::where('id', $laporan->id)
            ->update($validatedData);

        return redirect('/home/laporan-masuk')->with('success', 'Laporan Berhasil Di Edit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
