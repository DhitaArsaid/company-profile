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
              <a href="service.php" class="nav-item nav-link">Service</a>
              <a href="menu.php" class="nav-item nav-link">Projects</a>
              <a href="team.php" class="nav-item nav-link active">Our Team</a>
              <a href="contact.php" class="nav-item nav-link">Contact</a>
            </div>
          </div>
        </nav>

        <div class="container-xxl py-5 bg-dark hero-header mb-5">
          <div class="container text-center my-5 pt-5 pb-4">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Our Team</h1>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb justify-content-center text-uppercase">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">Team</li>
              </ol>
              <a class="btn btn-outline-light btn-social" href="https://www.instagram.com/legitima.indonesia/"><i class="fab fa-instagram"></i></a>
              <a class="btn btn-outline-light btn-social" href="https://twitter.com/legitima_id"><i class="fab fa-twitter"></i></a>
              <a class="btn btn-outline-light btn-social" href="https://www.linkedin.com/company/legitima-id/"><i class="fab fa-linkedin-in"></i></a>
            </nav>
          </div>
        </div>
      </div>
      <!-- Navbar & Hero End -->

      <!-- Team Start -->
      <div class="container-xxl pt-5 pb-3">
        <div class="container">
          <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h5 class="section-title ff-secondary text-center text-primary fw-normal">Team Members</h5>
            <h1 class="mb-5">Our Team</h1>
          </div>
          <div class="row g-4 justify-content-center">
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
              <div class="team-item text-center rounded overflow-hidden">
                <div class="rounded-circle overflow-hidden m-4">
                  <img class="img-fluid" src="img/ardi.jpg" alt="" />
                </div>
                <h5 class="mb-0">Ardiansyah E.W., B.Sc(Hons)</h5>
                <small>Founder, Director Brand & Digital Strategist</small>
                <div class="d-flex justify-content-center mt-3">.</div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
              <div class="team-item text-center rounded overflow-hidden">
                <div class="rounded-circle overflow-hidden m-4">
                  <img class="img-fluid" src="img/reinaldo.jpg" alt="" />
                </div>
                <h5 class="mb-0">Reinaldo Muzahid</h5>
                <small>Managing Director Head of Finance</small>
                <div class="d-flex justify-content-center mt-3"></div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
              <div class="team-item text-center rounded overflow-hidden">
                <div class="rounded-circle overflow-hidden m-4">
                  <img class="img-fluid" src="img/fadhil.jpg" alt="" />
                </div>
                <h5 class="mb-0">Fadhil E.W</h5>
                <small>Program Manager Media Planner</small>
                <div class="d-flex justify-content-center mt-3"></div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
              <div class="team-item text-center rounded overflow-hidden">
                <div class="rounded-circle overflow-hidden m-4">
                  <img class="img-fluid" src="img/rizal.jpg" alt="" />
                </div>
                <h5 class="mb-0">Alhafidz Rizal Rahfi, S.I.Kom</h5>
                <small>Business Development Associate Account Executive</small>
                <div class="d-flex justify-content-center mt-3"></div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
              <div class="team-item text-center rounded overflow-hidden">
                <div class="rounded-circle overflow-hidden m-4">
                  <img class="img-fluid" src="img/riskha.jpg" alt="" />
                </div>
                <h5 class="mb-0">Riskha Kurnia</h5>
                <small>Accountant and HR</small>
                <div class="d-flex justify-content-center mt-3"></div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
              <div class="team-item text-center rounded overflow-hidden">
                <div class="rounded-circle overflow-hidden m-4">
                  <img class="img-fluid" src="img/nilta.jpg" alt="" />
                </div>
                <h5 class="mb-0">Nilta Farah Shabrina</h5>
                <small>Marketing Research Specialist Digital Marketing Analyst</small>
                <div class="d-flex justify-content-center mt-3">.</div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
              <div class="team-item text-center rounded overflow-hidden">
                <div class="rounded-circle overflow-hidden m-4">
                  <img class="img-fluid" src="img/hilal.jpg" alt="" />
                </div>
                <h5 class="mb-0">Hilal Farras</h5>
                <small>Creative Director Production Manager</small>
                <div class="d-flex justify-content-center mt-3"></div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
              <div class="team-item text-center rounded overflow-hidden">
                <div class="rounded-circle overflow-hidden m-4">
                  <img class="img-fluid" src="img/mario.jpg" alt="" />
                </div>
                <h5 class="mb-0">Mario Ervan</h5>
                <small>Graphic Designer</small>
                <div class="d-flex justify-content-center mt-3"></div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
              <div class="team-item text-center rounded overflow-hidden">
                <div class="rounded-circle overflow-hidden m-4">
                  <img class="img-fluid" src="img/riza.jpg" alt="" />
                </div>
                <h5 class="mb-0">Riza Afthoni, S.Sn</h5>
                <small>Graphic Designer</small>
                <div class="d-flex justify-content-center mt-3">.</div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
              <div class="team-item text-center rounded overflow-hidden">
                <div class="rounded-circle overflow-hidden m-4">
                  <img class="img-fluid" src="img/ikhsan.jpg" alt="" />
                </div>
                <h5 class="mb-0">Ikhsan Maulana</h5>
                <small>Content Specialist Writer</small>
                <div class="d-flex justify-content-center mt-3"></div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
              <div class="team-item text-center rounded overflow-hidden">
                <div class="rounded-circle overflow-hidden m-4">
                  <img class="img-fluid" src="img/ilham.jpg" alt="" />
                </div>
                <h5 class="mb-0">M. Ilham Setyo N</h5>
                <small>Videographer</small>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
              <div class="team-item text-center rounded overflow-hidden">
                <div class="rounded-circle overflow-hidden m-4">
                  <img class="img-fluid" src="img/Izzudin.jpg" alt="" />
                </div>
                <h5 class="mb-0">Izzudin</h5>
                <small>Photographer</small>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
              <div class="team-item text-center rounded overflow-hidden">
                <div class="rounded-circle overflow-hidden m-4">
                  <img class="img-fluid" src="img/bayu.jpg" alt="" />
                </div>
                <h5 class="mb-0">Muhammad Bayu, S.Kom</h5>
                <small>Video Editor</small>
                <div class="d-flex justify-content-center mt-3">.</div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Team End -->

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
