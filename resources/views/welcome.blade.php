<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>My Portfolio - Lucas Kalasuvich</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('assets/img/user.png') }}" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
        <img src="assets/img/Picture 002A.jpg" alt="" class="img-fluid rounded-circle">
        <h1 class="text-dark">Lucas <br> Kalasuvich</h1>
        {{-- <div class="social-links mt-3 text-center">
          <a href="https://www.facebook.com/kala.kalasuvich/" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="https://www.instagram.com/lucaskalasuvich_/?next=%2F" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="https://www.linkedin.com/in/lucas-kalasuvich-486470223/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div> --}}
      </div>

      <nav id="navbar" class="nav-menu navbar">
        <ul>
          <li><a href="#hero" class="nav-link scrollto active btn btn-light btn-lg text-dark"><i class="bx bx-home text-dark"></i> <span>Home</span></a></li>
          <li><a href="#about" class="nav-link scrollto btn btn-light btn-lg text-dark"><i class="bx bx-user text-dark"></i> <span>About</span></a></li>
          <li><a href="#resume" class="nav-link scrollto btn btn-light btn-lg text-dark"><i class="bx bx-file-blank text-dark"></i> <span>Resume</span></a></li>
          <li><a href="#portfolio" class="nav-link scrollto btn btn-light btn-lg text-dark"><i class="bx bx-book-content text-dark"></i> <span>Portfolio</span></a></li>
          <li><a href="{{asset('assets/Lucas Kalasuvich, S.Kom-resume (1).pdf')}}" class="btn btn-light btn-lg text-dark nav-link scrollto"><i class="bx bx-download text-dark"></i> <span>Curriculum Vitae</span></a></li>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container" data-aos="fade-in">
      {{-- <h1>Lucas Kalasuvich</h1> --}}
      <p>It's Me!, Hi I'm <span class="typed" data-typed-items="Lucas Kalasuvich"></span></p>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>About</h2>
          {{-- <p>Saya pernah melakukan internship di instansi Dewan Perwakilan 
            Rakyat Republik (DPR RI) Indonesia Selama 1 tahun pengalaman. Memiliki kemampuan di bidang web developer sebagai backend developer menggunakan framework laravel.</p> --}}
        </div>

        <div class="row">
          <div class="col-lg-4" data-aos="fade-right">
            <img src="assets/img/LucasKa.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
            <h3>Backend Developer, Fullstack Developer &amp; Web Developer.</h3>
            <br>
            {{-- <p class="fst-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p> --}}
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>8 July 2001</span></li>
                  {{-- <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span>www.example.com</span></li> --}}
                  <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>081298417736</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>Tangerang, Indonesia</span></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>22</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>Bachelor Degree</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span>lucaskalasuvich2001@gmail.com</span></li>
                  {{-- <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span>Available</span></li> --}}
                </ul>
              </div>
            </div>
            <p>Saya sebagai fresh graduate lulusan S1 Teknik Informatika di Bina Nusantara University yang sedang mencari kesempatan karir di bidang IT. Saya mampu bekerja secara individu maupun tim dan memiliki kemauan tinggi dalam belajar hal baru untuk mencapai keberhasilan dalam karir kedepannya.</p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Hobby Section ======= -->
    <section id="facts" class="facts">
      <div class="container">
        <div class="section-title">
          <h2>Hobby</h2>
          <div class="col-lg-6" data-aos="fade-left">
            <ul>
              <li><i class="bi"></i> <span>Football</span></li>
              <li><i class="bi"></i> <span>Swimming</span></li>
              <li><i class="bi"></i> <span>Design</span></li>
              <li><i class="bi"></i> <span>Writing</span></li>
            </ul>
          </div>
        </div>
      </div>
    </section><!-- End Hobby Section -->

    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Skills</h2>
        </div>

        <div class="row skills-content">

          <div class="col-lg-6" data-aos="fade-up">

            <div class="progress">
              <span class="skill">HTML <i class="val">80%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">CSS <i class="val">80%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Business Process <i class="val">80%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Unified Modeling Language (UML) <i class="val">90%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Figma <i class="val">80%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">JavaScript <i class="val">65%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">

            <div class="progress">
              <span class="skill">PHP <i class="val">80%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Laravel <i class="val">85%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">MySQL <i class="val">85%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Canva <i class="val">90%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Cisco Packet Tracer <i class="val">75%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Photoshop <i class="val">65%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Skills Section -->

    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
      <div class="container">

        <div class="section-title">
          <h2>Resume</h2>
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="fade-up">
            {{-- <h3 class="resume-title">Sumary</h3>
            <div class="resume-item pb-0">
              <h4>Alex Smith</h4>
              <p><em>Innovative and deadline-driven Graphic Designer with 3+ years of experience designing and developing user-centered digital/print marketing material from initial concept to final, polished deliverable.</em></p>
              <ul>
                <li>Portland par 127,Orlando, FL</li>
                <li>(123) 456-7891</li>
                <li>alice.barkley@example.com</li>
              </ul>
            </div> --}}

            <h3 class="resume-title">Education</h3>
            <div class="resume-item">
              <h4>Sekolah Dasar</h4>
              <h5>2007 - 2013</h5>
              <p><em>SD Negeri Pesanggrahan 08 Petang Jakarta Selatan</em></p>
              {{-- <p>Qui deserunt veniam. Et sed aliquam labore tempore sed quisquam iusto autem sit. Ea vero voluptatum qui ut dignissimos deleniti nerada porti sand markend</p> --}}
            </div>
            <div class="resume-item">
              <h4>Sekolah Menengah Pertama</h4>
              <h5>2013 - 2016</h5>
              <p><em>SMP Negeri 2 Kota Tangerang Selatan</em></p>
              {{-- <p>Quia nobis sequi est occaecati aut. Repudiandae et iusto quae reiciendis et quis Eius vel ratione eius unde vitae rerum voluptates asperiores voluptatem Earum molestiae consequatur neque etlon sader mart dila</p> --}}
            </div>
            <div class="resume-item">
                <h4>Sekolah Menengah Atas</h4>
                <h5>2016 - 2019</h5>
                <p><em>SMA DuaMei Ciputat Tangerang Selatan</em></p>
                {{-- <p>Quia nobis sequi est occaecati aut. Repudiandae et iusto quae reiciendis et quis Eius vel ratione eius unde vitae rerum voluptates asperiores voluptatem Earum molestiae consequatur neque etlon sader mart dila</p> --}}
            </div>
            <div class="resume-item">
                <h4>Universitas</h4>
                <h5>2019 - 2023</h5>
                <p><em>Binus University Jakarta</em></p>
                {{-- <p>Quia nobis sequi est occaecati aut. Repudiandae et iusto quae reiciendis et quis Eius vel ratione eius unde vitae rerum voluptates asperiores voluptatem Earum molestiae consequatur neque etlon sader mart dila</p> --}}
            </div>
          </div>
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <h3 class="resume-title">Work Experience</h3>
            <div class="resume-item">
              <h4>Web Developer & Backend Developer</h4>
              <h5>Jan 2022 - Feb 2023 (1 Tahun)</h5>
              <p><em>Sekretariat Jenderal Dewan Perwakilan Rakyat Republik Indonesia (Sekjen DPR RI) </em></p>
              <ul>
                <li>Bekerja dalam tim maupun individu.</li>
                <li>Membuat dan mengembangkan website dengan judul PERBARA (Persiapan Bahan Rapat) dan Sipenarik (Sistem Penandatangan Elektronik).</li>
                <li>Menggunakan Framework Laravel.</li>
                <li>Implementasi tanda tangan elektronik pada laravel dengan Kriptografi Algoritma RSA (Rivest Shamir Adleman).</li>
                <li>Menggunakan Digest Message SHA-512 untuk keamanan public key dan private key.</li>
                <li>Menampilkan barcode 2D untuk menampilkan penandatangan.</li>
                <li>Menggunakan Library TCPDF-Laravel dan FPDI-Laravel untuk menempatkan barcode, public key dan private key pada dokumen pdf.</li>
              </ul>
            </div>
            <div class="resume-item">
              <h4>Freelance Fullstack Developer</h4>
              <h5>Aug 2023 - Sep 2023 (2 Bulan)</h5>
              <p><em>Ramsay Sime Darby Health Care – Premier Bintaro</em></p>
              <ul>
                <li>Bekerja dalam tim maupun individu.</li>
                <li>Membuat dan mengembangkan website Untuk Melihat Proses Implementasi Dari Setiap Kesepakatan Yang Telah Didiskusikan Dalam Meeting Case Pasien.</li>
                <li>Menggunakan Framework Laravel.</li>
                <li>Menerapkan live input menggunakan javascript.</li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Resume Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Portfolio</h2>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-web">Web</li>
              <li data-filter=".filter-certificate">Certificate</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/perbara.png" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/perbara.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Gambar 1: Website Persiapan Bahan Rapat Paripurna (Login Page)"><i class="bx bx-plus"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/perbara2.png" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/perbara2.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Gambar 2: Website Persiapan Bahan Rapat Paripurna (Mitra Internal Page)"><i class="bx bx-plus"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/sipenarik2.png" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/sipenarik2.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Gambar 1: Website Tanda Tangan Elektronik (Login Page)"><i class="bx bx-plus"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/sipenarik.png" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/sipenarik.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Gambar 2: Website Tanda Tangan Elektronik (Upload Page)"><i class="bx bx-plus"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-certificate">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/dpr.png" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/dpr.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Sertifikat Internship 1 Tahun Di Dewan Perwakilan Rakyat Republik Indonesia"><i class="bx bx-plus"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/Rootbin.png" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/Rootbin.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Website Rootbin Dalam Case Setiap Pasien"><i class="bx bx-plus"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-certificate">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/toefl.png" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/toefl.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Sertifikat TOEFL"><i class="bx bx-plus"></i></a>
              </div>
            </div>
          </div>
          
          <div class="col-lg-4 col-md-6 portfolio-item filter-certificate">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/goolang.png" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/goolang.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Sertifikat Golang"><i class="bx bx-plus"></i></a>
              </div>
            </div>
          </div>

        </div>

      </div>
      
    </section><!-- End Portfolio Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="social-links text-center">
        {{-- <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a> --}}
        <a href="https://www.facebook.com/kala.kalasuvich/" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="https://www.instagram.com/lucaskalasuvich_/?next=%2F" class="instagram"><i class="bx bxl-instagram"></i></a>
        {{-- <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a> --}}
        <a href="https://www.linkedin.com/in/lucas-kalasuvich-486470223/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
   
      </div>
    </div>
  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/typed.js/typed.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('assets/js/main.js') }}"></script>
  {{-- <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script> --}}
  {{-- <script src="assets/vendor/aos/aos.js"></script> --}}
  {{-- <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script> --}}
  {{-- <script src="assets/vendor/glightbox/js/glightbox.min.js"></script> --}}
  {{-- <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script> --}}
  {{-- <script src="assets/vendor/swiper/swiper-bundle.min.js"></script> --}}
  {{-- <script src="assets/vendor/typed.js/typed.min.js"></script> --}}
  {{-- <script src="assets/vendor/waypoints/noframework.waypoints.js"></script> --}}
  {{-- <script src="assets/vendor/php-email-form/validate.js"></script> --}}

  <!-- Template Main JS File -->
  {{-- <script src="assets/js/main.js"></script> --}}

</body>

</html>