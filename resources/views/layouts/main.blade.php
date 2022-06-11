<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>SILONTAR</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="/assets/img/Logo.png" rel="icon">
    <link href="/assets/img/logo1.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

    <!-- ======= icon boostrap ============== -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <!-- Template Main CSS File -->
    <link href="/assets/css/style.css" rel="stylesheet">


</head>

<body>
    @if (session()->has('success'))
        <script>
            swal.fire('Berhasil', {{ session('success'), 'success' }})
        </script>
    @endif
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center justify-content-lg-between">

            <h1 class="logo me-auto me-lg-0"><a href="index.php">SILONTAR<span>.</span></a></h1>

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="nav-link scrollto active" href="/">BERANDA</a></li>
                    <li><a class="nav-link scrollto" href="/#panduan">PANDUAN UMUM</a></li>
                    <li><a class="nav-link scrollto" href="/#tentang">TENTANG</a></li>
                    <li><a class="nav-link scrollto" href="/#kontak">KONTAK</a></li>
                    @guest
                        <li><a class="nav-link scrollto" href="/login">LOGIN</a></li>

                    @endguest
                    @canany(['admin'])
                        <li><a class="nav-link scrollto" href="/admin/beranda">DASHBOARD</a></li>
                    @endcanany
                    <li>
                        @canany(['user'])
                        <li><a class="nav-link scrollto" href="/pengajuan">PENGAJUAN</a></li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                {{ strtoupper(auth()->user()->nama_perusahaan) }}
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">PROFIL</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item text-danger" href="/logout">LOGOUT</a></li>
                            </ul>
                        </li>
                    @endcanany
                    </li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center justify-content-center">
        <div class="container" data-aos="fade-up">

            <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
                <div class="col-xl-12 col-lg-8">
                    <h1>SISTEM INFORMASI LAYANAN ONLINE TRANSPARANSI DAN AKUNTABILITAS</h1>
                    <h2>BALAI PELAKSANAAN JALAN NASIONAL NUSA TENGGATA TIMUR</h2>
                </div>
            </div>
        </div>
    </section><!-- End Hero -->


    @yield('konten')


    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 col-md-6">
                        <div class="footer-info">
                            <h3>SILONTAR<span>.</span></h3>
                            <p>
                                BALAI PELAKSANAAN JALAN NASIONAL NUSA TENGGARA TIMUR<br>
                                <br><br>
                            </p>
                        </div>
                    </div>


                    <div class="col-lg-4 col-md-6 footer-links">
                        <h4>Link</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#hero">BERANDA</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#service">PANDUAN UMUM</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#tentang">TENTANG</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#kontak">KONTAK</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-newsletter">
                        <h4>Alamat</h4>
                        <p>Tanah Merah, Kec. Kupang Tengah, Kabupaten Kupang, Nusa Tenggara Tim.</p>

                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3927.845100346634!2d123.72670511438471!3d-10.111762511673845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2c5681962dcf8cb7%3A0xe35b0e878df8a43d!2sBalai%20Pelaksanaan%20Jalan%20Nasional%20NTT!5e0!3m2!1sid!2sid!4v1650532982237!5m2!1sid!2sid"
                            width="100%" height="230" style="border:0;"></iframe>

                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>SILONTAR</span></strong>. BALAI PELAKSANAAN JALAN NASIONAL NUSA TENGGARA TIMUR
            </div>
            <div class="credits">
                Designed by: ESC17
            </div>
        </div>
    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="/assets/vendor/purecounter/purecounter.js"></script>
    <script src="/assets/vendor/aos/aos.js"></script>
    <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="/assets/js/main.js"></script>

    <script>
        $('document').ready(function() {
            $(".fp").flatpickr();
        });
    </script>

</body>

</html>
