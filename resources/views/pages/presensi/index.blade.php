@extends('layouts.main')

@section('content')
    <!-- subject -->
    <div class="card-2" style="width: 1500px;">
        <h3>Judul Materi</h3>
        <div>
            <textarea style="height: 100px;" placeholder="Isi judul materi"></textarea>
        </div>
    </div>
    <!-- subject -->

    <!-- description subject -->
    <div class="card-2" style="width: 1500px;">
        <h3>Deskripsi Mapel Hari Ini</h3>
        <div>
            <textarea style="height: 200px;" placeholder="Isi Deskripsi...."></textarea>
        </div>
    </div>
    <!-- description subject -->

    <div class="d-flex justify-end button" style="max-width: 1500px;">
        <button class="btn-blue shadow">LANJUT</button>
    </div>
@endsection
