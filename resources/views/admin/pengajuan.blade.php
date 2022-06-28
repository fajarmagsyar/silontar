@extends('admin.layouts.main')
@section('content')

    <div class="container-fluid py-4">
        <div class="row mt-4">
            <div class="col-lg-12 mb-lg-0 mb-4">
                <div class="card ">
                    <div class="card-header pb-0 p-3">
                        <div class="d-flex justify-content-between">
                            <h6 class="mb-2">DATA PENGAJUAN</h6>
                        </div>
                    </div>
                    <div class="table-responsive mx-4">
                        <table class="table align-items-center ">
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="d-flex px-2 py-1 align-items-center">
                                            <div>
                                                <p class="text-xs font-weight-bold mb-0">#</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="text-center">
                                            <p class="text-xs font-weight-bold mb-0">Perusahaan</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="text-center">
                                            <p class="text-xs font-weight-bold mb-0">Data Pemohon</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="text-center">
                                            <p class="text-xs font-weight-bold mb-0">Kode</p>
                                        </div>
                                    </td>
                                    <td class="align-middle text-sm">
                                        <div class="col text-center">
                                            <p class="text-xs font-weight-bold mb-0">Jenis Permohonan</p>
                                        </div>
                                    </td>
                                    <td class="align-middle text-sm">
                                        <div class="col text-center">
                                            <p class="text-xs font-weight-bold mb-0">Status</p>
                                        </div>
                                    </td>
                                </tr>

                                @if (count($pengajuan) > 0)
                                    @foreach ($pengajuan as $no => $r)
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 py-1 align-items-center">
                                                    <div>
                                                        {{ $no = $no + 1 }}
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                {{ $r->nama_perusahaan }}
                                            </td>
                                            <td>
                                                <ol class="list-group list-group">
                                                    <li
                                                        class="list-group-item d-flex justify-content-between align-items-start">
                                                        <div class="ms-2 me-auto">
                                                            <div class="fw-bold">Nama Direktur</div>
                                                            {{ $r->nama_direktur }}
                                                            <br>
                                                            <div class="fw-bold">Alamat Perusahaan</div>
                                                            {{ $r->alamat_perusahaan }}
                                                        </div>
                                                    </li>
                                                </ol>
                                            </td>
                                            <td class="text-center">
                                                <i><code>{{ $r->kode }}</code></i>
                                            </td>

                                            <td class="align-middle text-center">
                                                <span class="badge bg-primary">{{ $r->jenis_permohonan }}</span>
                                            </td>
                                            <td class="align-middle text-sm">
                                                <div class="col text-center">
                                                    <a href="/admin/pengajuan/detail/{{ $r->permohonan_id }}"
                                                        class="btn btn-info"><i class="ni ni-app"></i> <br> Detail
                                                    </a>
                                                    <br>
                                                    @if ($r->permohonan == null)
                                                        <div class="badge bg-primary"><i class="ni ni-watch-time"></i> Belum
                                                            diproses</div>
                                                    @elseif ($r->permohonan == 'Setuju')
                                                        <div class="badge bg-success"><i class="ni ni-check-bold"></i>
                                                            Setuju
                                                        </div>
                                                    @elseif ($r->permohonan == 'Kembalikan Berkas')
                                                        <div class="badge bg-danger"><i class="ni ni-fat-remove"></i>
                                                            Kembalikan
                                                            Berkas</div>
                                                    @endif
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="5" class="text-center">
                                            Data belum ada, silahkan tunggu hingga user
                                            melakukan pengajuan.
                                        </td>
                                    </tr>
                                @endif

                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection('content')
