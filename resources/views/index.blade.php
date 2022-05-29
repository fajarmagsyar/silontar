@extends('layouts.main')
@section('konten')


<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">

        <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
            <div class="col-xl-12 col-lg-8">
                <h1>SISTEM INFORMASI </h1>
                <h2>BALAI BESAR PELAKSANAAN JALAN NASIONAL X - NUSA TENGGATA TIMUR</h2>
            </div>
        </div>

        <div class="row gy-4 mt-5 justify-content-center" data-aos="zoom-in" data-aos-delay="250">
            <div class="col-xl-3 col-md-4">
                <div class="icon-box">
                    <i class="ri-store-line"></i>
                    <h3><a href="">SILONTAR</a></h3>
                </div>
            </div>
            <div class="col-xl-3 col-md-4">
                <div class="icon-box">
                    <i class="bi bi-activity"></i>
                    <h3><a href="">SILONTAR</a></h3>
                </div>
            </div>
            <div class="col-xl-3 col-md-4">
                <div class="icon-box">
                    <i class="ri-calendar-todo-line"></i>
                    <h3><a href="">SILONTAR</a></h3>
                </div>
            </div>
            <div class="col-xl-3 col-md-4">
                <div class="icon-box">
                    <i class="bi bi-tools"></i>
                    <h3><a href="">SILONTAR</a></h3>
                </div>
            </div>

        </div>

        <marquee behavior="alternate">
            <h2>JAM OPERASIONAL LAYANAN ADALAH 08:00:00 - 17:00:00</h2>
        </marquee>
    </div>
</section><!-- End Hero -->

<main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">


            <div class="section-title">
                <h2>SILONTAR</h2>
            </div>

            <p align="justify" data-aos="zoom-in" data-aos-delay="100">

                Sistem Informasi Pemanfaatan Jalan adalah sistem terpadu yang berguna untuk
                memudahkan masyarakat baik sebagai perorangan, organisasi, badan usaha atau instansi pemerintah
                untuk mengajukan permohonan pemanfaatan ruang milik jalan yang dikelola oleh Balai Besar Pelaksanaan
                Jalan Nasional X Nusa Tenggara Timur. </br>
                Keunggulan dari SILONTAR (Sistem Informasi Pemanfaatan Jalan) Balai X Nusa Tenggara Timur adalah
                pemohon dapat melakukan pengecekan terhadap status permohonannya kapan saja dengan menggunakan nomor
                pengajuan yang didapat saat melakukan pengajuan. Bahkan setiap kali staff Balai melakukan pembaruan
                status pengajuan, sistem secara otomatis akan mengirimkan email notifikasi ke alamat
                email yang melakukan pengajuan permohonan tersebut.

            </p>

        </div>
    </section><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>PANDUAN UMUM</h2>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box">
                        <div class="icon"><i class="bi bi-laptop-fill"></i></div>
                        <h4><a href="">1. Lakukan Pendaftaran Online</a></h4>
                        <p>Sebelum dapat melakukan pengajuan, user diharuskan melakukan pendaftaran online terlebih dahulu
                            dengan menggunakan alamat email yang valid dan masih digunakan.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
                    <div class="icon-box">
                        <div class="icon"><i class="bi bi-box-arrow-in-right"></i></div>
                        <h4><a href="">2. Login Ke Aplikasi Perijinan</a></h4>
                        <p>Bagi user yang sudah melakukan verifikasi pendaftaran bisa melakukan login ke aplikasi
                            perijinan untuk dapat melakukan pengajuan perijinan.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
                    <div class="icon-box">
                        <div class="icon"><i class="bi bi-pencil-square"></i></div>
                        <h4><a href="">3. Mengisi Formulir Pengajuan</a></h4>
                        <p>User melakukan pengajuan perijinan dengan cara mengisi formulir pengajuan yang bisa ditemukan
                            pada menu Ajukan Permohonan di dalam aplikasi perijinan. Template Dokumen Dapat di Liat <a href="">Disini</a></p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box">
                        <div class="icon"><i class="bi bi-file-earmark-arrow-up-fill"></i></div>
                        <h4><a href="">4. Menyerahkan Hardcopy Dokumen</a></h4>
                        <p> Serahkan hardcopy dokumen pendukung terkait pengajuan perijinan yang telah dibuat ke kantor Balai Besar
                            Pelaksanaan Jalan Nasional X Nusa tenggara timur agar permohonan Anda dapat segera diproses.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
                    <div class="icon-box">
                        <div class="icon"><i class="bi bi-hourglass-split"></i></div>
                        <h4><a href="">5. Permohonan Sedang Diproses</a></h4>
                        <p>
                            Setelah dokumen diserahkan ke kantor Balai Besar Pelaksanaan Jalan Nasional X Nusa Tenggara Timur,
                            Anda dapat melacak permohonan Anda dengan menggunakan nomor pengajuan. Anda juga akan
                            mendapatkan email notifikasi setiap kali ada update proses permohonan.
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
                    <div class="icon-box">
                        <div class="icon"><i class="bi bi-telephone-inbound-fill"></i></div>
                        <h4><a href="">6. Melihat Status Permohonan</a></h4>
                        <p> Setelah semua proses sudah dilakukan dengan prosedur yang berlaku, staff Balai Besar Pelaksanaan Jalan
                            Nasional X Nusa Tenggara Timur akan menghubungi Anda melalui telepon dan/atau email terkait
                            status permohonan Anda (Diterima/Ditolak).</p>
                    </div>
                </div>

            </div>

            <iframe width="100%" height="350" src="https://www.youtube.com/embed/5XWqVnIf-mQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

        </div>
    </section><!-- End Services Section -->


    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">


            <div class="section-title">
                <h2>HUBUNGI KAMI</h2>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box">
                        <div class="icon"><i class="bi bi-laptop-fill"></i></div>
                        <h4><a href="">MEDIAN SOSIAL</a></h4>
                        <P>
                            BABFKBASBK
                        </P>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
                    <div class="icon-box">
                        <div class="icon"><i class="bi bi-box-arrow-in-right"></i></div>
                        <h4><a href="">TELEPON</a></h4>
                        <p>+62</p>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End About Section -->


    @endsection('konten')