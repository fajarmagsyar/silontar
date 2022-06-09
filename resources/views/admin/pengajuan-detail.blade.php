@extends('admin.layouts.main')
@section('content')
    @if (session()->has('success'))
        <script>
            swal.fire('Berhasil', 'Data berhasil ditambah!', 'success');
        </script>
    @endif
    <div class="container-fluid py-4">
        <div class="row mt-4">
            <div class="col-lg-12 mb-lg-0 mb-4">
                <div class="card ">
                    <div class="card-header pb-0 p-3">
                        <div class="d-flex justify-content-between">
                            <h5 class="mb-2">
                                <span class="badge bg-primary">{{ $pengajuan->nama_perusahaan }}</span>
                            </h5>
                        </div>
                    </div>
                    <div class="table-responsive mx-4">
                        <table class="table align-items-center ">
                            <tbody>
                                <tr>
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
                                </tr>

                                <tr>
                                    <td>
                                        <ol class="list-group list-group">
                                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                                <div class="ms-2 me-auto">
                                                    <div class="fw-bold">Nama Direktur</div>
                                                    {{ $pengajuan->nama_direktur }}
                                                    <br>
                                                    <div class="fw-bold">Alamat Perusahaan</div>
                                                    {{ $pengajuan->alamat_perusahaan }}
                                                    <br>
                                                    <div class="fw-bold">Lokasi Permohonan</div>
                                                    {{ $pengajuan->lokasi_permohonan }}
                                                    <div class="fw-bold">Jadwal Pelaksanaan</div>
                                                    {{ $pengajuan->jadwal_pelaksanaan }}
                                                </div>
                                            </li>
                                        </ol>
                                    </td>
                                    <td>
                                        <div class="ms-4">
                                            <ul class="list-group list-group-horizontal ">
                                                <li class="list-group-item text-center" style="width: 200px"><a
                                                        href="{{ $pengajuan->surat_permohonan }}"><i
                                                            class="ni ni-cloud-download-95 float-start"></i> Surat
                                                        Permohonan</a>
                                                </li>
                                                <li class="list-group-item text-center" style="width: 200px"><a
                                                        href="{{ $pengajuan->surat_pernyataan }}"><i
                                                            class="ni ni-cloud-download-95 float-start"></i> Surat
                                                        Pernyataan</a>
                                                </li>
                                            </ul>
                                            <ul class="list-group list-group-horizontal-sm">
                                                <li class="list-group-item text-center" style="width: 200px"><a
                                                        href="{{ $pengajuan->ktp }}"><i
                                                            class="ni ni-cloud-download-95 float-start"></i> KTP</a>
                                                </li>
                                                <li class="list-group-item text-center" style="width: 200px"><a
                                                        href="{{ $pengajuan->npwp }}"><i
                                                            class="ni ni-cloud-download-95 float-start"></i> NPWP</a>
                                                </li>
                                            </ul>
                                            <ul class="list-group list-group-horizontal-md">
                                                <li class="list-group-item text-center" style="width: 200px"><a
                                                        href="{{ $pengajuan->kswp }}"><i
                                                            class="ni ni-cloud-download-95 float-start"></i> KSWP</a>
                                                </li>
                                                <li class="list-group-item text-center" style="width: 200px"><a
                                                        href="{{ $pengajuan->nib }}"><i
                                                            class="ni ni-cloud-download-95 float-start"></i> NIB</a>
                                                </li>
                                            </ul>
                                            <ul class="list-group list-group-horizontal-lg">
                                                <li class="list-group-item text-center" style="width: 200px"><a
                                                        href="{{ $pengajuan->siup }}"><i
                                                            class="ni ni-cloud-download-95 float-start"></i> SIUP</a>
                                                </li>
                                                <li class="list-group-item text-center" style="width: 200px"><a
                                                        href="{{ $pengajuan->akta_perusahaan }}"><i
                                                            class="ni ni-cloud-download-95 float-start"></i> Akta
                                                        Perusahaan</a>
                                                </li>
                                            </ul>

                                        </div>
                                    </td>

                                    <td class="align-middle text-sm text-center">
                                        <div class="col">
                                            <h6 class="text-sm mb-0">Gambar Lokasi</h6>
                                            <a href="{{ $pengajuan->gambar_lokasi }}">
                                                <img src="{{ $pengajuan->gambar_lokasi }}" width="100px" alt="">
                                            </a>
                                            <h6 class="text-sm mb-0 mt-3">Gambar Konstruksi</h6>
                                            <a href="{{ $pengajuan->gambar_konstruksi }}">
                                                <img src="{{ $pengajuan->gambar_konstruksi }}" width="100px" alt="">
                                            </a>
                                        </div>
                                    </td>
                                </tr>

                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>


        @if ($pd != null)
            <div class="row mt-4">
                <div class="col-lg-12 mb-lg-0 mb-4">
                    <div class="card ">
                        <div class="card-header pb-0 p-3">
                            <div class="d-flex text-center">
                                <h5 class="mb-2">
                                    Detail Pengaduan
                                </h5>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row px-4">
                                <div class="table-responsive">
                                    <table class="table">
                                        <tr>
                                            <td class="text-start align-middle">Status Permohonan</td>
                                            <td class="align-middle">
                                                <form
                                                    action="/admin/pengajuan/detail/{{ $pengajuan->permohonan_id }}/update"
                                                    method="post" name="status_permohonan">
                                                    @csrf
                                                    <input type="hidden" name="jenis" value="permohonan">
                                                    <input type="radio" onchange="statusSubmit()" name="permohonan"
                                                        value="Setuju"
                                                        {{ $pd->permohonan == 'Setuju' ? 'checked' : '' }}>
                                                    Setuju <br>
                                                    <input type="radio" onchange="statusSubmit()" name="permohonan"
                                                        value="Kembalikan Berkas"
                                                        {{ $pd->permohonan == 'Kembalikan Berkas' ? 'checked' : '' }}>
                                                    Kembalikan
                                                    Berkas
                                                </form>
                                            </td>
                                            <td class="align-middle">Nota Dinas
                                                @if ($pd->nota_dinas != null)
                                                    <a href="{{ $pd->nota_dinas }}"><i
                                                            class="ni ni-cloud-download-95"></i></a>
                                                @endif
                                            </td>
                                            <td class="align-middle">
                                                <button class="btn btn-primary my-auto btn-sm" data-bs-toggle="modal"
                                                    data-bs-target="#nota_dinas"><i class="ni ni-cloud-upload-96"></i>
                                                    Upload</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-start align-middle">Disposisi
                                                @if ($pd->disposisi != null)
                                                    <a href="{{ $pd->disposisi }}"><i
                                                            class="ni ni-cloud-download-95"></i></a>
                                                @endif
                                            </td>
                                            <td class="align-middle">
                                                <button class="btn btn-primary my-auto btn-sm" data-bs-toggle="modal"
                                                    data-bs-target="#disposisi"><i class="ni ni-cloud-upload-96"></i>
                                                    Upload</button>
                                            </td>
                                            <td class="align-middle">Undangan
                                                @if ($pd->undangan != null)
                                                    <a href="{{ $pd->undangan }}"><i
                                                            class="ni ni-cloud-download-95"></i></a>
                                                @endif
                                            </td>
                                            <td class="align-middle">
                                                <button class="btn btn-primary my-auto btn-sm" data-bs-toggle="modal"
                                                    data-bs-target="#undangan"><i class="ni ni-cloud-upload-96"></i>
                                                    Upload</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-start align-middle">Berita Acara
                                                @if ($pd->ba != null)
                                                    <a href="{{ $pd->ba }}"><i
                                                            class="ni ni-cloud-download-95"></i></a>
                                                @endif
                                            </td>
                                            <td class="align-middle">
                                                <button class="btn btn-primary my-auto btn-sm" data-bs-toggle="modal"
                                                    data-bs-target="#ba"><i class="ni ni-cloud-upload-96"></i>
                                                    Upload</button>
                                            </td>
                                            <td class="align-middle">Survey Berita Acara
                                                @if ($pd->ba_survey != null)
                                                    <a href="{{ $pd->ba_survey }}"><i
                                                            class="ni ni-cloud-download-95"></i></a>
                                                @endif
                                            </td>
                                            <td class="align-middle">
                                                <button class="btn btn-primary my-auto btn-sm" data-bs-toggle="modal"
                                                    data-bs-target="#ba_survey"><i class="ni ni-cloud-upload-96"></i>
                                                    Upload</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-start align-middle">RAB
                                                @if ($pd->kab != null)
                                                    <a href="{{ $pd->kab }}"><i
                                                            class="ni ni-cloud-download-95"></i></a>
                                                @endif
                                            </td>
                                            <td class="align-middle">
                                                <button class="btn btn-primary my-auto btn-sm" data-bs-toggle="modal"
                                                    data-bs-target="#kab"><i class="ni ni-cloud-upload-96"></i>
                                                    Upload</button>
                                            </td>
                                            <td class="align-middle">Izin Prinsip
                                                @if ($pd->izin_prinsip != null)
                                                    <a href="{{ $pd->izin_prinsip }}"><i
                                                            class="ni ni-cloud-download-95"></i></a>
                                                @endif
                                            </td>
                                            <td class="align-middle">
                                                <button class="btn btn-primary my-auto btn-sm" data-bs-toggle="modal"
                                                    data-bs-target="#izin_prinsip"><i class="ni ni-cloud-upload-96"></i>
                                                    Upload</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-start align-middle">Verifikasi Sesuai Permohonan Data Perubahan
                                            </td>
                                            <td class="align-middle">
                                                <form
                                                    action="/admin/pengajuan/detail/{{ $pengajuan->permohonan_id }}/update"
                                                    method="post" name="lengkap">
                                                    @csrf
                                                    <input type="hidden" name="jenis" value="lengkapi_berkas">
                                                    <input type="radio" onclick="submitLengkap()" name="lengkapi_berkas"
                                                        value="Sesuai BA"
                                                        {{ $pd->lengkapi_berkas == 'Sesuai BA' ? 'checked' : '' }}>
                                                    Sesuai BA
                                                    <br>
                                                    <input type="radio" onclick="submitLengkap()" name="lengkapi_berkas"
                                                        value="Tidak Sesuai BA"
                                                        {{ $pd->lengkapi_berkas == 'Tidak Sesuai BA' ? 'checked' : '' }}>
                                                    Tidak
                                                    Sesuai
                                                    BA
                                                </form>
                                            </td>
                                            <td class="align-middle">Rekomendasi Teknis
                                                @if ($pd->rekom_teknis != null)
                                                    <a href="{{ $pd->rekom_teknis }}"><i
                                                            class="ni ni-cloud-download-95"></i></a>
                                                @endif
                                            </td>
                                            <td class="align-middle">
                                                <button class="btn btn-primary my-auto btn-sm" data-bs-toggle="modal"
                                                    data-bs-target="#rekom_teknis"><i class="ni ni-cloud-upload-96"></i>
                                                    Upload</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-start align-middle">Surat Izin
                                                @if ($pd->surat_ijin != null)
                                                    <a href="{{ $pd->surat_ijin }}"><i
                                                            class="ni ni-cloud-download-95"></i></a>
                                                @endif
                                            </td>
                                            <td class="align-middle">
                                            </td>
                                            <td class="align-middle">Surat Mulai Kerja
                                                @if ($pd->surat_mulai_kerja != null)
                                                    <a href="{{ $pd->surat_mulai_kerja }}"><i
                                                            class="ni ni-cloud-download-95"></i></a>
                                                @endif
                                            </td>
                                            <td class="align-middle">
                                                <button class="btn btn-primary my-auto btn-sm" data-bs-toggle="modal"
                                                    data-bs-target="#surat_mulai_kerja"><i
                                                        class="ni ni-cloud-upload-96"></i>
                                                    Upload</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-start align-middle">KPKNL
                                                @if ($pd->kpknl != null)
                                                    <a href="{{ $pd->kpknl }}"><i
                                                            class="ni ni-cloud-download-95"></i></a>
                                                @endif
                                            </td>
                                            <td class="align-middle">
                                                <button class="btn btn-primary my-auto btn-sm" data-bs-toggle="modal"
                                                    data-bs-target="#kpknl"><i class="ni ni-cloud-upload-96"></i>
                                                    Upload</button>
                                            </td>
                                            <td class="align-middle">Dirjen BM
                                                @if ($pd->dirjen_bm != null)
                                                    <a href="{{ $pd->dirjen_bm }}"><i
                                                            class="ni ni-cloud-download-95"></i></a>
                                                @endif
                                            </td>
                                            <td class="align-middle">
                                                <button class="btn btn-primary my-auto btn-sm" data-bs-toggle="modal"
                                                    data-bs-target="#dirjen_bm"><i class="ni ni-cloud-upload-96"></i>
                                                    Upload</button>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>

                            <!-- Modals -->
                            <div class="modal fade" id="nota_dinas" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <form action="/admin/pengajuan/detail/{{ $pengajuan->permohonan_id }}/store"
                                            method="post" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="jenis" value="nota_dinas">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Upload berkas</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="mb-3">
                                                    <p class="text-sm font-weight-bold mb-2">Nota Dinas</p>
                                                    <input type="file" name="berkas" class="form-control" accept=".pdf">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Tutup</button>
                                                <button type="submit" class="btn btn-primary"><i
                                                        class="ni ni-fat-add"></i>
                                                    Simpan</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="disposisi" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <form action="/admin/pengajuan/detail/{{ $pengajuan->permohonan_id }}/store"
                                            method="post" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="jenis" value="disposisi">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Upload berkas</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="mb-3">
                                                    <p class="text-sm font-weight-bold mb-2">Disposisi</p>
                                                    <input type="file" name="berkas" class="form-control" accept=".pdf">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Tutup</button>
                                                <button type="submit" class="btn btn-primary"><i
                                                        class="ni ni-fat-add"></i>
                                                    Simpan</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="undangan" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <form action="/admin/pengajuan/detail/{{ $pengajuan->permohonan_id }}/store"
                                            method="post" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="jenis" value="undangan">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Upload berkas</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="mb-3">
                                                    <p class="text-sm font-weight-bold mb-2">Undangan</p>
                                                    <input type="file" name="berkas" class="form-control" accept=".pdf">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Tutup</button>
                                                <button type="submit" class="btn btn-primary"><i
                                                        class="ni ni-fat-add"></i>
                                                    Simpan</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="ba" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <form action="/admin/pengajuan/detail/{{ $pengajuan->permohonan_id }}/store"
                                            method="post" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="jenis" value="ba">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Upload berkas</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="mb-3">
                                                    <p class="text-sm font-weight-bold mb-2">Berita Acara</p>
                                                    <input type="file" name="berkas" class="form-control" accept=".pdf">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Tutup</button>
                                                <button type="submit" class="btn btn-primary"><i
                                                        class="ni ni-fat-add"></i>
                                                    Simpan</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="ba_survey" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <form action="/admin/pengajuan/detail/{{ $pengajuan->permohonan_id }}/store"
                                            method="post" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="jenis" value="ba_survey">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Upload berkas</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="mb-3">
                                                    <p class="text-sm font-weight-bold mb-2">Survey Berita Acara</p>
                                                    <input type="file" name="berkas" class="form-control" accept=".pdf">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Tutup</button>
                                                <button type="submit" class="btn btn-primary"><i
                                                        class="ni ni-fat-add"></i>
                                                    Simpan</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="kab" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <form action="/admin/pengajuan/detail/{{ $pengajuan->permohonan_id }}/store"
                                            method="post" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="jenis" value="kab">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Upload berkas</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="mb-3">
                                                    <p class="text-sm font-weight-bold mb-2">KAB</p>
                                                    <input type="file" name="berkas" class="form-control" accept=".pdf">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Tutup</button>
                                                <button type="submit" class="btn btn-primary"><i
                                                        class="ni ni-fat-add"></i>
                                                    Simpan</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="izin_prinsip" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <form action="/admin/pengajuan/detail/{{ $pengajuan->permohonan_id }}/store"
                                            method="post" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="jenis" value="izin_prinsip">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Upload berkas</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="mb-3">
                                                    <p class="text-sm font-weight-bold mb-2">Izin Prinsip</p>
                                                    <input type="file" name="berkas" class="form-control" accept=".pdf">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Tutup</button>
                                                <button type="submit" class="btn btn-primary"><i
                                                        class="ni ni-fat-add"></i>
                                                    Simpan</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="rekom_teknis" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <form action="/admin/pengajuan/detail/{{ $pengajuan->permohonan_id }}/store"
                                            method="post" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="jenis" value="rekom_teknis">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Upload berkas</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="mb-3">
                                                    <p class="text-sm font-weight-bold mb-2">Rekomendasi Teknis</p>
                                                    <input type="file" name="berkas" class="form-control" accept=".pdf">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Tutup</button>
                                                <button type="submit" class="btn btn-primary"><i
                                                        class="ni ni-fat-add"></i>
                                                    Simpan</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="surat_ijin" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <form action="/admin/pengajuan/detail/{{ $pengajuan->permohonan_id }}/store"
                                            method="post" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="jenis" value="surat_ijin">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Upload berkas</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="mb-3">
                                                    <p class="text-sm font-weight-bold mb-2">Surat Izin</p>
                                                    <input type="file" name="berkas" class="form-control" accept=".pdf">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Tutup</button>
                                                <button type="submit" class="btn btn-primary"><i
                                                        class="ni ni-fat-add"></i>
                                                    Simpan</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="surat_mulai_kerja" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <form action="/admin/pengajuan/detail/{{ $pengajuan->permohonan_id }}/store"
                                            method="post" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="jenis" value="surat_mulai_kerja">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Upload berkas</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="mb-3">
                                                    <p class="text-sm font-weight-bold mb-2">Surat Mulai Kerja</p>
                                                    <input type="file" name="berkas" class="form-control" accept=".pdf">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Tutup</button>
                                                <button type="submit" class="btn btn-primary"><i
                                                        class="ni ni-fat-add"></i>
                                                    Simpan</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="kpknl" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <form action="/admin/pengajuan/detail/{{ $pengajuan->permohonan_id }}/store"
                                            method="post" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="jenis" value="kpknl">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Upload berkas</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="mb-3">
                                                    <p class="text-sm font-weight-bold mb-2">KPKNL</p>
                                                    <input type="file" name="berkas" class="form-control" accept=".pdf">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Tutup</button>
                                                <button type="submit" class="btn btn-primary"><i
                                                        class="ni ni-fat-add"></i>
                                                    Simpan</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="dirjen_bm" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <form action="/admin/pengajuan/detail/{{ $pengajuan->permohonan_id }}/store"
                                            method="post" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="jenis" value="dirjen_bm">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Upload berkas</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="mb-3">
                                                    <p class="text-sm font-weight-bold mb-2">Dirjen BM</p>
                                                    <input type="file" name="berkas" class="form-control" accept=".pdf">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Tutup</button>
                                                <button type="submit" class="btn btn-primary"><i
                                                        class="ni ni-fat-add"></i>
                                                    Simpan</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
    </div>
@else
    <div class="row mt-4">
        <div class="col-lg-12 mb-lg-0 mb-4">
            <div class="row">
                <div class="col-sm-12">
                    <div class="text-center">
                        <form action="/admin/pengajuan/detail/{{ $pengajuan->permohonan_id }}/tolak"
                            class="d-inline" method="post">
                            @csrf
                            <button type="submit" class="btn btn-danger"><i class="ni ni-fat-remove"></i>
                                Kembalikan Berkas</button>
                        </form>
                        <form action="/admin/pengajuan/detail/{{ $pengajuan->permohonan_id }}/terima"
                            class="d-inline" method="post">
                            @csrf
                            <button type="submit" class="btn btn-primary"><i class="ni ni-check-bold"></i>
                                Setuju</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif

    </div>
@endsection('content')


<script>
    function statusSubmit() {
        document.status_permohonan.submit();
    }

    function submitLengkap() {
        document.lengkap.submit();
    }
</script>
