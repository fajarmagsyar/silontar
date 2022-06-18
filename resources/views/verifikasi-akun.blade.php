<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>SiLONTAR - Verifikasi Token</title>
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

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="/user/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="/user/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="/user/css/style.css" rel="stylesheet">
</head>

<body style="background-color: #FFE468">

    @if (session()->has('error'))
        <script>
            Swal.fire("Gagal", "{{ session('error') }}", "error");
        </script>
    @endif

    <!-- Quote Start -->
    <div class="container-fluid bg-primary bg-quote py-5">
        <div class="container py-5">
            <div class="row g-0 justify-content-start">
                <div class="col-lg-5 mx-auto">
                    <div class="bg-white text-center p-5" style="border-radius: 20px">
                        <img src="/logo.png" width="100px" alt="">
                        <h1 class="mb-4 mt-4">SiLontar</h1>
                        <form action="/auth/verifikasi-token" method="post">
                            @csrf
                            <div class="row g-3">
                                @if (session()->has('error'))
                                    <div class="alert alert-danger">{{ session('error') }}</div>
                                @endif
                                @if (session()->has('success'))
                                    <div class="alert alert-success">{{ session('success') }}</div>
                                @endif
                                <div class="col-12 col-sm-12">
                                    <input type="text" class="form-control bg-light border-0" name="token"
                                        placeholder="6 Digit Token Anda" style="height: 55px;">
                                </div>
                                <span class="text-muted">Jika email tidak masuk, cek folder spam anda.</span><br>
                                <div class="row mt-4">
                                    <div class="col-6">
                                        <a href="/kirim-token" class="btn btn-dark w-100 py-3">
                                            <i class="bi bi-arrow-counterclockwise"></i>
                                            Kirim ulang
                                        </a>
                                    </div>
                                    <div class="col-6">
                                        <button class="btn btn-primary w-100 py-3" type="submit">Verifikasi</button>
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

    <br><br <!-- Footer Start -->
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
