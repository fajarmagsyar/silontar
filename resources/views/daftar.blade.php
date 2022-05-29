<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>SiLontar - Registrasi User</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="/assets/img/Logo.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&family=Roboto:wght@400;700&display=swap"
        rel="stylesheet">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->

    <!-- Customized Bootstrap Stylesheet -->
    <link href="/user/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="/user/css/style.css" rel="stylesheet">
</head>

<body style="background-color: #FFE468">

    @if (session()->has('error'))
        <script>
            Swal.fire(
                'Gagal!',
                'Anda harus setuju syarat dan ketentuan sebelum registrasi',
                'error'
            )
        </script>
    @endif

    <!-- Quote Start -->
    <div class="container-fluid bg-primary bg-quote py-5">
        <div class="container py-5">
            <div class="row g-0 justify-content-start">
                <div class="col-lg-10 mx-auto">
                    <div class="bg-white text-center p-5" style="border-radius: 20px">
                        <h1 class="mb-5 text-start"><span>
                                <a href="/" class="text-dark"><i class="bi bi-arrow-left"></i></a> </span> Registrasi
                        </h1>
                        <form action="/registrasi" method="post">
                            @csrf
                            <div class="row g-3 mt-4">
                                @if (session()->has('error'))
                                    <div class="alert alert-danger">{{ session('error') }}</div>
                                @endif
                                <div class="row">
                                    <div class="col-6">
                                        <div class="col-12 mb-3 col-sm-12">
                                            <input required type="number" class="form-control bg-light border-0"
                                                name="nik" placeholder="NIK" style="height: 55px;">
                                        </div>
                                        <div class="col-12 mb-3 col-sm-12">
                                            <input required type="text" class="form-control bg-light border-0"
                                                name="nama" placeholder="Nama" style="height: 55px;">
                                        </div>
                                        <div class="col-12 mb-3 col-sm-12 text-start">
                                            <select required name="jk" class="form-select bg-light border-0"
                                                style="height: 55px;" id="">
                                                <option value="" selected disabled>Jenis Kelamin</option>
                                                <option value="Laki-laki">Laki-laki</option>
                                                <option value="Perempuan">Perempuan</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-6">

                                        <div class="col-12 mb-3 col-sm-12">
                                            <input required type="Email" class="form-control bg-light border-0"
                                                name="email" placeholder="Email" style="height: 55px;">
                                        </div>
                                        <div class="col-12 mb-3 col-sm-12">
                                            <input required type="password" class="form-control bg-light border-0"
                                                name="password" placeholder="Password" style="height: 55px;">
                                        </div>

                                        <div class="col-12 col-sm-12">
                                            <textarea name="alamat" class="form-control bg-light border-0" rows="1" placeholder="Alamat Pendaftar"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 text-start">
                                    <h4>Detail Perusahaan</h4>
                                </div>
                                <div class="col-12 col-sm-12">
                                    <input required type="text" class="form-control bg-light border-0"
                                        name="nama_perusahaan" placeholder="Nama Perusahaan" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-12">
                                    <textarea name="alamat_perusahaan" class="form-control bg-light border-0" placeholder="Alamat Perusahaan"></textarea>
                                </div>
                                <div class="col-12 col-sm-12 text-start">
                                    <input required type="checkbox" name="sdk">
                                    <label for="">Saya setuju dengan seluruh <a href=""
                                            style="color:rgb(64, 126, 208)">syarat dan ketentuan yang
                                            berlaku</a>.</label>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary py-3 px-5 float-end" type="submit">Registrasi <i
                                            class="bi bi-arrow-right mr-3"></i></button>
                                </div>
                            </div>

                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Quote End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark bg-footer text-light py-5">
        <div class="container py-0">
            <div class="row g-5">
                <div class="container">
                    <div class="row g-0">
                        <div class="col-md-6 text-center text-md-start">
                            <p class="mb-md-0">Copyright &copy; <a class="fw-bold" href="#">SiLONTAR
                                    {{ date('Y') }}</a>.
                                Made by ESC<sup>17</sup>.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->



    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/user/lib/easing/easing.min.js"></script>
    <script src="/user/lib/waypoints/waypoints.min.js"></script>
    <script src="/user/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="/user/js/main.js"></script>
</body>

</html>
