@extends('layouts.main')
@section('konten')

<section id="about" class="about">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
        <h2>DOKUMEN</h2>
        </div>

    <div class="container ">
        <div class="tab">
            <button class="tablinks" onmouseover="openCity(event, 'dokumen')">Dokumen</button>
            <button class="tablinks" onmouseover="openCity(event, 'tentang')">Tentang Kami</button>
            <button class="tablinks" onmouseover="openCity(event, 'kontak')">Kontak</button>
          </div>
          
          <div id="dokumen" class="tabcontent">
            <button class="accordion mt-4">Berkas 1 <i class="bi bi-plus-circle-fill"></i></button>
            <div class="panel">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
            
            <button class="accordion">Berkas 2 <i class="bi bi-plus-circle-fill"></i></button>
            <div class="panel">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
            
            <button class="accordion">berkas 3 <i class="bi bi-plus-circle-fill"></i></button>
            <div class="panel">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
          </div>
          
          <div id="tentang" class="tabcontent">
            <div class="container mt-2">
            <p class="text-justify mt-4">
                BALAI PELAKSANAAN JALAN NASIONAL NUSA TENGGARA TIMUR <br>
                merupakan kantor
            </p> 
        </div>
          </div>
          
          <div id="kontak" class="tabcontent">
            <div class="row">
                <div class="col-lg-6 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box">
                        <p>MEDIA SOSIAL</p>
                        <p>
                            <i class="bi bi-envelope-fill"> 
                                <a href= "https://mail.google.com/mail/u/0/?view=cm&tf=1&fs=1&to=silontarbpjn@gmail.com" target="_blank">silontarbpjn@gmail.com</a></i><br>
                            <i class="bi bi-facebook"> <a href="https://www.facebook.com/pages/Redland-BPJN-X-Kupang/141964382947530" target="_blank"> balaijalanxntt</a></i><br>
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