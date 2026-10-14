<?php

namespace App\Http\Controllers\Api; 

use App\Http\Controllers\Controller;
use App\Http\Requests\Kendaraan;
use App\Http\Requests\UpdateKendaraan;

class ApiSewaController extends Controller

// GET /api/SewaKendaraan
{
    public function index(Request $request)
    {
        $query = Kendaraan::with('kategori')
            ->withCount('penyewaan');

        // Pencarian berdasarkan jenis kendaraan
        if ($request->filled('cari')) {
            $cari = $request->query('cari');

            $query->where(function ($q) use ($cari) {
                $q->where('namakendaraan', 'like', "%{$cari}%")
                  ->orWhere('penyewaan', 'like', "%{$cari}%");
            });
        }
 // POST /api/kendaraan
    public function store(StoreKendaraanRequest $request)
    {
        $buku = Buku::create($request->validated());

        $buku->load('kategori')
             ->loadCount('penyewaan');

        return response()->json([
            'message' => 'kendaraan berhasil ditambahkan.',
            'data' => $kendaraan,
        ], 201);
    }