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
                                            <p class="text-xs font-weight-bold mb-0">Data Pemohon</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="text-center">
                                            <p class="text-xs font-weight-bold mb-0">Berkas</p>
                                        </div>
                                    </td>
                                    <td class="align-middle text-sm">
                                        <div class="col text-center">
                                            <p class="text-xs font-weight-bold mb-0">Gambar</p>
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
                                                <ol class="list-group list-group">
                                                    <li
                                                        class="list-group-item d-flex justify-content-between align-items-start">
                                                        <div class="ms-2 me-auto">
                                                            <div class="fw-bold text-center text-dark py-2">
                                                                <span
                                                                    class="badge bg-primary">{{ $r->nama_perusahaan }}</span>
                                                            </div>
                                                            <div class="fw-bold">Nama Direktur</div>
                                                            {{ $r->nama_direktur }}
                                                            <br>
                                                            <div class="fw-bold">Alamat Perusahaan</div>
                                                            {{ $r->alamat_perusahaan }}
                                                            <br>
                                                            <div class="fw-bold">Lokasi Permohonan</div>
                                                            {{ $r->lokasi_permohonan }}
                                                            <div class="fw-bold">Jadwal Pelaksanaan</div>
                                                            {{ $r->jadwal_pelaksanaan }}
                                                        </div>
                                                    </li>
                                                </ol>
                                            </td>
                                            <td>
                                                <div class="ms-4">
                                                    <h6 class="text-sm mb-0">
                                                    </h6>
                                                    <ul class="list-group list-group-horizontal">
                                                        <li class="list-group-item text-center" style="width: 200px"><a
                                                                href="{{ $r->surat_permohonan }}"><i
                                                                    class="ni ni-cloud-download-95 float-start"></i> Surat
                                                                Permohonan</a>
                                                        </li>
                                                        <li class="list-group-item text-center" style="width: 200px"><a
                                                                href="{{ $r->surat_pernyataan }}"><i
                                                                    class="ni ni-cloud-download-95 float-start"></i> Surat
                                                                Pernyataan</a>
                                                        </li>
                                                    </ul>
                                                    <ul class="list-group list-group-horizontal-sm">
                                                        <li class="list-group-item text-center" style="width: 200px"><a
                                                                href="{{ $r->ktp }}"><i
                                                                    class="ni ni-cloud-download-95 float-start"></i> KTP</a>
                                                        </li>
                                                        <li class="list-group-item text-center" style="width: 200px"><a
                                                                href="{{ $r->npwp }}"><i
                                                                    class="ni ni-cloud-download-95 float-start"></i>
                                                                NPWP</a>
                                                        </li>
                                                    </ul>
                                                    <ul class="list-group list-group-horizontal-md">
                                                        <li class="list-group-item text-center" style="width: 200px"><a
                                                                href="{{ $r->kswp }}"><i
                                                                    class="ni ni-cloud-download-95 float-start"></i>
                                                                KSWP</a>
                                                        </li>
                                                        <li class="list-group-item text-center" style="width: 200px"><a
                                                                href="{{ $r->nib }}"><i
                                                                    class="ni ni-cloud-download-95 float-start"></i> NIB</a>
                                                        </li>
                                                    </ul>
                                                    <ul class="list-group list-group-horizontal-lg">
                                                        <li class="list-group-item text-center" style="width: 200px"><a
                                                                href="{{ $r->siup }}"><i
                                                                    class="ni ni-cloud-download-95 float-start"></i>
                                                                SIUP</a>
                                                        </li>
                                                        <li class="list-group-item text-center" style="width: 200px"><a
                                                                href="{{ $r->akta_perusahaan }}"><i
                                                                    class="ni ni-cloud-download-95 float-start"></i> Akta
                                                                Perusahaan</a>
                                                        </li>
                                                    </ul>

                                                </div>
                                            </td>

                                            <td class="align-middle text-sm">
                                                <div class="col">
                                                    <h6 class="text-sm mb-0">Gambar Lokasi</h6>
                                                    <a href="{{ $r->gambar_lokasi }}">
                                                        <img src="{{ $r->gambar_lokasi }}" width="100px" alt="">
                                                    </a>
                                                    <h6 class="text-sm mb-0 mt-3">Gambar Konstruksi</h6>
                                                    <a href="{{ $r->gambar_konstruksi }}">
                                                        <img src="{{ $r->gambar_konstruksi }}" width="100px"
                                                            alt="">
                                                    </a>
                                                </div>
                                            </td>
                                            <td class="align-middle text-sm">
                                                <div class="col text-center">
                                                    <a href="/admin/pengajuan/detail/{{ $r->permohonan_id }}"
                                                        class="btn btn-info"><i class="ni ni-app"></i> <br> Detail
                                                        Status
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
