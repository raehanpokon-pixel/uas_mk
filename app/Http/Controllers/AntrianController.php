<?php

namespace App\Http\Controllers;

use App\Models\Antrian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AntrianController extends Controller
{
    public function create()
    {
        return view('antrian.queue');
    }

    public function store(Request $request)
    {
        $request->validate([
            'layanan'       => 'required|string|max:255',
            'nama_lengkap'  => 'required|string|max:255',
            'nik'           => 'nullable|string|max:20',
            'tanggal_lahir' => 'nullable|date',
            'no_hp'         => 'required|string|max:20',
        ]);

        // TRANSAKSI + LOCK AGAR AMAN DARI DUPLIKASI
        $result = DB::transaction(function () use ($request) {

            // Prefix: huruf pertama dari layanan, uppercase
            $prefix = strtoupper(substr($request->layanan, 0, 1));

            // Cari nomor antrian terakhir HARI INI berdasarkan prefix
            $last = Antrian::where('nomor_antrian', 'LIKE', "{$prefix}-%")
                ->whereDate('created_at', now()->toDateString()) // reset per hari
                ->lockForUpdate()
                ->orderBy('nomor_antrian', 'desc')
                ->first();

            // Hitung nomor berikutnya
            if ($last && preg_match('/-([0-9]+)$/', $last->nomor_antrian, $m)) {
                $nextNumber = intval($m[1]) + 1;
            } else {
                $nextNumber = 1;
            }

            $nomorAntrian = $prefix . '-' . $nextNumber;

            // Simpan antrian
            $antrian = Antrian::create([
                'layanan'       => $request->layanan,
                'nama_lengkap'  => $request->nama_lengkap,
                'nik'           => $request->nik,
                'tanggal_lahir' => $request->tanggal_lahir,
                'no_hp'         => $request->no_hp,
                'nomor_antrian' => $nomorAntrian,
            ]);

            return $antrian;
        }, 5);

        return redirect()
            ->route('antrian.success', $result->id)
            ->with('success', "Nomor antrian Anda: {$result->nomor_antrian}");
    }

    public function success($id)
    {
        $antrian = Antrian::findOrFail($id);
        return view('antrian.success', compact('antrian'));
    }
}
