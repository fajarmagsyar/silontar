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
                <div class="table-responsive">
                    <table class="table align-items-center ">
                        <tbody>
                            <tr>
                                <td class="w-30">
                                    <div class="d-flex px-2 py-1 align-items-center">
                                        <div>
                                            <p class="text-xs font-weight-bold mb-0">No</p>
                                        </div>
                                        <div class="ms-4">
                                            <p class="text-xs font-weight-bold mb-0">NIK</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">Nama</p>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-center">
                                        <p class="text-xs font-weight-bold mb-0">Email</p>
                                    </div>
                                </td>
                                <td class="align-middle text-sm">
                                    <div class="col text-center">
                                        <p class="text-xs font-weight-bold mb-0">Jenis Kelamin</p>
                                    </div>
                                </td>
                                <td class="align-middle text-sm">
                                    <div class="col text-center">
                                        <p class="text-xs font-weight-bold mb-0">Perusahaan</p>
                                    </div>
                                </td>
                                <td class="align-middle text-sm">
                                    <div class="col text-center">
                                        <p class="text-xs font-weight-bold mb-0">Alamat Perorang</p>
                                    </div>
                                </td>
                                <td class="align-middle text-sm">
                                    <div class="col text-center">
                                        <p class="text-xs font-weight-bold mb-0">Alamat Perusahaan</p>
                                    </div>
                                </td>
                                <td class="align-middle text-sm">
                                    <div class="col text-center">
                                        <p class="text-xs font-weight-bold mb-0">Aksi</p>
                                    </div>
                                </td>
                            </tr>
                            @foreach($user as $no=>$r)
                            <tr>
                                <td class="w-30">
                                    <div class="d-flex px-2 py-1 align-items-center">
                                        <div>
                                            {{$no = $no+1}}
                                        </div>
                                        <div class="ms-4">
                                            <h6 class="text-sm mb-0">{{$r->nik}}</h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-center">
                                        <h6 class="text-sm mb-0">{{$r->nama}}</h6>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-center">
                                        <h6 class="text-sm mb-0">{{$r->email}}</h6>
                                    </div>
                                </td>
                                <td class="align-middle text-sm">
                                    <div class="col text-center">
                                        <h6 class="text-sm mb-0">{{$r->jk}}</h6>
                                    </div>
                                </td>
                                <td class="align-middle text-sm">
                                    <div class="col text-center">
                                        <h6 class="text-sm mb-0">{{$r->perusahaan}}</h6>
                                    </div>
                                </td>
                                <td class="align-middle text-sm">
                                    <div class="col text-center">
                                        <h6 class="text-sm mb-0">{{$r->alamat_perorang}}</h6>
                                    </div>
                                </td>
                                <td class="align-middle text-sm">
                                    <div class="col text-center">
                                        <h6 class="text-sm mb-0">{{$r->alamat_perusahaan}}</h6>
                                    </div>
                                </td>
                                <td class="align-middle text-sm">
                                    <div class="col text-center">
                                        <h6 class="text-sm mb-0">
                                            <i class="bi bi-pencil-fill"></i>
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

    @endsection('content')