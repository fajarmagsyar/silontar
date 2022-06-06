@extends('admin.layouts.main')
@section('content')
    <div class="container-fluid py-4">

        <div class="row mt-4">
            <div class="col-lg-12 mb-lg-0 mb-4">
                <div class="card ">
                    <div class="card-header pb-0 p-3">
                        <div class="d-flex justify-content-between">
                            <h6 class="mb-2">DATA USER</h6>
                        </div>
                    </div>
                    <div class="p-4">
                        <div class="table-responsive">
                            <table class="table align-items-center ">
                                <tbody>
                                    <tr>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">#</p>
                                        </td>
                                        <td>
                                            <div class="text-center">
                                                <p class="text-xs font-weight-bold mb-0">Email</p>
                                            </div>
                                        </td>
                                        <td class="align-middle text-sm">
                                            <div class="col text-center">
                                                <p class="text-xs font-weight-bold mb-0">Nama Direktur</p>
                                            </div>
                                        </td>
                                        <td class="align-middle text-sm">
                                            <div class="col text-center">
                                                <p class="text-xs font-weight-bold mb-0">Nama Perusahaan</p>
                                            </div>
                                        </td>
                                        <td class="align-middle text-sm">
                                            <div class="col text-center">
                                                <p class="text-xs font-weight-bold mb-0">Alamat Perusahaan</p>
                                            </div>
                                        </td>
                                        <td class="align-middle text-sm">
                                            <div class="col text-center">
                                                <p class="text-xs font-weight-bold mb-0">Lokasi Permohonan</p>
                                            </div>
                                        </td>
                                        <td class="align-middle text-sm">
                                            <div class="col text-center">
                                                <p class="text-xs font-weight-bold mb-0">Aksi</p>
                                            </div>
                                        </td>
                                    </tr>
                                    @foreach ($user as $no => $r)
                                        <tr>
                                            <td>
                                                {{ $no = $no + 1 }}
                                            </td>
                                            <td>
                                                <div>
                                                    <h6 class="text-sm mb-0">{{ $r->email }}</h6>
                                                </div>
                                            </td>
                                            <td class="align-middle text-sm">
                                                <div>
                                                    <h6 class="text-sm mb-0">{{ $r->nama_direktur }}</h6>
                                                </div>
                                            </td>
                                            <td class="align-middle text-sm">
                                                <div>
                                                    <h6 class="text-sm mb-0">{{ $r->nama_perusahaan }}</h6>
                                                </div>
                                            </td>
                                            <td class="align-middle text-sm">
                                                <div>
                                                    <h6 class="text-sm mb-0">{{ $r->alamat_perusahaan }}</h6>
                                                </div>
                                            </td>
                                            <td class="align-middle text-sm">
                                                <div>
                                                    <h6 class="text-sm mb-0">{{ $r->lokasi_permohonan }}</h6>
                                                </div>
                                            </td>
                                            <td class="align-middle text-sm">
                                                <div class="col text-center">
                                                    <h6 class="text-sm mb-0">
                                                        <i class="bi bi-pencil-fill"></i>
                                                        &nbsp;
                                                        <i class="bi bi-trash3-fill"></i>
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
    @endsection('content')
