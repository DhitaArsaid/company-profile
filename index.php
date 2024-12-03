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
    <link
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap"
        rel="stylesheet" />

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
        <div id="spinner"
            class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
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
                        <a href="index.php" class="nav-item nav-link active">Home</a>
                        <a href="about.php" class="nav-item nav-link">About</a>
                        <a href="service.php" class="nav-item nav-link">Service</a>
                        <a href="menu.php" class="nav-item nav-link">Projects</a>
                        <a href="team.php" class="nav-item nav-link">Our Team</a>
                        <a href="contact.php" class="nav-item nav-link">Contact</a>
                        <a href="masuk.php" class="nav-item nav-link">Login</a>
                    </div>
                </div>
            </nav>

            <div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container my-5 py-5">
                    <div class="row align-items-center g-5">
                        <div class="col-lg-6 text-center text-lg-start">
                            <h1 class="display-3 text-white animated slideInLeft">Legitima<br />Indonesia</h1>
                            <p class="text-white animated slideInLeft mb-4 pb-2">
                                We are a digital agency that can help promoting your business more creative cause the
                                business assisted with group of young people and having credibility to increase and
                                leverage to beyond level.
                            </p>
                            <p class="animated slideInLeft">
                                <a class="btn btn-outline-light btn-social"
                                    href="https://www.instagram.com/legitima.indonesia/"><i
                                        class="fab fa-instagram"></i></a>
                                <a class="btn btn-outline-light btn-social" href="https://twitter.com/legitima_id"><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-light btn-social"
                                    href="https://www.linkedin.com/company/legitima-id/"><i
                                        class="fab fa-linkedin-in"></i></a>
                            </p>
                        </div>
                        <div class="col-lg-6 text-center text-lg-end overflow-hidden">
                            <img class="img-fluid" src="img/hero.png" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->

        <!-- Service Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center">
                    <h5 class="section-title ff-secondary text-primary fw-normal">Our</h5>
                    <h1 class="mb-5">Services</h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <a href="service.php#advertising">
                                    <i class="fa fa-3x fa-digital-tachograph text-primary mb-4"></i>
                                    <h5>Digital</h5>
                                    <h5>Advertising</h5>
                                </a>
                                <p>Perencanaan dan pengelolaan kampanye digital dapat kami jalankan untuk hasil
                                    memuaskan dari bisnis kalian.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <a href="service.php#sosmed">
                                    <i class="fa fa-3x fa-laptop text-primary mb-4"></i>
                                    <h5>Social Media</h5>
                                    <h5>Maintenance</h5>
                                </a>
                                <p>Kami membangun dan mengoptimalkan brand awareness dengan pendekatatan full-service
                                    social media management.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <a href="service.php#web">
                                    <i class="fa fa-3x fa-code text-primary mb-4"></i>
                                    <h5>Website</h5>
                                    <h5>Development</h5>
                                </a>
                                <p>Mengembangkan tampilan website dan UI/UX sehingga mampu memberikan kesan memukau bagi
                                    pengunjung website.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <a href="service.php#strategy">
                                    <i class="fa fa-3x fa-user-tie text-primary mb-4"></i>
                                    <h5>Digital Strategy</h5>
                                    <h5>Consultancy</h5>
                                </a>
                                <p>Untuk memenangkan pasar serta menentukan digital positioning, Digital Strategy
                                    Consultancy adalah hal yang kalian butuhkan.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <a href="service.php#brand">
                                    <i class="fa fa-3x fa-indent text-primary mb-4"></i>
                                    <h5>Brand</h5>
                                    <h5>Identity</h5>
                                </a>
                                <p>Dalam pendekatan konsumen dengan brand, kami dapat melakukan strategi branding yang
                                    tepat dan unik untuk kalian.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <a href="service.php#video">
                                    <i class="fa fa-3x fa-video text-primary mb-4"></i>
                                    <h5>Video</h5>
                                    <h5>Production</h5>
                                </a>
                                <p>Untuk mengoptimalkan strategi marketing, produksi video yang berkualitas adalah salah
                                    satu hal yang kami lakukan.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <a href="service.php#photo">
                                    <i class="fa fa-3x fa-camera-retro text-primary mb-4"></i>
                                    <h5>Product</h5>
                                    <h5>Photography</h5>
                                </a>
                                <p>Pengambilan gambar (jenis fotografi komersial) produk untuk kebutuhan komersial brand
                                    kalian secara profesional.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->

        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="row g-3">
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.1s"
                                    src="img/home (1).jpg" />
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.3s"
                                    src="img/home (2).jpg" style="margin-top: 25%" />
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.5s"
                                    src="img/home (3).jpg" />
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.7s"
                                    src="img/home (4).jpg" />
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h5 class="section-title ff-secondary text-start text-primary fw-normal">About Us</h5>
                        <h1 class="mb-4">Welcome to Legitima Indonesia</h1>
                        <p class="mb-4">
                            We are a young, innovative, energetic organisation that driven to bring the much-needed
                            expertise on generating exposure, driving revenue, and establishing brands reputation. Our
                            core services are digital marketing strategy,
                            branding, social media management, content marketing, video production, creative
                            photography, and website development. We are helping brands and business to succeed with
                            tailoring our services to their needs to succeed in
                            the global market
                        </p>
                        <div class="row g-4 mb-4">
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                                    <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">3
                                    </h1>
                                    <div class="ps-4">
                                        <p class="mb-0">Years of</p>
                                        <h6 class="text-uppercase mb-0">Experience</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="btn btn-primary py-3 px-5 mt-2" href="about.php">Read More</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

        <!--Workflow start-->
        <div class="container-xxl py-5 bg-dark hero-header-wf mb-5">
            <div class="container text-center">
                <h5 class="section-title-wf ff-secondary text-center text-white fw-normal">Our</h5>
                <h1 class="mb-5 text-white">Legitima Cooperation Procedure</h1>
                <div class="owl-carousel testimonial-carousel align-items-center">
                    <div class="service-item rounded text-white">
                        <h3 class="text-white">STEP 2</h3>
                        <p>Introduction of Legitima Indonesia as a creative agency An explanation of the client’s
                            business form as well as an in-depth discussion of the client’s needs in the digital field
                            (Free Consultation)</p>
                    </div>
                    <div class="service-item rounded text-white">
                        <h3 class="text-white">STEP 3</h3>
                        <p>Cooperation offers in the form of service details Legitima Indonesia and price service</p>
                    </div>
                    <div class="service-item rounded text-white">
                        <h3 class="text-white">STEP 4</h3>
                        <p>Service offer agreement and cooperation contract</p>
                    </div>
                    <div class="service-item rounded text-white">
                        <h3 class="text-white">STEP 5</h3>
                        <p>Service implementation</p>
                    </div>
                    <div class="service-item rounded text-white">
                        <h3 class="text-white">STEP 1</h3>
                        <p>Contact us +6288225427244</p>
                    </div>
                </div>
                <a class="btn btn-primary py-3 px-5 mt-2" href="service.php#workflow">Read More</a>
            </div>
        </div>
    </div>
    <!--Worjflow end-->

    <!-- Portofolio Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h5 class="section-title ff-secondary text-center text-primary fw-normal">Gallery</h5>
                <h1 class="mb-5">Portofolio Clients</h1>
                <div class="owl-carousel testimonial-carousel align-items-center">
                    <?php
                // include database
                include 'upload_file/database.php';
                // perintah sql untuk menampilkan daftar bank yang berelasi dengan tabel kategori bank
                $sql="select * from gambar order by id_gambar desc";
                $hasil=mysqli_query($kon,$sql);
                $no=0;
                //Menampilkan data dengan perulangan while
                while ($data = mysqli_fetch_array($hasil)):
                $no++;
              ?>
                    <div>
                        <img class="rounded mx-auto" src="upload_file/gambar/<?php echo $data['gambar'];?>"
                            style="width: 250px; height: 450px" />
                    </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    </div>
    <!-- Portofolio end-->

    <!-- Client start-->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h1 class="mb-5">Our Clients</h1>
                <div class="row">
                    <div class="col" style="padding-top: 30px"><img class="mx-auto" src="img/sukun-picsay (1).png"
                            style="height: 75px; width: auto" /></div>
                    <div class="col" style="padding-top: 30px"><img class="mx-auto"
                            src="img/sukunonlinestore-picsay.png" style="height: 75px; width: auto" /></div>
                    <div class="col" style="padding-top: 30px"><img class="mx-auto" src="img/tk sukun-picsay.png"
                            style="height: 75px; width: auto" /></div>
                    <div class="col" style="padding-top: 30px"><img class="mx-auto" src="img/bsi-picsay.png"
                            style="height: 75px; width: auto" /></div>
                    <div class="col" style="padding-top: 30px"><img class="mx-auto" src="img/poccjc-picsay.png"
                            style="height: 75px; width: auto" /></div>
                    <div class="col" style="padding-top: 30px"><img class="mx-auto" src="img/smp1kudus-picsay.png"
                            style="height: 75px; width: auto" /></div>
                    <div class="col" style="padding-top: 30px"><img class="mx-auto" src="img/hbs-picsay.png"
                            style="height: 75px; width: auto" /></div>
                    <div class="col" style="padding-top: 30px"><img class="mx-auto" src="img/mbi-picsay.png"
                            style="height: 75px; width: auto" /></div>
                </div>
                <div class="row">
                    <div class="col" style="padding-top: 30px"><img class="mx-auto" src="img/kyna-picsay.png"
                            style="height: 75px; width: auto" /></div>
                    <div class="col" style="padding-top: 30px"><img class="mx-auto" src="img/glamkit-picsay.png"
                            style="height: 75px; width: auto" /></div>
                    <div class="col" style="padding-top: 30px"><img class="mx-auto" src="img/msglow-picsay.png"
                            style="height: 75px; width: auto" /></div>
                    <div class="col" style="padding-top: 30px"><img class="mx-auto" src="img/arashi-picsay.png"
                            style="height: 75px; width: auto" /></div>
                    <div class="col" style="padding-top: 30px"><img class="mx-auto" src="img/deas-picsay.png"
                            style="height: 75px; width: auto" /></div>
                    <div class="col" style="padding-top: 30px"><img class="mx-auto" src="img/alina-picsay.png"
                            style="height: 75px; width: auto" /></div>
                    <div class="col" style="padding-top: 30px"><img class="mx-auto" src="img/nadheera-picsay.png"
                            style="height: 75px; width: auto" /></div>
                    <div class="col" style="padding-top: 30px"><img class="mx-auto" src="img/mecca-picsay.png"
                            style="height: 75px; width: auto" /></div>
                </div>
                <div class="row">
                    <div class="col" style="padding-top: 30px"><img class="mx-auto" src="img/zovala-picsay.png"
                            style="height: 75px; width: auto" /></div>
                    <div class="col" style="padding-top: 30px"><img class="mx-auto" src="img/kretekkopi-picsay (1).png"
                            style="height: 75px; width: auto" /></div>
                    <div class="col" style="padding-top: 30px"><img class="mx-auto" src="img/pas-picsay.png"
                            style="height: 75px; width: auto" /></div>
                    <div class="col" style="padding-top: 30px"><img class="mx-auto"
                            src="img/traffalogoletter-11-picsay.png" style="height: 75px; width: auto" /></div>
                    <div class="col" style="padding-top: 30px"><img class="mx-auto" src="img/lohjinawi-picsay.png"
                            style="height: 75px; width: auto" /></div>
                </div>
                <div class="row">
                    <div class="col" style="padding-top: 30px"><img class="mx-auto" src="img/nusatabac-picsay.png"
                            style="height: 75px; width: auto" /></div>
                    <div class="col" style="padding-top: 30px"><img class="mx-auto" src="img/sumur-picsay (1).png"
                            style="height: 75px; width: auto" /></div>
                    <div class="col" style="padding-top: 30px"><img class="mx-auto" src="img/mutira-picsay.png"
                            style="height: 75px; width: auto" /></div>
                    <div class="col" style="padding-top: 30px"><img class="mx-auto" src="img/rainafa-picsay.png"
                            style="height: 75px; width: auto" /></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Client end-->

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
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Jl. Raya PR Sukun No.1 RT 04/RW 05,
                        Gondosari, Gebog, Kudus, Jawa Tengah 59354, ID</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+62 81287158040</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>legitima.project@gmail.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social"
                            href="https://www.instagram.com/legitima.indonesia/"><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-outline-light btn-social" href="https://twitter.com/legitima_id"><i
                                class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social"
                            href="https://www.linkedin.com/company/legitima-id/"><i class="fab fa-linkedin-in"></i></a>
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
                                        <input type="text" class="form-control-sm" name="name" placeholder="Your Name"
                                            required="" style="width: 250px; height:30px" />
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="form-floating">
                                        <input type="email" class="form-control-sm" name="email"
                                            placeholder="Your Email" required="" style="width: 250px; height:30px" />
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control-sm" name="subject" placeholder="Subject"
                                            required="" style="width: 250px; height:30px" />
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control-sm" placeholder="Leave a message here"
                                            name="message" required="" style="height: 60px; width: 250px"></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary" type="submit" name="submit"
                                        style="width: 250px; height: 45px">Send Message</button>
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
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">&copy; <a class="border-bottom"
                            href="#">Legitima Indonesia</a>, All Right Reserved.</div>
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