@extends('layouts.main')
@section('konten')

<section id="about" class="about">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
        <h2>FREQUENTLY ASKED QUESTIONS</h2>
        </div>

    <div class="container ">
        <div class="tab">
            <button class="tablinks" onmouseover="openCity(event, 'hukum')"> Dasar Hukum</button>
            <button class="tablinks" onmouseover="openCity(event, 'dokumen')">Format A1 dan A2</button>
            <button class="tablinks" onmouseover="openCity(event, 'tentang')">Tentang SiLONTAR</button>
            <button class="tablinks" onmouseover="openCity(event, 'panduan')">Panduan SiLONTAR</button>
            <button class="tablinks" onmouseover="openCity(event, 'kontak')">Kontak</button>
          </div>
          @foreach ($berkas as $s)
            
          <div id="hukum" class="tabcontent">
            <button class="accordion mt-4">Peraturan Menteri Pekerjaan Umum Nomor: 20/PRTM/2010</button>
            <div class="panel">
              <p>Peraturan Menteri Pekerjaan Umum Nomor: 20/PRTM/2010 <a href="{{ $s->permen }}"><i class="bi bi-cloud-arrow-down-fill"></i></a>
              </p>
            </div>
            
            <button class="accordion">Surat Edaran Direktur Jendral Bina Marga</button>
            <div class="panel">
              <p>Prosedur Perzinan Pemanfaatan Bagian-bagian Jalan Nasional <a href="{{ $s->edaran  }}"><i class="bi bi-cloud-arrow-down-fill"></i></a>
              </p>
            </div>
          </div>
          @endforeach

        @foreach ($berkas as $r)
            
          <div id="dokumen" class="tabcontent">
            <button class="accordion mt-4">Surat Permohonan (A1)</button>
            <div class="panel">
              <p>Contoh format surat permohonan dapat di unduh <a href="{{ $r->path }}"> disini!</a>
              </p>
            </div>
            
            <button class="accordion">Surat Pernyataan (A2) </button>
            <div class="panel">
              <p>Contoh format surat Pernyataan dapat di unduh <a href="{{ $r->keterangan  }}"> disini!</a>
              </p>
            </div>
          </div>
          @endforeach

          <div id="tentang" class="tabcontent">
            <button class="accordion mt-4">Apa fungsi dari SiLONTAR?</button>
            <div class="panel">
              <p style="text-align: justify">
                Aplikasi SILONTAR adalah aplikasi berbasis web yang dikembangkan oleh pihak BPJN NTT dalam rangka
                untuk memudahkan pihak-pihak terkait yang ingin mengajukan permohonan pemanfaatan ruang milik jalan.
                Ruang milik jalan yang bisa dimanfaatkan
                adalah ruang milik jalan lingkup ruas Jalan Nasional di provinsi Nusa tenggara timur.</p>
                <p style="text-align: justify"> Pemanfaatan ruang milik jalan ini antara lain adalah pemasangan kabel tanam (fiber optic),
                jaringan utilitas, papan iklan/reklame, jalan keluar-masuk, bangunan, dan sebagainya.</p>
                <p style="text-align: justify"> Oleh karena itu, dengan adanya aplikasi SILONTAR ini, proses pengajuan permohonan pemanfaatan ruang milik jalan yang selama
                ini dilakukan secara manual (offline),
                bisa dilakukan secara online, tanpa harus datang ke BPJN NTT secara langsung.
              </p>
            </div>
            
            <button class="accordion">Siapa saja yang boleh mendaftar dalam aplikasi SILONTAR?</button>
            <div class="panel">
              <p style="text-align: justify">
                Siapapun boleh mendaftarkan diri untuk menggunakan aplikasi SILONTAR, baik perorangan maupun organisasi,
                asalkan tujuan utamanya adalah untuk mengajukan permohonan pemanfaatan ruang milik jalan dalam wilayah BPJN NTT.</p>

               <p style="text-align: justify"> Bagaimana cara mendaftarkan diri dalam aplikasi Si-Rumija? J:Jika anda belum memiliki akun, silakan mendaftarkan
                diri atau organisasi yang anda wakilkan, melalui tautan "Register", yang ada disebelah kiri bawah dari form login.

              </p>
            </div>

            <button class="accordion">Email siapakah yang harus saya daftarkan dalam aplikasi SILONTAR?</button>
            <div class="panel">
              <p style="text-align: justify">
                Email yang didaftarkan adalah salah satu dari berikut,<br>
                1)	Jika anda mewakili perorangan, maka daftarkan email pribadi anda,
                 agar pemberitahuan atau informasi terbaru dari BPJN NTT langsung masuk ke email pribadi anda.<br>
                2)	Jika anda mewakili organisasi tertentu (yayasan, perusahaan, dll),
                 maka daftarkan email organisasi anda, yang mana email tersebut adalah email organisasi yang dipakai
                  secara umum sebagai sumber informasi bersama bagi pihak organisasi. Sehingga jika ada pihak luar (termasuk BPJN NTT) yang
                  mengirimkan email atau informasi tertentu, maka diterima oleh admin (pemegang email) lalu kemudian untuk disebarkan ke pihak
                   yang berkepentingan didalam organisasi
              </p>
            </div>
          </div>

          
          <div id="panduan" class="tabcontent">
            @foreach($berkas as $p)
            <div class="container">
                  <div class="col-lg-12 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
                    <p>Buku panduan penggunaan Aplikasi SILONTAR <a href="{{ $p->panduan }}"><i class="bi bi-cloud-arrow-down-fill"></i></a></p>
                  </div>
                  @endforeach
            </div>
          </div>
            
          
        <div id="kontak" class="tabcontent">
          <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box">
                        <p>MEDIA SOSIAL</p>
                        <p>
                            <i class="bi bi-envelope-fill"> 
                                <a href= "https://mail.google.com/mail/u/0/?view=cm&tf=1&fs=1&to=silontarbpjn@gmail.com" target="_blank">silontarbpjn@gmail.com</a></i><br>
                            <i class="bi bi-whatsapp"> 
                            <a href="https://wa.me/+6282247899017?text=Hallo%20admin" target="_blank">+6282247899017</a></i>
                            <br>
                            <i class="bi bi-instagram">
                                <a href="https://www.instagram.com/pupr_jalan_ntt/?hl=id" target="_blank">pupr_jalan_ntt</a>
                            </i>
                        </p>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
                    <div class="icon-box">
                        <p>TELEPON</p>
                        <i class="bi bi-telephone-fill">
                            <a href="tel:+6282247899017">+6282247899017</a>
                        </i>
                    </div>
                </div>
          </div>

          
          </div>
        </div>

          

        
    </div>
</section>
<script>
    var acc = document.getElementsByClassName("accordion");
    var i;
    
    for (i = 0; i < acc.length; i++) {
      acc[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.display === "block") {
          panel.style.display = "none";
        } else {
          panel.style.display = "block";
        }
      });
    }

    function openCity(evt, cityName) {
          var i, tabcontent, tablinks;
          tabcontent = document.getElementsByClassName("tabcontent");
          for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
          }
          tablinks = document.getElementsByClassName("tablinks");
          for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
          }
          document.getElementById(cityName).style.display = "block";
          evt.currentTarget.className += " active";
        }
    </script>
    

@endsection('konten')