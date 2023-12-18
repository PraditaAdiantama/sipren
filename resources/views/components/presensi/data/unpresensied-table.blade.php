<x-table :columns="['NO', 'NIS', 'NAMA SISWA', 'KETERANGAN', 'ACT']">
    @forelse ($detail_presensi as $key => $presensi)
        <tr>
            <td>{{ $key + 1 }}</td>
            <td>{{ $presensi['nis'] }}</td>
            <td>{{ $presensi['nama'] }}</td>
            <td>{{ $presensi['pivot']['keterangan'] }}</td>
            <td>
                <button>
                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 45 40" fill="none">
                        <path d="M0 0H45V45H0V0Z" fill="white" fill-opacity="0.01" />
                        <path d="M13.125 10.3125L3.75 22.5L13.125 34.6875H41.25V10.3125H13.125Z" fill="#FF2F2F"
                            stroke="black" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M19.687 17.8125L29.062 27.1875" stroke="white" stroke-width="4" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M29.062 17.8125L19.687 27.1875" stroke="white" stroke-width="4" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M0 37H45V82H0V37Z" fill="white" fill-opacity="0.01" />
                    </svg>
                </button>
            </td>

        </tr>
    @empty
        <tr>
            <td colspan="100%" style="height: 50px">
                Siswa hadir semua
            </td>
        </tr>
    @endforelse
</x-table>
