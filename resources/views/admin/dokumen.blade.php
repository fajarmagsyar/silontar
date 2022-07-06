@extends('admin.layouts.main')
@section('content')
@if (session()->has('success'))
        <script>
            swal.fire('Berhasil', 'Data berhasil ditambah!', 'success');
        </script>
    @endif
    
        <div class="container-fluid py-4">
          <div class="card ">
            <div class="card-header pb-0 p-3">
                <div class="d-flex justify-content-between">
                    <h6 class="mb-2">Dokumen</h6>
                </div>
            </div>
            
                <div class="container">
                    <form action="/admin/dokumen/store" method="POST" enctype="multipart/form-data">
                        @csrf
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-3 mt-4 text-center">
                                <h5>Surat Permohonan</h5>
                                <hr>
                            </div>
                            <div class="mb-2">
                                <label for="exampleInputEmail1" class="form-label">Surat Permohonan:</label>
                                <input type="file" class="form-control" name="path">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="mb-3 mt-4 text-center">
                                <h5>Surat Pernyataan</h5>
                                <hr>
                            </div>
                            <div class="mb-2">
                                <label for="exampleInputEmail1" class="form-label">Surat Peryataan:</label>
                                <input type="file" class="form-control" name="keterangan">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-3 mt-4 text-center">
                                <h5>Permen PU20-2010</h5>
                                <hr>
                            </div>
                            <div class="mb-2">
                                <label for="exampleInputEmail1" class="form-label">Permen PU20-2010:</label>
                                <input type="file" class="form-control" name="permen">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="mb-3 mt-4 text-center">
                                <h5>Surat Edaran Direktur Jendral Bina Marga</h5>
                                <hr>
                            </div>
                            <div class="mb-2">
                                <label for="exampleInputEmail1" class="form-label">Surat Edaran:</label>
                                <input type="file" class="form-control" name="edaran">
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                            <div id="emailHelp" class="form-text">File tidak boleh melebihi 2MB</div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Upload Data</button>
                    </form>
                </div>
                </div>              

          </div>
          </div>
        </div>


@endsection('content')