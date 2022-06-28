@extends('admin.layouts.main')
@section('content')
    <div class="container-fluid py-4">
        <div class="card ">
            <div class="card-header pb-0 p-3">
                <div class="d-flex justify-content-between">
                    <h6 class="mb-2">CETAK LAPORAN</h6>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6 mx-auto">
                    <form action="/admin/export/excel" method="post">
                        @csrf
                        <div class="mb-3 mt-4">
                            <select class="form-select" name="bulan">
                                <option value="#">-Pilih Bulan-</option>
                                <option value="Januari">Januari</option>
                                <option value="Februari">Februari</option>
                                <option value="Maret">Maret</option>
                                <option value="April">April</option>
                                <option value="Mei">Mei</option>
                                <option value="Juni">Juni</option>
                                <option value="Juli">Juli</option>
                                <option value="Agustus">Agustus</option>
                                <option value="September">September</option>
                                <option value="Oktober">Oktober</option>
                                <option value="November">November</option>
                                <option value="Desember">Desember</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <select name="tahun" class="form-select" id="">
                                <option value="#">-Pilih Tahun-</option>
                                @for ($i = date('Y'); $i > 2005; $i--)
                                    <option value="{{ $i }}">{{ $i }}</option>
                                @endfor
                            </select>
                        </div>
                        <div class="mb-3 text-end">
                            <button type="submit" class="btn btn-primary"><i class="ni ni-folder-17"></i> Cetak</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection('content')
