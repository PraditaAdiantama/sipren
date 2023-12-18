@extends('layouts.main')

@section('content')
    <div>
        @if ($errors->any())
            <script>
                let errorModal = true;
            </script>
            <x-modal-confirmation id="error_presensi">
                <h3>
                    {{ $errors->first() }}
                </h3>
                <div>
                    <button onclick="error_presensi.close()" class="shadow">Batal</button>
                </div>
            </x-modal-confirmation>
        @endif

        <h3>Daftar Hadir Siswa</h3>

        <x-modal-confirmation id="proses_presensi">
            <h3>
                Tunggu sebentar, sedang melakukan presensi.
            </h3>
            <div>
                <button style="display: none"></button>
            </div>
        </x-modal-confirmation>
        <!-- table -->
        <x-table :columns="['NO', 'NIS', 'NAMA SISWA', 'TIME', 'ACT']">
            @forelse ($presensied as $key => $presensi)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $presensi['nis'] }}</td>
                    <td>{{ $presensi['nama'] }}</td>
                    <td>{{ (new DateTime($presensi['pivot']['updated_at']))->format('H:i') }}</td>
                    <td>
                        <button onclick="delete_confirm_{{ $presensi['pivot']['id'] }}.showModal()">
                            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 45 40"
                                fill="none">
                                <path d="M0 0H45V45H0V0Z" fill="white" fill-opacity="0.01" />
                                <path d="M13.125 10.3125L3.75 22.5L13.125 34.6875H41.25V10.3125H13.125Z" fill="#FF2F2F"
                                    stroke="black" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M19.687 17.8125L29.062 27.1875" stroke="white" stroke-width="4"
                                    stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M29.062 17.8125L19.687 27.1875" stroke="white" stroke-width="4"
                                    stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M0 37H45V82H0V37Z" fill="white" fill-opacity="0.01" />
                            </svg>
                        </button>
                        <x-modal-confirmation id="delete_confirm_{{ $presensi['pivot']['id'] }}">
                            <form action="{{ route('presensi.delete', $presensi['pivot']['id']) }}"
                                id="delete_confirm_{{ $presensi['pivot']['id'] }}-form" method="POST">
                                @csrf
                                @method('DELETE')
                            </form>
                            <h3>
                                Apakah kamu yakin ingin menghapus siswa ini dari presensi?
                            </h3>
                            <div>
                                <button onclick="delete_confirm_{{ $presensi['pivot']['id'] }}.close()"
                                    class="shadow">Batal</button>
                                <button type="submit" class="shadow"
                                    form="delete_confirm_{{ $presensi['pivot']['id'] }}-form">Hapus</button>
                            </div>
                        </x-modal-confirmation>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="100%" style="height: 50px">
                        Belum ada yang presensi
                    </td>
                </tr>
            @endforelse
        </x-table>
        <!-- table -->
    </div>
    <div>
        <form action="{{ route('presensi.update', Route::current()->parameter('presensi')) }}" id="presensi-form"
            method="POST" style="display: none; !important">
            @method('PUT')
            @csrf
            <input type="number" id="rfid-input" name="rfid" style="display: none;">
        </form>
        <h3>Daftar Siswa Tidak Hadir</h3>
        <!-- table -->
        <x-presensi.data.unpresensied-table detail_presensi=$detail_presensi />
        <!-- table -->
    </div>
    <div class="d-flex" style="align-items: end;padding-right: 10px;height: fit-content !important;">
        <button class="btn-blue shadow">Kirim</button>
    </div>
@endsection
