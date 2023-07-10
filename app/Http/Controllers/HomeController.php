<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laporan;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('dashboard.index', [
            "title" => "Satgas Pencegahan dan Penanganan Kekerasan Seksual Universitas Singaperbangsa Karawang",
            'laporan' => Laporan::count(),
            'pelapor' => User::count(),
            'selesai' => Laporan::where('status_id', '2')->count(),
            'diproses' => Laporan::where('status_id', '1')->count(),
            'users' => User::latest()->get(),
            'admins' => User::where('is_admin', '1')->get(),
        ]);
    }
}
