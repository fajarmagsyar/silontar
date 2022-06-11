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
                            <h3 class="mb-5"><b><a href=""><i class="bi bi-arrow-left mr-2"></i></a> LIST
                                    PENGAJUAN</b>
                            </h3>

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
                                                    <p class="text-xs font-weight-bold mb-0">Persyaratan tambahan</p>
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
                                                <th class="middle-align">
                                                    <div class="d-flex px-2 py-1 align-items-center">
                                                        <div>
                                                            {{ $no = $no + 1 }}
                                                        </div>
                                                    </div>
                                                </th>
                                                <td class="align-middle">
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
                                                                        class="bi bi-file-arrow-down-fill float-start"></i>
                                                                    Akta
                                                                    Perusahaan</a>
                                                            </li>
                                                        </ul>

                                                    </div>
                                                </td>

                                                <td class="align-middle text-sm text-center">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <div class="col">
                                                                <a href="{{ $r->gambar_lokasi }}">
                                                                    <img src="{{ $r->gambar_lokasi }}" width="100px"
                                                                        alt="">
                                                                </a>
                                                                <div class="text-muted">(Lokasi)</div>
                                                                <br>
                                                                <a href="{{ $r->gambar_konstruksi }}">
                                                                    <img src="{{ $r->gambar_konstruksi }}" width="100px"
                                                                        alt="">
                                                                </a>
                                                                <div class="text-muted">(Konstruksi)</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="align-middle text-center">
                                                    @if (PermohonanDetail::getDetailById($r->permohonan_id) == true)
                                                        @php
                                                            $detail = PermohonanDetail::getDetail($r->permohonan_id);
                                                        @endphp
                                                        @if ($detail->gambar_lokasi != null && $detail->gambar_konstruksi != null && $detail->sanggup_bayar != null && $detail->jadwal_pelaksanaan != null)
                                                            <div class="card mt-3">
                                                                <div class="card-body">
                                                                    <div class="col">
                                                                        <a href="{{ $detail->gambar_lokasi }}">
                                                                            <img src="{{ $detail->gambar_lokasi }}"
                                                                                width="100px" alt="">
                                                                        </a>
                                                                        <div class="text-muted">(Lokasi)</div>
                                                                        <br>
                                                                        <a href="{{ $detail->gambar_konstruksi }}">
                                                                            <img src="{{ $detail->gambar_konstruksi }}"
                                                                                width="100px" alt="">
                                                                        </a>
                                                                        <div class="text-muted">(Konstruksi)</div>
                                                                    </div>
                                                                    <hr>
                                                                    <div>
                                                                        <div class="text-sm mb-1">Surat Pernyataan
                                                                            Sanggup
                                                                            Membayar: </div>
                                                                        <a href="{{ $detail->sanggup_bayar }}"
                                                                            target="_blank"
                                                                            class="btn btn-success btn-sm mt-3"><i
                                                                                class="bi bi-file-earmark-fill"></i>
                                                                            Download</a>
                                                                    </div>
                                                                    <hr>
                                                                    <div>
                                                                        <span class="text-sm">Jadwal Pelaksanaan:
                                                                        </span>
                                                                        <br>
                                                                        <b><i class="bi bi-calendar"></i>
                                                                            {{ $detail->jadwal_pelaksanaan }}</b>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @else
                                                            <div class="card">
                                                                <div class="card-body p-2">
                                                                    <span class="card-text">
                                                                        Persyaratan tambahan <br> <b>belum diupload</b>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        @endif
                                                    @endif
                                                </td>
                                                <td class="align-middle text-sm text-center">
                                                    <button class="btn btn-info text-white w-100" class="btn btn-primary"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#status_{{ $r->permohonan_id }}"><i
                                                            class="bi bi-search"></i>
                                                        Cek
                                                        Status</button>
                                                    @if (PermohonanDetail::getDetailById($r->permohonan_id) == true)
                                                        @if (PermohonanDetail::getDetail($r->permohonan_id)->lengkapi_berkas == 'Tidak Sesuai BA')
                                                            @php
                                                                $detail = PermohonanDetail::getDetail($r->permohonan_id);
                                                            @endphp
                                                            @if ($detail->gambar_lokasi == null && $detail->gambar_konstruksi == null && $detail->jadwal_pelaksanaan == null && $detail->sanggup_bayar == null)
                                                                <br>
                                                                <button class="btn btn-danger text-white mt-3 w-100"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#berkas_{{ $r->permohonan_id }}"><i
                                                                        class="bi bi-cloud-upload"></i>
                                                                    Melengkapi Persyaratan</button>
                                                            @else
                                                                <br>
                                                                <span class="btn btn-success text-white mt-3 w-100"><i
                                                                        class="bi bi-check"></i>
                                                                    Persyaratan Telah Unggah</span>
                                                            @endif
                                                        @endif
                                                        @if (PermohonanDetail::getDetail($r->permohonan_id)->surat_ijin != null)
                                                            @if (PermohonanDetail::getDetail($r->permohonan_id)->surat_mulai_kerja == null)
                                                                <br>
                                                                <button class="btn btn-warning text-white mt-3 w-100"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#surat_{{ $r->permohonan_id }}"><i
                                                                        class="bi bi-cloud-upload"></i>
                                                                    <b>Upload</b> <br> Surat Permohonan Mulai
                                                                    Bekerja</button>
                                                            @else
                                                                <br>
                                                                <span class="btn btn-success text-white mt-3 w-100"><i
                                                                        class="bi bi-check"></i>
                                                                    Surat telah diupload
                                                                </span>
                                                            @endif
                                                        @endif
                                                    @endif
                                                </td>
                                            </tr>
                                            <!-- Modal -->
                                            <div class="modal fade" id="surat_{{ $r->permohonan_id }}" tabindex="-1"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <form action="/uploadSurat/{{ $r->permohonan_id }}" method="post"
                                                        enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Upload
                                                                    Surat
                                                                </h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <label for=""><b>Berkas:</b></label>
                                                                <div class="mb-2">
                                                                    <input type="file" name="berkas" class="form-control"
                                                                        accept=".pdf">
                                                                    <span class="text-muted">*Ukuran file maks: 2MB
                                                                        (.pdf)
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-bs-dismiss="modal">Tutup</button>
                                                                <button type="submit" class="btn btn-info text-white"><i
                                                                        class="bi bi-plus"></i> Unggah
                                                                    Berkas</button>
                                                            </div>
                                                        </div>
                                                    </form>

                                                </div>
                                            </div>

                                            <div class="modal fade" id="berkas_{{ $r->permohonan_id }}"
                                                tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <form action="/uploadBerkas/{{ $r->permohonan_id }}" method="post"
                                                        enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Upload
                                                                    Berkas
                                                                </h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="mb-3">
                                                                    <label for=""><b>Gambar Lokasi:</b></label>
                                                                    <input type="file" name="gambar_lokasi"
                                                                        class="form-control" required
                                                                        accept=".jpg, .png">
                                                                    <span class="text-muted">*Ukuran file maks:
                                                                        2MB</span>
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for=""><b>Gambar Konstruksi:</b></label>
                                                                    <input type="file" name="gambar_konstruksi"
                                                                        class="form-control" required
                                                                        accept=".jpg, .png">
                                                                    <span class="text-muted">*Ukuran file maks:
                                                                        2MB</span>
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for=""><b>Surat Pernyataan Kesanggupan
                                                                            Membayar:</b></label>
                                                                    <input type="file" name="sanggup_bayar"
                                                                        class="form-control" required accept=".pdf">
                                                                    <span class="text-muted">*Ukuran file maks:
                                                                        2MB</span>
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for=""><b>Jadwal Pelaksanaan:</b></label>
                                                                    <input type="datetime-local" class="form-control fp"
                                                                        name="jadwal_pelaksanaan">
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-bs-dismiss="modal">Tutup</button>
                                                                <button type="submit" class="btn btn-info text-white"><i
                                                                        class="bi bi-plus"></i> Unggah
                                                                    Berkas</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>

                                            <div class="modal fade" id="status_{{ $r->permohonan_id }}"
                                                tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-xl">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Status
                                                                Permohonan</h5>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            @php
                                                                $detail = PermohonanDetail::getDetailById($r->permohonan_id);
                                                            @endphp
                                                            @if ($detail == true)
                                                                @php
                                                                    $detailGet = PermohonanDetail::getDetail($r->permohonan_id);
                                                                @endphp
                                                                <div class="px-auto p-3">
                                                                    <div class="row mb-3">
                                                                        <div
                                                                            class="col-lg-6 col-sm-12 text-center mx-auto mt-1 mb-4">
                                                                            Permohonan anda: <br>
                                                                            @if ($detailGet->permohonan == 'Kembalikan Berkas')
                                                                                <span
                                                                                    class="badge bg-danger">{{ $detailGet->permohonan }}</span>
                                                                            @else
                                                                                <span
                                                                                    class="badge bg-success">{{ $detailGet->permohonan }}</span>
                                                                            @endif
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-lg-6 col-sm-12">
                                                                            <ol class="list-group">
                                                                                <li
                                                                                    class="list-group-item d-flex justify-content-between align-items-start">
                                                                                    <div class="ms-2 me-auto">
                                                                                        <div class="fw-bold">Nota
                                                                                            Dinas
                                                                                        </div>
                                                                                    </div>
                                                                                    @if ($detailGet->nota_dinas != null)
                                                                                        <a
                                                                                            href="{{ $detailGet->nota_dinas }}">
                                                                                            <span
                                                                                                class="badge bg-success rounded-pill">
                                                                                                Download <i
                                                                                                    class="bi bi-cloud-arrow-down-fill"></i>
                                                                                            </span>
                                                                                        </a>
                                                                                    @else
                                                                                        <span
                                                                                            class="badge bg-danger rounded-pill">
                                                                                            <i class="bi bi-clock"></i>
                                                                                        </span>
                                                                                    @endif
                                                                                </li>
                                                                                <li
                                                                                    class="list-group-item d-flex justify-content-between align-items-start">
                                                                                    <div class="ms-2 me-auto">
                                                                                        <div class="fw-bold">
                                                                                            Disposisi
                                                                                        </div>
                                                                                    </div>
                                                                                    @if ($detailGet->disposisi != null)
                                                                                        <a
                                                                                            href="{{ $detailGet->disposisi }}">
                                                                                            <span
                                                                                                class="badge bg-success rounded-pill">
                                                                                                Download <i
                                                                                                    class="bi bi-cloud-arrow-down-fill"></i>
                                                                                            </span>
                                                                                        </a>
                                                                                    @else
                                                                                        <span
                                                                                            class="badge bg-danger rounded-pill">
                                                                                            <i class="bi bi-clock"></i>
                                                                                        </span>
                                                                                    @endif
                                                                                </li>
                                                                                <div class="text-center my-3">
                                                                                    <b>Rapat
                                                                                        Persiapan Survey</b>
                                                                                </div>
                                                                                <li
                                                                                    class="list-group-item d-flex justify-content-between align-items-start">
                                                                                    <div class="ms-2 me-auto">
                                                                                        <div class="fw-bold">
                                                                                            Undangan
                                                                                        </div>
                                                                                    </div>
                                                                                    @if ($detailGet->undangan != null)
                                                                                        <a
                                                                                            href="{{ $detailGet->undangan }}">
                                                                                            <span
                                                                                                class="badge bg-success rounded-pill">
                                                                                                Download <i
                                                                                                    class="bi bi-cloud-arrow-down-fill"></i>
                                                                                            </span>
                                                                                        </a>
                                                                                    @else
                                                                                        <span
                                                                                            class="badge bg-danger rounded-pill">
                                                                                            <i class="bi bi-clock"></i>
                                                                                        </span>
                                                                                    @endif
                                                                                </li>
                                                                                <li
                                                                                    class="list-group-item d-flex justify-content-between align-items-start">
                                                                                    <div class="ms-2 me-auto">
                                                                                        <div class="fw-bold">Berita
                                                                                            Acara
                                                                                        </div>
                                                                                    </div>
                                                                                    @if ($detailGet->ba != null)
                                                                                        <a href="{{ $detailGet->ba }}">
                                                                                            <span
                                                                                                class="badge bg-success rounded-pill">
                                                                                                Download <i
                                                                                                    class="bi bi-cloud-arrow-down-fill"></i>
                                                                                            </span>
                                                                                        </a>
                                                                                    @else
                                                                                        <span
                                                                                            class="badge bg-danger rounded-pill">
                                                                                            <i class="bi bi-clock"></i>
                                                                                        </span>
                                                                                    @endif
                                                                                </li>
                                                                                <div class="text-center my-3">
                                                                                    <b>Hasil Survey</b>
                                                                                </div>
                                                                                <li
                                                                                    class="list-group-item d-flex justify-content-between align-items-start">
                                                                                    <div class="ms-2 me-auto">
                                                                                        <div class="fw-bold">Berita
                                                                                            Acara
                                                                                            Survey</div>
                                                                                    </div>
                                                                                    @if ($detailGet->ba_survey != null)
                                                                                        <a
                                                                                            href="{{ $detailGet->ba_survey }}">
                                                                                            <span
                                                                                                class="badge bg-success rounded-pill">
                                                                                                Download <i
                                                                                                    class="bi bi-cloud-arrow-down-fill"></i>
                                                                                            </span>
                                                                                        </a>
                                                                                    @else
                                                                                        <span
                                                                                            class="badge bg-danger rounded-pill">
                                                                                            <i class="bi bi-clock"></i>
                                                                                        </span>
                                                                                    @endif
                                                                                </li>
                                                                                <li
                                                                                    class="list-group-item d-flex justify-content-between align-items-start">
                                                                                    <div class="ms-2 me-auto">
                                                                                        <div class="fw-bold">RAB
                                                                                        </div>
                                                                                    </div>
                                                                                    @if ($detailGet->kab != null)
                                                                                        <a href="{{ $detailGet->kab }}">
                                                                                            <span
                                                                                                class="badge bg-success rounded-pill">
                                                                                                Download <i
                                                                                                    class="bi bi-cloud-arrow-down-fill"></i>
                                                                                            </span>
                                                                                        </a>
                                                                                    @else
                                                                                        <span
                                                                                            class="badge bg-danger rounded-pill">
                                                                                            <i class="bi bi-clock"></i>
                                                                                        </span>
                                                                                    @endif
                                                                                </li>
                                                                            </ol>

                                                                        </div>
                                                                        <div class="col-lg-6 col-sm-12">

                                                                            <ol class="list-group">
                                                                                <li
                                                                                    class="list-group-item d-flex justify-content-between align-items-start">
                                                                                    <div class="ms-2 me-auto">
                                                                                        <div class="fw-bold">Izin
                                                                                            Prinsip
                                                                                        </div>
                                                                                    </div>
                                                                                    @if ($detailGet->izin_prinsip != null)
                                                                                        <a
                                                                                            href="{{ $detailGet->izin_prinsip }}">
                                                                                            <span
                                                                                                class="badge bg-success rounded-pill">
                                                                                                Download <i
                                                                                                    class="bi bi-cloud-arrow-down-fill"></i>
                                                                                            </span>
                                                                                        </a>
                                                                                    @else
                                                                                        <span
                                                                                            class="badge bg-danger rounded-pill">
                                                                                            <i class="bi bi-clock"></i>
                                                                                        </span>
                                                                                    @endif
                                                                                </li>
                                                                                <li
                                                                                    class="list-group-item d-flex justify-content-between align-items-start">
                                                                                    <div class="ms-2 me-auto">
                                                                                        <div class="fw-bold">Berkas
                                                                                            Telah
                                                                                            Lengkap:</div>
                                                                                        @if ($detailGet->lengkapi_berkas != null && $detailGet->lengkapi_berkas == 'Tidak Sesuai BA')
                                                                                            {{ $detailGet->lengkapi_berkas }},
                                                                                            Silahkan upload kembali Gambar
                                                                                            Lokasi, Konstruksi & Jadwal
                                                                                            Pelaksanaan
                                                                                        @elseif($detailGet->lengkapi_berkas != null)
                                                                                            {{ $detailGet->lengkapi_berkas }}
                                                                                        @endif
                                                                                    </div>
                                                                                    @if ($detailGet->lengkapi_berkas != null)
                                                                                        <span
                                                                                            class="badge bg-success rounded-pill">
                                                                                            <i class="bi bi-check"></i>
                                                                                        </span>
                                                                                    @else
                                                                                        <span
                                                                                            class="badge bg-danger rounded-pill">
                                                                                            <i class="bi bi-clock"></i>
                                                                                        </span>
                                                                                    @endif
                                                                                </li>
                                                                                <li
                                                                                    class="list-group-item d-flex justify-content-between align-items-start">
                                                                                    <div class="ms-2 me-auto">
                                                                                        <div class="fw-bold">
                                                                                            Rekomendasi
                                                                                            Teknis</div>
                                                                                    </div>
                                                                                    @if ($detailGet->rekom_teknis != null)
                                                                                        <a
                                                                                            href="{{ $detailGet->rekom_teknis }}">
                                                                                            <span
                                                                                                class="badge bg-success rounded-pill">
                                                                                                Download <i
                                                                                                    class="bi bi-cloud-arrow-down-fill"></i>
                                                                                            </span>
                                                                                        </a>
                                                                                    @else
                                                                                        <span
                                                                                            class="badge bg-danger rounded-pill">
                                                                                            <i class="bi bi-clock"></i>
                                                                                        </span>
                                                                                    @endif
                                                                                </li>
                                                                                <li
                                                                                    class="list-group-item d-flex justify-content-between align-items-start">
                                                                                    <div class="ms-2 me-auto">
                                                                                        <div class="fw-bold">Surat
                                                                                            Izin
                                                                                        </div>
                                                                                    </div>
                                                                                    @if ($detailGet->surat_ijin != null)
                                                                                        <a
                                                                                            href="{{ $detailGet->surat_ijin }}">
                                                                                            <span
                                                                                                class="badge bg-success rounded-pill">
                                                                                                Download <i
                                                                                                    class="bi bi-cloud-arrow-down-fill"></i>
                                                                                            </span>
                                                                                        </a>
                                                                                    @else
                                                                                        <span
                                                                                            class="badge bg-danger rounded-pill">
                                                                                            <i class="bi bi-clock"></i>
                                                                                        </span>
                                                                                    @endif
                                                                                </li>
                                                                                <li
                                                                                    class="list-group-item d-flex justify-content-between align-items-start">
                                                                                    <div class="ms-2 me-auto">
                                                                                        <div class="fw-bold">Surat
                                                                                            Mulai
                                                                                            Kerja</div>
                                                                                    </div>
                                                                                    @if ($detailGet->surat_mulai_kerja != null)
                                                                                        <a
                                                                                            href="{{ $detailGet->surat_mulai_kerja }}">
                                                                                            <span
                                                                                                class="badge bg-success rounded-pill">
                                                                                                Download <i
                                                                                                    class="bi bi-cloud-arrow-down-fill"></i>
                                                                                            </span>
                                                                                        </a>
                                                                                    @else
                                                                                        <span
                                                                                            class="badge bg-danger rounded-pill">
                                                                                            <i class="bi bi-clock"></i>
                                                                                        </span>
                                                                                    @endif
                                                                                </li>

                                                                                <div class="text-center my-3">
                                                                                    <b>Surat Permohonan</b>
                                                                                </div>
                                                                                <li
                                                                                    class="list-group-item d-flex justify-content-between align-items-start">
                                                                                    <div class="ms-2 me-auto">
                                                                                        <div class="fw-bold">KPKNL
                                                                                        </div>
                                                                                    </div>
                                                                                    @if ($detailGet->kpknl != null)
                                                                                        <a
                                                                                            href="{{ $detailGet->kpknl }}">
                                                                                            <span
                                                                                                class="badge bg-success rounded-pill">
                                                                                                Download <i
                                                                                                    class="bi bi-cloud-arrow-down-fill"></i>
                                                                                            </span>
                                                                                        </a>
                                                                                    @else
                                                                                        <span
                                                                                            class="badge bg-danger rounded-pill">
                                                                                            <i class="bi bi-clock"></i>
                                                                                        </span>
                                                                                    @endif
                                                                                </li>
                                                                                <li
                                                                                    class="list-group-item d-flex justify-content-between align-items-start">
                                                                                    <div class="ms-2 me-auto">
                                                                                        <div class="fw-bold">Dirjen
                                                                                            BM
                                                                                        </div>
                                                                                    </div>
                                                                                    @if ($detailGet->dirjen_bm != null)
                                                                                        <a
                                                                                            href="{{ $detailGet->dirjen_bm }}">
                                                                                            <span
                                                                                                class="badge bg-success rounded-pill">
                                                                                                Download <i
                                                                                                    class="bi bi-cloud-arrow-down-fill"></i>
                                                                                            </span>
                                                                                        </a>
                                                                                    @else
                                                                                        <span
                                                                                            class="badge bg-danger rounded-pill">
                                                                                            <i class="bi bi-clock"></i>
                                                                                        </span>
                                                                                    @endif
                                                                                </li>
                                                                            </ol>
                                                                        </div>


                                                                    </div>
                                                                </div>
                                                            @else
                                                                <div class="alert alert-danger text-center">
                                                                    <span style="font-size: 30px"><i
                                                                            class="bi bi-clock"></i></span>
                                                                    <h5><b>Dalam Proses</b></h5>
                                                                    <span>Mohon tunggu, permohonan sementara diproses oleh
                                                                        admin, jika proses tidak direspon dalam waktu 5 hari
                                                                        kerja silahkan hubungi admin</span>
                                                                </div>
                                                            @endif
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                            <center>{{ $pengajuan->links() }}</center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection('konten')
