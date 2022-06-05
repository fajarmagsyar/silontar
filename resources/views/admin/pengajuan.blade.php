@extends('admin.layouts.main')
@section('content')


<div class="row mt-4">
    <div class="col-lg-12 mb-lg-0 mb-4">
        <div class="card ">
            <div class="card-header pb-0 p-3">
                <div class="d-flex justify-content-between">
                    <h6 class="mb-2">DATA PENGAJUAN</h6>
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
                                        <p class="text-xs font-weight-bold mb-0">Surat Permohonan</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="text-center">
                                    <p class="text-xs font-weight-bold mb-0">Surat Pernyataan</p>
                                </div>
                            </td>
                            <td>
                                <div class="text-center">
                                    <p class="text-xs font-weight-bold mb-0">KTP</p>
                                </div>
                            </td>
                            <td class="align-middle text-sm">
                                <div class="col text-center">
                                    <p class="text-xs font-weight-bold mb-0">NPWP</p>
                                </div>
                            </td>
                            <td class="align-middle text-sm">
                                <div class="col text-center">
                                    <p class="text-xs font-weight-bold mb-0">KSWP</p>
                                </div>
                            </td>
                            <td class="align-middle text-sm">
                                <div class="col text-center">
                                    <p class="text-xs font-weight-bold mb-0">NIB</p>
                                </div>
                            </td>
                            <td class="align-middle text-sm">
                                <div class="col text-center">
                                    <p class="text-xs font-weight-bold mb-0">SIUP</p>
                                </div>
                            </td>
                            <td class="align-middle text-sm">
                                <div class="col text-center">
                                    <p class="text-xs font-weight-bold mb-0">Akta Perusahaan</p>
                                </div>
                            </td>
                            <td class="align-middle text-sm">
                                <div class="col text-center">
                                    <p class="text-xs font-weight-bold mb-0">Gambar Lokasi</p>
                                </div>
                            </td>
                            <td class="align-middle text-sm">
                                <div class="col text-center">
                                    <p class="text-xs font-weight-bold mb-0">Jadwal Pelaksanaan</p>
                                </div>
                            </td>
                        </tr>

                        @foreach($pengajuan as $no=>$r)
                        <tr>
                            <td class="w-30">
                                <div class="d-flex px-2 py-1 align-items-center">
                                    <div>
                                        {{$no = $no+1}}
                                    </div>
                                    <div class="ms-4">
                                        <h6 class="text-sm mb-0"><a href="{{$r->surat_permohonan}}"><i class="ni ni-cloud-download-95"></i> Surat Permohonan</a></h6>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="text-center">
                                    <h6 class="text-sm mb-0"> <a href="{{$r->surat_pernyataan}}"><i class="ni ni-cloud-download-95"></i> Surat Pernyataan</a> </h6>
                                </div>
                            </td>
                            <td>
                                <div class="text-center">
                                    <h6 class="text-sm mb-0"><a href="{{$r->ktp}}"><i class="ni ni-cloud-download-95"></i> KTP</a></h6>
                                </div>
                            </td>
                            <td class="align-middle text-sm">
                                <div class="col text-center">
                                    <h6 class="text-sm mb-0"><a href="{{$r->npwp}}"></a><i class="ni ni-cloud-download-95"> NPWP</i></h6>
                                </div>
                            </td>
                            <td class="align-middle text-sm">
                                <div class="col text-center">
                                    <h6 class="text-sm mb-0"><a href="{{$r->kswp}}"></a><i class="ni ni-cloud-download-95"> KSWP</i></h6>
                                </div>
                            </td>
                            <td class="align-middle text-sm">
                                <div class="col text-center">
                                    <h6 class="text-sm mb-0"><a href="{{$r->nib}}"></a><i class="ni ni-cloud-download-95"> NIB</i></h6>
                                </div>
                            </td>
                            <td class="align-middle text-sm">
                                <div class="col text-center">
                                    <h6 class="text-sm mb-0"><a href="{{$r->siup}}"></a><i class="ni ni-cloud-download-95"> SIUP</i></h6>
                                </div>
                            </td>
                            <td class="align-middle text-sm">
                                <div class="col text-center">
                                    <h6 class="text-sm mb-0"><a href="{{$r->akta_perusahaan}}"></a><i class="ni ni-cloud-download-95"> Akta Perusahaan</i></h6>
                                </div>
                            </td>
                            <td class="align-middle text-sm">
                                <div class="col text-center">
                                    <h6 class="text-sm mb-0"><a href="{{$r->gambar_lokasi}}"></a><i class="ni ni-cloud-download-95"> Gambar Lokasi</i></h6>
                                </div>
                            </td>
                            <td class="align-middle text-sm">
                                <div class="col text-center">
                                    <h6 class="text-sm mb-0">{{$r->jadwal_pelaksanaan}}</h6>
                                </div>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>

                @endsection('content')