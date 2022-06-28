<table>
    <thead>
        <tr>
            <th rowspan="3">NO</th>
            <th rowspan="3">TGL</th>
            <th rowspan="3">NAMA PEMOHON</th>
            <th rowspan="3">JENIS KELOMPOK PERIZINAN</th>
            <th colspan="6">
                KELENGKAPAN DATA</th>
            <th colspan="10">
                PROSES PERIZINAN</th>
        </tr>
        <tr>
            <th colspan="3">
                ADMINISTRASI</th>
            <th colspan="3">
                TEKNIS</th>
            <th rowspan="2">UNDANGAN PERSIAPAN SURVEI</th>
            <th rowspan="2">BA SURVEI</th>
            <th rowspan="2">BA PEMBAHASAN SURVEI</th>
            <th rowspan="2">PERSETUJUAN IZIN PRINSIP</th>
            <th rowspan="2">PERUBAHAN GAMBAR</th>
            <th rowspan="2">REKOMTEK</th>
            <th rowspan="2">SURAT PERMOHONAN KE KPKNL</th>
            <th rowspan="2">SURAT PERMOHONAN KE SETDITJEN</th>
            <th rowspan="2">SURAT PERNYATAAN SIAP MEMBAYAR</th>
            <th rowspan="2">SURAT IZIN PEMBANGUNAN</th>
        </tr>
        <tr>
            <th>SITU & SIUP</th>
            <th>AKTA</th>
            <th>NPWP & KSWP</th>
            <th>GAMBAR</th>
            <th>METODE PELAKSANAAN</th>
            <th>JADWAL PELAKSANAAN</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($pengajuan as $key => $r)
            <tr>
                <td>{{ $key = $key + 1 }}</td>
                <td>{{ $r->permohonan }}</td>
                <td>{{ $r->permohonan }}</td>
                <td>{{ $r->permohonan }}</td>
                <td>{{ $r->permohonan }}</td>
                <td>{{ $r->permohonan }}</td>
                <td>{{ $r->permohonan }}</td>
                <td>{{ $r->permohonan }}</td>
                <td>{{ $r->permohonan }}</td>
                <td>{{ $r->permohonan }}</td>
                <td>{{ $r->permohonan }}</td>
                <td>{{ $r->permohonan }}</td>
                <td>{{ $r->permohonan }}</td>
                <td>{{ $r->permohonan }}</td>
                <td>{{ $r->permohonan }}</td>
                <td>{{ $r->permohonan }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
