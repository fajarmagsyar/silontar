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
                    <form action="/admin/export/excel" method="get">
                        @csrf
                        <div class="mb-3 mt-4">
                            <select class="form-select" name="bulan">
                                <option value="#">-Pilih Bulan-</option>
                                <option value="1">Januari</option>
                                <option value="2">Februari</option>
                                <option value="3">Maret</option>
                                <option value="4">April</option>
                                <option value="5">Mei</option>
                                <option value="6">Juni</option>
                                <option value="7">Juli</option>
                                <option value="8">Agustus</option>
                                <option value="9">September</option>
                                <option value="10">Oktober</option>
                                <option value="11">November</option>
                                <option value="12">Desember</option>
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
