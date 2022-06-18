@extends('layouts.main')
@section('konten')
<div class="container mt-2 mb-1">
    <h3 class="text-center">HALAMAN PROFIL </h3>
    <div class="row">
        
        <div class="col-6 mt-4 mb-4">
            <p class="spaan"> Data Profil</p><br>
            <label class="form-label">Nama Perusahaan:</label>
                <input type="text" class="form-control text-dark"value="{{ $dataUser->nama_perusahaan }}" 
                style="font-size: 14px"readonly>
                <label class="form-label">Nama Direktur:</label>
                <input type="text" class="form-control text-dark"value="{{ $dataUser->nama_direktur }}" 
                style="font-size: 14px"readonly>
                <label class="form-label">Alamat Perusahaan:</label>
                <input type="text" class="form-control text-dark"value="{{ $dataUser->alamat_perusahaan }}" 
                style="font-size: 14px"readonly>
                <label class="form-label">Lokasi Permohonan:</label>
                <input type="text" class="form-control text-dark"value="{{ $dataUser->lokasi_permohonan }}" 
                style="font-size: 14px"readonly>
                <label class="form-label">Email:</label>
                <input type="text" class="form-control text-dark"value="{{ $dataUser->email }}" 
                style="font-size: 14px"readonly>
        </div>
        <div class="col-6 mt-4 mb-4">
            <p class="ubah"> Ubah Password</p> <br>
            @if (session()->has('success'))
            <div class="alert alert-success text-center">{{ session('success') }}</div>
            @endif
            @if (session()->has('error'))
            <div class="alert alert-danger text-center">{{ session('error') }}</div>
            @endif
            
            <div class="ubah-pass">
            <form action="/profil/ubahpassword" method="post">
                @csrf
                <label class="form-label">password Lama:</label>
                <input type="password" name="password-lama" class="form-control text-dark" placeholder="Masukan password lama anda" style="font-size: 14px" >
            <label class="form-label">Password Baru:</label>
                <input type="password" name="password-baru" class="form-control text-dark" placeholder="Masukan password yang belum digunakan" style="font-size: 14px" >
                <label class="form-label">Konfirmasi password:</label>
                <input type="password" class="form-control text-dark" placeholder="Masukan kembali password untuk mengkonfirmasi pembaruan password"style="font-size: 14px" >
                
                <button type="submit" class="btn btn-info">Ubah Password</button>
            </form>
            </div>
        </div>
    </div>

</div>


    @endsection('konten')