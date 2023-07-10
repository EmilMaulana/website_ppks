<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (!auth()->check()) {
            // Kirim pesan notifikasi ke sesi
            Session::flash('message', 'Silahkan login untuk melihat halaman.');

            // Arahkan pengguna ke halaman login
            return redirect()->route('login');
        }

        return view('front.laporan', [
            "title" => "Satgas Pencegahan dan Penanganan Kekerasan Seksual Universitas Singaperbangsa Karawang",
            "active" => "home"
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
        // return $request;
        $validatedData = $request->validate([
            'nama' => 'max:255',
            'usia' => 'required',
            'jenis_kelamin' => 'required',
            'npm' => 'size:13',
            'tempat' => 'required',
            'tanggal' => 'required',
            'waktu' => 'required',
            'jenis_kasus' => 'required',
            'ciri_pelaku' => 'required',
            'kronologi' => 'required',
            'image' => 'required',
        ]);

        $validatedData['user_id'] = auth()->user()->id;

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('bukti-images');
        }

        Laporan::create($validatedData);

        return redirect('/lapor')->with('success', 'Laporan Anda Telah Tersampaikan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Laporan $laporan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Laporan $laporan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Laporan $laporan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Laporan $laporan)
    {
        //
    }
}
