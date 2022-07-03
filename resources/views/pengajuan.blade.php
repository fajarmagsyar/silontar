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
                            <h3 class="mb-5"><b><a href=""><i class="bi bi-arrow-left mr-2"></i></a> FORM
                                    PENGAJUAN</b>

                            </h3>

                            <form action="/pengajuan/store" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3 text-center">
                                    <h5>Data Pengaju</h5>
                                    <hr>
                                </div>
                                <div class="row">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="mb-2">
                                                <label for="exampleInputEmail1" class="form-label">Nama
                                                    Perusahaan:</label>
                                                <input type="text" class="form-control text-dark"
                                                    value="{{ $dataUser->nama_perusahaan }}" style="font-size: 14px"
                                                    readonly>
                                            </div>
                                            <div class="mb-2">
                                                <label for="exampleInputEmail1" class="form-label">Nama Pemohon
                                                    (Direktur):</label>
                                                <input type="text" class="form-control text-dark"
                                                    value="{{ $dataUser->nama_direktur }}" style="font-size: 14px"
                                                    readonly>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="mb-2">
                                                <label for="exampleInputEmail1" class="form-label">Alamat
                                                    Perusahaan:</label>
                                                <input type="text" class="form-control text-dark"
                                                    value="{{ $dataUser->alamat_perusahaan }}" style="font-size: 14px"
                                                    readonly>
                                            </div>
                                            <div class="mb-2">
                                                <label for="exampleInputEmail1" class="form-label">Lokasi
                                                    Permohonan:</label>
                                                <input type="text" class="form-control text-dark"
                                                    value="{{ $dataUser->lokasi_permohonan }}" style="font-size: 14px"
                                                    readonly>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-4 mt-4 text-center">
                                        <h5>Syarat Administrasi</h5>
                                        <hr>
                                    </div>

                                    @foreach($berkas as $r)
                                    <div class="row">   
                                        <div class="col-6">
                                            <div class="mb-2">
                                                <label for="exampleInputEmail1" class="form-label">No Surat Permohonan:</label>
                                                <input type="text" placeholder="Masukkan No Surat Permohonan"
                                                id="exampleInputEmail1" class="text-dark" name="surat_permohonan_no"
                                                style="font-size: 15px" aria-describedby="emailHelp">
                                            </div>
                                            <div class="mb-2">
                                                <label for="exampleInputEmail1" class="form-label">Surat Permohonan:</label>
                                                <input type="file" accept=".pdf" id="exampleInputEmail1" class="text-dark"
                                                name="surat_permohonan" style="font-size: 15px"
                                                aria-describedby="emailHelp">
                                            </div>
                                                <p class="text">Contoh surat permohonan dapat dilihat<a href="{{ $r->path }}"> disini!</a></p>
                                        </div>
                                    <div class="col-6">                                            
                                        <div class="mb-2">
                                            <label for="exampleInputEmail1" class="form-label">No Surat Pernyataan:</label>
                                            <input type="text" placeholder="Masukkan No Surat Pernyataan"
                                                id="exampleInputEmail1" class="text-dark" name="surat_pernyataan_no"
                                                style="font-size: 15px" aria-describedby="emailHelp">
                                        </div>
                                        <div class="mb-2">
                                                <label for="exampleInputEmail1" class="form-label">Surat Pernyataan:</label>
                                                <input type="file" accept=".pdf" id="exampleInputEmail1" class="text-dark"
                                                name="surat_pernyataan" style="font-size: 15px"
                                                aria-describedby="emailHelp">
                                         </div>
                                         <p class="text">Contoh surat Pernyataan dapat dilihat<a href="{{ $r->keterangan }}"> disini!</a></p>
                                            
                                    </div>
                                </div>
                                        
                                        @endforeach
                                        
                                    <div class="mb-3 mt-4 text-center">
                                        <h5>Kelengkapan Pengajuan</h5>
                                        <hr>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="mb-2">
                                                <label for="exampleInputEmail1" class="form-label">Jenis Permohonan:</label>
                                                <select name="jenis_permohonan" class="form-control">
                                                    <option disabled selected>- Pilih Jenis Pengajuan -</option>
                                                    <option value="Jaringan Utilitas">Jaringan Utilitas</option>
                                                    <option value="Iklan/Reklame">Iklan/Reklame</option>
                                                    <option value="Jalan Keluar Masuk">Jalan Keluar Masuk</option>
                                                    <option value="Bangunan">Bangunan</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">                                            
                                        <div class="mb-2">
                                            <label for="exampleInputEmail1" class="form-label">KTP:</label>
                                            <input type="file" accept=".pdf" id="exampleInputEmail1"
                                                class="text-dark" name="ktp" style="font-size: 15px"
                                                aria-describedby="emailHelp">
                                        </div>
                                        <div class="mb-2">
                                            <label for="exampleInputEmail1" class="form-label">NPWP:</label>
                                            <input type="file" accept=".pdf" id="exampleInputEmail1"
                                                class="text-dark" name="npwp" style="font-size: 15px"
                                                aria-describedby="emailHelp">
                                        </div>
                                        <div class="mb-2">
                                            <label for="exampleInputEmail1" class="form-label">KSWP:</label>
                                            <input type="file" accept=".pdf" id="exampleInputEmail1"
                                                class="text-dark" name="kswp" style="font-size: 15px"
                                                aria-describedby="emailHelp">
                                        </div>
                                    </div>
                                    
                                    <div class="col-6">
                                        <div class="mb-2">
                                            <label for="exampleInputEmail1" class="form-label">NIB:</label>
                                            <input type="file" accept=".pdf" id="exampleInputEmail1"
                                                class="text-dark" name="nib" style="font-size: 15px"
                                                aria-describedby="emailHelp">
                                        </div>
                                        <div class="mb-2">
                                            <label for="exampleInputEmail1" class="form-label">SIUP:</label>
                                            <input type="file" accept=".pdf" id="exampleInputEmail1"
                                                class="text-dark" name="siup" style="font-size: 15px"
                                                aria-describedby="emailHelp">
                                        </div>
                                        <div class="mb-2">
                                            <label for="exampleInputEmail1" class="form-label">Akta Perusahaan:</label>
                                            <input type="file" accept=".pdf" id="exampleInputEmail1"
                                                class="text-dark" name="akta_perusahaan" style="font-size: 15px"
                                                aria-describedby="emailHelp">
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3 mt-3 text-center">
                                    <h5>Syarat Teknis</h5>
                                    <hr>
                                </div>
                                <div class="row">

                                    <div class="col-6">
                                        <div class="mb-2">
                                            <label for="exampleInputEmail1" class="form-label">Gambar Lokasi:</label>
                                            <input type="file" accept=".jpg, .jpeg, .png" id="exampleInputEmail1"
                                                class="text-dark" name="gambar_lokasi" style="font-size: 15px"
                                                aria-describedby="emailHelp">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="mb-2">
                                            <label for="exampleInputEmail1" class="form-label">Gambar
                                                Konstruksi:</label>
                                            <input type="file" accept=".jpg, .jpeg, .png" id="exampleInputEmail1"
                                                class="text-dark" name="gambar_konstruksi" style="font-size: 15px"
                                                aria-describedby="emailHelp">
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-2">
                                    <label for="exampleInputEmail1" class="form-label">Jadwal Pelaksanaan:</label>
                                    <input type="date" id="flatrange" class="text-dark" name="jadwal_pelaksanaan"
                                        style="font-size: 15px" aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3">
                                    <div id="emailHelp" class="form-text">File tidak boleh melebihi 2MB</div>
                                </div>
                                <button type="submit" class="btn btn-primary">Kirim Pengajuan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection('konten')
