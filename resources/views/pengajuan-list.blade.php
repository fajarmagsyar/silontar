@extends('layouts.main')
@section('konten')
    <div class="container mb-3 mt-4">
        <div class="row">
            <div class="col-8 mx-auto mb-3 mt-3">
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card my-5 shadow p-4">
                        <div class="card-body">
                            <h3 class="mb-5"><b><a href=""><i class="bi bi-arrow-left mr-2"></i></a> LIST
                                    PENGAJUAN</b>
                            </h3>


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
                                                <p class="text-xs font-weight-bold mb-0">Data Pemohon</p>
                                            </div>
                                        </th>
                                        <th>
                                            <div class="text-center">
                                                <p class="text-xs font-weight-bold mb-0">Berkas</p>
                                            </div>
                                        </th>
                                        <th class="align-middle text-sm">
                                            <div class="col text-center">
                                                <p class="text-xs font-weight-bold mb-0">Gambar</p>
                                            </div>
                                        </th>
                                        <th class="align-middle text-sm">
                                            <div class="col text-center">
                                                <p class="text-xs font-weight-bold mb-0">Status</p>
                                            </div>
                                        </th>
                                        <th class="align-middle text-sm">
                                            <div class="col text-center">
                                                <p class="text-xs font-weight-bold mb-0"></p>
                                            </div>
                                        </th>
                                    </tr>

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
                                            <td class="align-middle">
                                                <div class="ms-4">
                                                    <h6 class="text-sm mb-0">
                                                    </h6>
                                                    <ul class="list-group list-group-horizontal">
                                                        <li class="list-group-item text-center" style="width: 200px"><a
                                                                class="text-dark"
                                                                href="{{ $r->surat_permohonan }}"><i
                                                                    class="bi bi-file-arrow-down-fill float-start"></i>
                                                                Surat
                                                                Permohonan</a>
                                                        </li>
                                                        <li class="list-group-item text-center" style="width: 200px"><a
                                                                class="text-dark"
                                                                href="{{ $r->surat_pernyataan }}"><i
                                                                    class="bi bi-file-arrow-down-fill float-start"></i>
                                                                Surat
                                                                Pernyataan</a>
                                                        </li>
                                                    </ul>
                                                    <ul class="list-group list-group-horizontal-sm">
                                                        <li class="list-group-item text-center" style="width: 200px"><a
                                                                class="text-dark" href="{{ $r->ktp }}"><i
                                                                    class="bi bi-file-arrow-down-fill float-start"></i>
                                                                KTP</a>
                                                        </li>
                                                        <li class="list-group-item text-center" style="width: 200px"><a
                                                                class="text-dark" href="{{ $r->npwp }}"><i
                                                                    class="bi bi-file-arrow-down-fill float-start"></i>
                                                                NPWP</a>
                                                        </li>
                                                    </ul>
                                                    <ul class="list-group list-group-horizontal-md">
                                                        <li class="list-group-item text-center" style="width: 200px"><a
                                                                class="text-dark" href="{{ $r->kswp }}"><i
                                                                    class="bi bi-file-arrow-down-fill float-start"></i>
                                                                KSWP</a>
                                                        </li>
                                                        <li class="list-group-item text-center" style="width: 200px"><a
                                                                class="text-dark" href="{{ $r->nib }}"><i
                                                                    class="bi bi-file-arrow-down-fill float-start"></i>
                                                                NIB</a>
                                                        </li>
                                                    </ul>
                                                    <ul class="list-group list-group-horizontal-lg">
                                                        <li class="list-group-item text-center" style="width: 200px"><a
                                                                class="text-dark" href="{{ $r->siup }}"><i
                                                                    class="bi bi-file-arrow-down-fill float-start"></i>
                                                                SIUP</a>
                                                        </li>
                                                        <li class="list-group-item text-center" style="width: 200px"><a
                                                                class="text-dark"
                                                                href="{{ $r->akta_perusahaan }}"><i
                                                                    class="bi bi-file-arrow-down-fill float-start"></i> Akta
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
                                                        <img src="{{ $r->gambar_konstruksi }}" width="100px" alt="">
                                                    </a>
                                                </div>
                                            </td>
                                            <td class="align-middle text-sm">
                                                <div class="col">
                                                    <button class="btn btn-info text-white"><i class="bi bi-search"></i>
                                                        Cek
                                                        Status</button>
                                                </div>
                                            </td>
                                            <td class="align-middle text-sm">
                                                <div class="col text-center">
                                                    <h6 class="text-sm mb-0">
                                                        <a href="/pengajuan/delete/{{ $r->permohonan_id }}"
                                                            onclick="return confirm('Apakah anda yakin membatalkan pengajuan ini?')"
                                                            class="btn btn-danger"><i class="bi bi-trash3-fill"></i></a>
                                                    </h6>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection('konten')
