<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PelangganController extends Controller
{
    public function index()
    {
        $pelanggan = $this->dataPelanggan();
        return view('pelanggan.index', ["pelanggan" => $pelanggan]);
    }
    public function dataPelanggan()
    {
        $pelanggan = ['hazard', 'Anelka', 'lampart', 'Tuchel'];
        return $pelanggan;
    }
}
