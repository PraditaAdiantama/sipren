@extends('layouts.main')

@section('content')
    <!-- subject -->
    <div class="card-2" style="width: 1500px;">
        <h3>Judul Materi</h3>
        <div>
            <textarea style="height: 100px;" placeholder="Isi judul materi" id="titleMatter"></textarea>
        </div>
    </div>
    <!-- subject -->

    <!-- description subject -->
    <div class="card-2" style="width: 1500px;">
        <h3>Deskripsi Mapel Hari Ini</h3>
        <div>
            <textarea style="height: 200px;" placeholder="Isi Deskripsi...." id="descriptionMatter"></textarea>
        </div>
    </div>
    <!-- description subject -->

    <div class="d-flex justify-end button" style="max-width: 1500px;">
        <button class="btn-blue shadow" id="confirmMatter">LANJUT</button>
    </div>

    <form action="{{ route('mapels.store') }}" style="display: none;" method="POST" id="materi-form">
        @csrf
        <input type="text" name="nama_mapel" id="materi-form-name">
        <input type="text" name="deskripsi" id="materi-form-description">
        <input type="text" name="id_kelas" id="materi-form-kelas">
    </form>
@endsection
