@extends('layouts.main')
@section('konten')
    @php
    use App\Models\PermohonanDetail;
    @endphp
    @if (session()->has('success'))
        <script>
            Swal.fire('Berhasil', 'Berkas berhasil di unggah', 'success');
        </script>
    @endif
    <div class="container mb-3 mt-4">
        <div class="row">
            <div class="col-8 mx-auto mb-3 mt-3">
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card my-5 shadow p-4">
                        <div class="card-body">
                            <h3 class="mb-5"><b> LIST PENGAJUAN</b>

                                <a href="/pengajuan" class="btn shadow btn-primary text-white float-end"><i
                                        class="bi bi-plus"></i>
                                    Tambah Pengajuan</a>
                            </h3>

                            @if (count($pengajuan) > 0)
                                <div class="table-responsive">

                                    <table class="table align-items-center ">
                                        <tbody>
                                            <tr>
                                                <th>
                                                    <div class="d-flex px-2 py-1 align-items-center">
                                                        <div>
                                                            <p class="text-xs font-weight-bold mb-0">#</p>
                                                        </div>
                                                    </div>
                                                </th>
                                                <th>
                                                    <div class="text-center">
                                                        <p class="text-xs font-weight-bold mb-0">Kode</p>
                                                    </div>
                                                </th>
                                                <th>
                                                    <div class="text-center">
                                                        <p class="text-xs font-weight-bold mb-0">Tanggal</p>
                                                    </div>
                                                </th>
                                                <th class="align-middle text-sm">
                                                    <div class="col text-center">
                                                        <p class="text-xs font-weight-bold mb-0">Jenis</p>
                                                    </div>
                                                </th>
                                                <th class="align-middle text-sm">
                                                    <div class="col text-center">
                                                        <p class="text-xs font-weight-bold mb-0">Status</p>
                                                    </div>
                                                </th>
                                            </tr>

                                            @foreach ($pengajuan as $no => $r)
                                                <tr>
                                                    <th class="align-middle">
                                                        <div class="d-flex px-2 py-1 align-middle">
                                                            <div>
                                                                {{ $no = $no + 1 }}
                                                            </div>
                                                        </div>
                                                    </th>
                                                    <td class="align-middle">
                                                        <a style="color: blue !important"
                                                            href="/pengajuan/list/{{ $r->permohonan_id }}"><sup><i
                                                                    class="bi bi-link-45deg"></i></sup>{{ $r->kode }}</a>
                                                    </td>
                                                    <td class="align-middle text-center">
                                                        {{ $r->created_at }}
                                                    </td>

                                                    <td class="align-middle text-sm text-center">
                                                        {{ $r->jenis_permohonan }}
                                                    </td>
                                                    <td class="align-middle text-center">
                                                        @if ($r->permohonan == null)
                                                            <div class="badge bg-primary"><i class="bi bi-clock-fill"></i>
                                                                Menunggu Verifikasi</div>
                                                        @elseif ($r->permohonan == 'Setuju')
                                                            <div class="badge bg-success"><i class="ni ni-check-bold"></i>
                                                                Setuju
                                                            </div>
                                                        @elseif ($r->permohonan == 'Kembalikan Berkas')
                                                            <div class="badge bg-danger"><i class="ni ni-fat-remove"></i>
                                                                Kembalikan
                                                                Berkas</div>
                                                        @endif
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            @else
                                <div class="alert alert-warning text-center">
                                    <h2><i class="bi bi-exclamation-triangle-fill"></i></h2>
                                    <h5>Belum ada pengajuan yang dilakukan</h5>
                                </div>
                            @endif

                            <center>{{ $pengajuan->links() }}</center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection('konten')
