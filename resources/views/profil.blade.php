@extends('layouts.main')
@section('konten')
<div class="container">
    <h1>HALAMAN PROFIL</h1>
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
            </tbody>
        </table>
    </div>



    @endsection('konten')