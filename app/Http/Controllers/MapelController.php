<?php

namespace App\Http\Controllers;

use App\Models\DetPresensi;
use App\Models\Mapel;
use App\Models\Presensi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Validator;

class MapelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        $validator = Validator::make($request->all(), [
            'nama_mapel' => "string|required|min:1",
            'deskripsi' => "string|required|min:1",
            'id_kelas' => "string|required|exists:kelas,id"
        ]);

        if($validator->fails()) return redirect()->back()->withErrors($validator->errors());

        $mapel = Mapel::create($validator->validated());

        $presensiData = [
            'kode_guru' => Auth::user()->kode_guru,
            'id_mapel' => $mapel->id,
            'id_kelas' => $request->id_kelas,
            'deskripsi' => $request->deskripsi,
            'hari_tanggal' => date('Y-m-d')
        ];

        $presensi = Presensi::create($presensiData);

        $siswas = $mapel->kelas->first()->siswas;

        $detPresensi = [];

        foreach($siswas as $siswa){
            array_push($detPresensi, DetPresensi::create([
                'nis_siswa' => $siswa->nis,
                'id_presensi' => $presensi->id,
                'keterangan' => 2
            ]));
        }

        return redirect()->route('presensi-data', $presensi->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Mapel $mapel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mapel $mapel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mapel $mapel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mapel $mapel)
    {
        //
    }
}
