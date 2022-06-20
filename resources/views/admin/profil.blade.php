@extends('admin.layouts.main')
@section('content')

<div class="container-fluid py-4">
<div class="card ">
        <div class="card-header pb-0 p-3">
            <div class="d-flex justify-content-between">
                <h6 class="mb-2">PROFIL ADMIN</h6>
            </div>
        </div>
    <div class="row">
        <div class="col-2 mb-2 mt-3 ml-5"><img src="/assets/img/Logo.png" width="100%" height="170px" alt=""></div>
            <div class="col-5 mb-2 mt-3">
                <form action="">
                     <span class="">Data Admin</span><br>
                        <label class="form-label">Nama:</label>
                            <input type="text" class="form-control text-dark mr-3   "value="{{ $dataUser->nama }}" 
                            style="font-size: 14px"readonly>
                        <label class="form-label">Email:</label>
                            <input type="text" class="form-control text-dark"value="{{ $dataUser->email }}" 
                            style="font-size: 14px"readonly>
                </form>
            </div>
            <div class="col-5 mb-2 mt-3 "></div>
    </div>
</div>
</div>

    @endsection('content')