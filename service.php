<?php 

$statusMsg = '';
$msgClass = '';
if(isset($_POST['submit'])){
    // Get the submitted form data
    $email = $_POST['email'];
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Cek apakah ada data yang belum diisi
    if(!empty($email) && !empty($name) && !empty($subject) && !empty($message)){

        if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
            $statusMsg = 'Please enter your valid email.';
            $msgClassk = 'errordiv';
        }else{
            // Pengaturan penerima email dan subjek email
            $toEmail = 'pagigelap66@gmail.com'; // Ganti dengan alamat email yang Anda inginkan
            $emailSubject = 'Pesan website dari '.$name;
            $htmlContent = '<h2> via Form Kontak Website</h2>
                <h4>Name</h4><p>'.$name.'</p>
                <h4>Email</h4><p>'.$email.'</p>
                <h4>Subject</h4><p>'.$subject.'</p>
                <h4>Message</h4><p>'.$message.'</p>';

            // Mengatur Content-Type header untuk mengirim email dalam bentuk HTML
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

            // Header tambahan
            $headers .= 'From: '.$name.'<'.$email.'>'. "\r\n";

            // Send email
            if(mail($toEmail,$emailSubject,$htmlContent,$headers)){
                $statusMsg = 'Pesan Anda sudah terkirim dengan sukses !';
                $msgClass = 'succdiv';
            }else{
                $statusMsg = 'Maaf pesan Anda gagal terkirim, silahkan ulangi lagi.';
                $msgClass = 'errordiv';
            }
        }
    }else{
        $statusMsg = 'Harap mengisi semua field data';
        $msgClass = 'errordiv';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Legitima Indonesia</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <!-- Favicon -->
    <link href="img/hero.png" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap" rel="stylesheet" />

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet" />
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet" />
  </head>

  <body>
    <div class="container-xxl bg-white p-0">
      <!-- Spinner Start -->
      <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem" role="status">
          <span class="sr-only">Loading...</span>
        </div>
      </div>
      <!-- Spinner End -->

      <!-- Navbar & Hero Start -->
      <div class="container-xxl position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
          <a href="index.php" class="navbar-brand p-0">
            <img src="img/logo.png" alt="Logo" />
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0 pe-4">
              <a href="index.php" class="nav-item nav-link">Home</a>
              <a href="about.php" class="nav-item nav-link">About</a>
              <a href="service.php" class="nav-item nav-link active">Service</a>
              <a href="menu.php" class="nav-item nav-link">Projects</a>
              <a href="team.php" class="nav-item nav-link">Our Team</a>
              <a href="contact.php" class="nav-item nav-link">Contact</a>
            </div>
          </div>
        </nav>

        <div class="container-xxl py-5 bg-dark hero-header mb-5">
          <div class="container text-center my-5 pt-5 pb-4">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Services</h1>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb justify-content-center text-uppercase">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">Service</li>
              </ol>
              <a class="btn btn-outline-light btn-social" href="https://www.instagram.com/legitima.indonesia/"><i class="fab fa-instagram"></i></a>
              <a class="btn btn-outline-light btn-social" href="https://twitter.com/legitima_id"><i class="fab fa-twitter"></i></a>
              <a class="btn btn-outline-light btn-social" href="https://www.linkedin.com/company/legitima-id/"><i class="fab fa-linkedin-in"></i></a>
            </nav>
          </div>
        </div>
      </div>
      <!-- Navbar & Hero End -->

      <!-- Service Start -->
      <div class="container">
        <div class="text-center">
          <div id="strategy"></div>
          <h5 class="section-title ff-secondary text-primary fw-normal">Our</h5>
          <h1 class="mb-5">Services</h1>
        </div>

        <div class="row service-item rounded" style="padding-top: 20px; padding-bottom: 20px; padding-left: 20px">
          <div class="col-12 col-md-8" style="padding-right: 30px">
            <h3 class="mb-4">Digital Strategy Consultancy</h3>
            <p class="mb-4">
              Berubahnya penggunaan marketing konvensional menuju digital, tentu berdampak pada strategi yang akan dijalankan suatu bisnis. Untuk itu, kami mendorong adanya tranformasi digital pada semua lini bisnis. Dan melalui pendekatan
              analitis, kami berusaha membantu dalam memenangkan pasar dan menentukan digital positioning.
            </p>
          </div>
          <div class="col-10 col-md-3">
            <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.1s" src="img/about-1.jpg" />
            <div id="advertising"></div>
          </div>
        </div>
        <div style="padding-top: 40px"></div>
        <div class="row service-item rounded" style="padding-top: 20px; padding-bottom: 20px; padding-left: 20px">
          <div class="col-10 col-md-3">
            <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.1s" src="img/about-1.jpg" />
          </div>
          <div class="col-12 col-md-8" style="padding-right: 30px">
            <h3 class="mb-4">Digital Advertising</h3>
            <p class="mb-4">
              Digital marketing tentu tidak dapat terlepas dari pengiklanan. Pengiklanan bertujuan untuk memungkinkan banyak orang melihat bisnis atau konten yang dijalankan sehingga akan berdampak pada penjualan. Saat ini pengiklanan
              digital dapat dilakukan melalui Facebook Ads dan Google Ads. Dalam hal ini, kami mampu merencanakan dan mengelola performa kampanye digital dan mendorong kemajuan serta pengembangan bisnis kalian.
            </p>
            <div id="sosmed"></div>
          </div>
        </div>
        <div style="padding-top: 40px"></div>
        <div class="row service-item rounded" style="padding-top: 20px; padding-bottom: 20px; padding-left: 20px">
          <div class="col-12 col-md-8" style="padding-right: 30px">
            <h3 class="mb-4">Social Media Maintenance</h3>
            <p class="mb-4">
              Kami membangun kehadiran sosial media yang kuat dan mengoptimalkan brand awareness dengan pendekatatan full-service social media management.
              <li>Set Marketing Target</li>
              <li>Social Media Content</li>
              <li>Influencers Marketing</li>
            </p>
          </div>
          <div class="col-10 col-md-3">
            <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.1s" src="img/about-1.jpg" />
            <div id="brand"></div>
          </div>
        </div>
        <div style="padding-top: 40px"></div>
        <div class="row service-item rounded" style="padding-top: 20px; padding-bottom: 20px; padding-left: 20px">
          <div class="col-10 col-md-3">
            <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.1s" src="img/about-1.jpg" />
          </div>
          <div class="col-12 col-md-8" style="padding-right: 30px">
            <h3 class="mb-4">Brand Identity</h3>
            <p class="mb-4">
              Bagi sebuah perusahaan, branding bukan sekedar mengenalkan merk, namun sebagai image secara keseluruhan. Kami melakukan berbagai strategi branding yang tepat dan unik untuk membantu mendekatkan konsumen dengan brand kalian.
              <li>Menganalisis perusahaan dan target pasar.</li>
              <li>Menentukan inti dari tujuan perusahaan.</li>
              <li>Identifikasi konsumen yang dituju.</li>
            </p>
            <div id="video"></div>
          </div>
        </div>
        <div style="padding-top: 40px"></div>
        <div class="row service-item rounded" style="padding-top: 20px; padding-bottom: 20px; padding-left: 20px">
          <div class="col-12 col-md-8" style="padding-right: 30px">
            <h3 class="mb-4">Video Production</h3>
            <p>
              Memproduksi video marketing adalah salah satu cara kreatif di era digital. Kami memproduksi video dengan penggunaan berbagai media serta konsep menarik yang mudah diserap dan mengubah adiens menjadi customer kalian.
              <li>Teks</li>
              <li>Audio</li>
              <li>Grafik</li>
              <li>Animasi</li>
              <li>Video</li>
            </p>
          </div>
          <div class="col-10 col-md-3">
            <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.1s" src="img/about-1.jpg" />
            <div id="photo"></div>
          </div>
        </div>
        <div style="padding-top: 40px"></div>
        <div class="row service-item rounded" style="padding-top: 20px; padding-bottom: 20px; padding-left: 20px">
          <div class="col-10 col-md-3">
            <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.1s" src="img/about-1.jpg" />
          </div>
          <div class="col-12 col-md-8" style="padding-right: 30px">
            <h3 class="mb-4">Product Photography</h3>
            <p>
              Foto produk yang terkonsep akan memberikan dampak yang besar, termasuk meningkatkan kepercayaan calon customer serta meningkatkan penjualan. Kami melakukan pengambilan foto (jenis fotografi komersial) secara profesional dengan
              tujuan membuat sebuah produk menjadi lebi bernilai sehingga berimbas pada kenaikan penjualan kalian.
            </p>
            <div id="web"></div>
          </div>
        </div>
        <div style="padding-top: 40px"></div>
        <div class="row service-item rounded" style="padding-top: 20px; padding-bottom: 20px; padding-left: 20px">
          <div class="col-12 col-md-8" style="padding-right: 30px">
            <h3 class="mb-4">Web Development</h3>
            <p>
              Pembuatan dan pemeliharaan situs web bertujuan agar visualisasinya semakin terlihat bagus, elegan, bekerja dengan cepat, serta memberikan pengalaman yang mengesankan bagi pengguna. Dalam hal ini, kami berusaha berkreasi dan
              mengembangkan tampilan website dan UI/UX.
              <li>Desain visual</li>
              <li>Waktu pemuatan</li>
              <li>Interaktivitas</li>
              <li>Konten</li>
              <li>Aksesibilitas</li>
              <li>Fungsional</li>
              <li>Kegunaan</li>
            </p>
          </div>
          <div class="col-10 col-md-3">
            <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.1s" src="img/about-1.jpg" />
          </div>
          <div id="workflow"></div>
        </div>
      </div>
      <!-- Service End -->

      <!--Workflow strat-->
      <div class="container" style="padding-top: 3rem">
        <div class="text-center">
          <h5 class="section-title ff-secondary text-primary fw-normal">Our</h5>
          <h1 class="mb-5">Legitima Cooperation Procedure</h1>
          <div class="row service-item-wf rounded" style="padding-top: 20px; padding-bottom: 20px; padding-left: 20px; padding-right: 20px">
            <table class="table rounded table-bordered">
              <tbody>
                <tr>
                  <th style="width: 200px;">STEP 1</th>
                  <td>Are you business owner and want to collaborate with Legitima Indonesia? the first stage, contact us +6288225427244
                  </td>
                </tr>
                <tr>
                  <th>STEP 2</th>
                  <td>We schedule a meeting so that we can explain Legitima Indonesia as a creative agency and its various scopes of work
                    At this stage, you can also describe your business and the various things you need.
                    Don’t worry, free consultation yay!
                  </td>
                </tr>
                <tr>
                  <th>STEP 3</th>
                  <td>Furthermore, we will provide a cooperation offer in the form of detailed services related to your needs. Here you can also provide input and various things you want.
                    We will also provide a price for each service, so thats clear, dear
                  </td>
                </tr>
                <tr>
                  <th>STEP 4</th>
                  <td>We will provide final service. If it fits, its time for a cooperation contract
                  </td>
                </tr>
                <tr>
                  <th>STEP 5</th>
                  <td>Your wish, let us carry it out.</td>
                </tr>
              </tbody>
            </table>
          </div>
          </div>
        </div>
      </div>
      <!--Workflow end-->

      <!-- Footer Start -->
      <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
          <div class="row g-5">
            <div class="col-lg-2 col-md-5">
              <h4 class="section-title ff-secondary text-footer fw-normal mb-4">Menu</h4>
              <a class="btn btn-link" href="index.php">Home</a>
              <a class="btn btn-link" href="about.php">About Us</a>
              <a class="btn btn-link" href="contact.php">Contact Us</a>
              <a class="btn btn-link" href="service.php">Services</a>
            </div>
            <div class="col-lg-4 col-md-">
              <h4 class="section-title ff-secondary text-start text-footer fw-normal mb-4">Contact</h4>
              <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Jl. Raya PR Sukun No.1 RT 04/RW 05, Gondosari, Gebog, Kudus, Jawa Tengah 59354, ID</p>
              <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+62 81287158040</p>
              <p class="mb-2"><i class="fa fa-envelope me-3"></i>legitima.project@gmail.com</p>
              <div class="d-flex pt-2">
                <a class="btn btn-outline-light btn-social" href="https://www.instagram.com/legitima.indonesia/"><i class="fab fa-instagram"></i></a>
                <a class="btn btn-outline-light btn-social" href="https://twitter.com/legitima_id"><i class="fab fa-twitter"></i></a>
                <a class="btn btn-outline-light btn-social" href="https://www.linkedin.com/company/legitima-id/"><i class="fab fa-linkedin-in"></i></a>
              </div>
            </div>
            <div class="col-lg-3 col-sm-4">
              <h4 class="section-title ff-secondary text-start text-footer fw-normal mb-4">Opening</h4>
              <h5 class="text-light fw-normal">Monday - Friday</h5>
              <p>08AM - 04PM</p>
              <h5 class="text-light fw-normal">Saturday</h5>
              <p>08AM - 12PM</p>
            </div>
            <div class="col-lg-3 col-md-6">
              <h4 class="section-title ff-secondary text-footer fw-normal mb-4">Email</h4>
              <div>
                <form action="" method="post">
                  <div class="row g-3">
                  <div class="col-auto">
                      <div class="form-floating">
                        <input type="text" class="form-control-sm" name="name" placeholder="Your Name" required="" style="width: 250px; height:30px" />
                      </div>
                    </div>
                    <div class="col-auto">
                      <div class="form-floating">
                        <input type="email" class="form-control-sm" name="email" placeholder="Your Email" required="" style="width: 250px; height:30px" />
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="form-floating">
                        <input type="text" class="form-control-sm" name="subject" placeholder="Subject" required="" style="width: 250px; height:30px" />
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="form-floating">
                        <textarea class="form-control-sm" placeholder="Leave a message here" name="message" required="" style="height: 60px; width: 250px"></textarea>
                      </div>
                    </div>
                    <div class="col-12">
                      <button class="btn btn-primary" type="submit" name="submit" style="width: 250px; height: 45px">Send Message</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="copyright">
            <div class="row">
              <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">&copy; <a class="border-bottom" href="#">Legitima Indonesia</a>, All Right Reserved.</div>
              <div class="col-md-6 text-center text-md-end">
                <div class="footer-menu">
                  <a href="">Home</a>
                  <a href="">Cookies</a>
                  <a href="">Help</a>
                  <a href="">FQAs</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Footer End -->

      <!-- Back to Top -->
      <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
  </body>
</html>
