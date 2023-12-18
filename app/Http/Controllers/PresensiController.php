<?php

namespace App\Http\Controllers;

use App\Models\DetPresensi;
use App\Models\Mapel;
use App\Models\Presensi;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class PresensiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.presensi.index', [
            'title' => 'presensi'
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
    public function show(Presensi $presensi)
    {
        $mapel = Mapel::latest()->with('kelas')->take(1)->first();

        $siswas = $presensi->siswas;
        
        $presensied = array_filter($siswas->toArray(), function ($siswa) {
            return  $siswa['pivot']['keterangan'] == 0;
        });
        
        $detailPresensi = array_filter($siswas->toArray(), function ($siswa) {
            return  $siswa['pivot']['keterangan'] != 0;
        });


        return view('pages.presensi.data', [
            'title' => 'presensi-data',
            'mapel' => $mapel,
            'detail_presensi' => collect($detailPresensi),
            'presensied' => collect($presensied)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Presensi $presensi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Presensi $presensi)
    {
        $validator = Validator::make($request->all(), [
            'rfid' => "required|min:9",
        ]);

        if ($validator->fails()) return redirect()->back()->withErrors($validator->errors());

        $siswa = $presensi->siswas->where('rfid', $request->rfid)->first();

        if (!$siswa) return redirect()->back()->withErrors('Kamu bukan bagian dari kelas ini');
        if ($siswa->pivot->keterangan == 0) return redirect()->back()->withErrors('Kamu sudah melakukan absensi');

        $siswa->presensi()->updateExistingPivot($presensi->id, ['keterangan' => 0, 'updated_at' => now()]);

        return redirect()->back()->with('success', 'Berhasil presensi');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $detPresensi = DetPresensi::where('id', $id)->first();

        $detPresensi->update([
            'keterangan' => 2
        ]);

        return redirect()->back();
    }
}
