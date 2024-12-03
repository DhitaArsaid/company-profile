<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: http://localhost/legitima/login/index.html');
	exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Upload File Gambar Legitima</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/jquery-3.4.1.js"></script>

    <!-- Favicon -->
    <link href="hero.png" rel="icon" />
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
    <link href="http://localhost/legitima/lib/animate/animate.min.css" rel="stylesheet" />
    <link href="http://localhost/legitima/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
    <link href="http://localhost/legitima/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="http://localhost/legitima/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="http://localhost/legitima/css/style.css" rel="stylesheet" />
</head>

<body>
    <div class="container-xxl py-5 bg-dark hero-header mb-5" style="padding-bottom: 0.5rem;">
        <div class="container text-center my-5 pt-5 pb-4">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Upload Portofolio</h1>
            <nav aria-label="breadcrumb">
                <a class="btn btn-outline-light btn-social" href="https://www.instagram.com/legitima.indonesia/"><i
                        class="fab fa-instagram"></i></a>
                <a class="btn btn-outline-light btn-social" href="https://twitter.com/legitima_id"><i
                        class="fab fa-twitter"></i></a>
                <a class="btn btn-outline-light btn-social" href="https://www.linkedin.com/company/legitima-id/"><i
                        class="fab fa-linkedin-in"></i></a>
            </nav>
        </div>
    </div>
    <br>
    <div class="container">
        <?php
        //Validasi untuk menampilkan pesan pemberitahuan
        if (isset($_GET['add'])) {
      
            if ($_GET['add']=='berhasil'){
                echo"<div class='alert alert-success'><strong>Berhasil!</strong> File gambar telah diupload!</div>";
            }else if ($_GET['add']=='gagal'){
                echo"<div class='alert alert-danger'><strong>Gagal!</strong> File gambar gagal diupload!</div>";
            }    
        }

        if (isset($_GET['hapus'])) {
    
            if ($_GET['hapus']=='berhasil'){
                echo"<div class='alert alert-success'><strong>Berhasil!</strong> File gambar telah dihapus!</div>";
            }else if ($_GET['hapus']=='gagal'){
                echo"<div class='alert alert-danger'><strong>Gagal!</strong> File gambar gagal dihapus!</div>";
            }    
        }
        ?>
        <form action="simpan.php" method="post" enctype="multipart/form-data">
            <!-- rows -->
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <div id="msg"></div>
                        <input type="file" name="gambar" class="file">
                        <div class="input-group my-3">
                            <input type="text" class="form-control" disabled placeholder="Upload Gambar" id="file">
                            <div class="input-group-append">
                                <button type="button" id="pilih_gambar" class="browse btn btn-dark">Pilih
                                    Gambar</button>
                            </div>
                        </div>
                        <img src="gambar/contoh.jpg" id="preview" class="img-thumbnail"
                            style="width: 30%; height: 30%;">
                    </div>
                </div>
            </div>
            <div style="padding-bottom: 2rem;">
                <button type="submit" name="btn_simpan" class="btn btn-success" style="width: 15%;">Simpan</button>
            </div>
        </form>
        <div class="row">
            <div class="col-lg-10 col-sm-6">
                <div class="table-responsive">
                    <table class="table table-bordered" width='20%' cellspacing="0">
                        <thead>
                            <tr class="text-center">
                                <th width='5%'>No</th>
                                <th width='40%'>Gambar</th>
                                <th width='20%'>Aksi</th>
                            </tr>
                        </thead>

                        <tbody class="text-center">
                            <?php
                            // include database
                            include 'database.php';
                            // perintah sql untuk menampilkan daftar bank yang berelasi dengan tabel kategori bank
                            $sql="select * from gambar order by id_gambar desc";
                            $hasil=mysqli_query($kon,$sql);
                            $no=0;
                            //Menampilkan data dengan perulangan while
                            while ($data = mysqli_fetch_array($hasil)):
                            $no++;
                        ?>
                            <tr>
                                <td><?php echo $no; ?></td>
                                <td><img src="gambar/<?php echo $data['gambar'];?>" class="rounded"
                                        style="width: 40%; height: 40%;" alt="Cinque Terre"></td>
                                <td><a href="hapus.php?id_gambar=<?php echo $data['id_gambar'];?>&gambar=<?php echo $data['gambar'];?>"
                                        onclick="konfirmasi()" class="btn btn-danger" role="button">Hapus</a></td>
                            </tr>
                            <!-- bagian akhir (penutup) while -->
                            <?php endwhile; ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="http://localhost/legitima/lib/wow/wow.min.js"></script>
<script src="http://localhost/legitima/lib/easing/easing.min.js"></script>
<script src="http://localhost/legitima/lib/waypoints/waypoints.min.js"></script>
<script src="http://localhost/legitima/lib/counterup/counterup.min.js"></script>
<script src="http://localhost/legitima/lib/owlcarousel/owl.carousel.min.js"></script>
<script src="http://localhost/legitima/lib/tempusdominus/js/moment.min.js"></script>
<script src="http://localhost/legitima/lib/tempusdominus/js/moment-timezone.min.js"></script>
<script src="http://localhost/legitima/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

<!-- Template Javascript -->
<script src="http://localhost/legitima/js/main.js"></script>

</html>

<style>
.file {
    visibility: hidden;
    position: absolute;
}
</style>

<script>
function konfirmasi() {
    konfirmasi = confirm("Apakah anda yakin ingin menghapus gambar ini?")
    document.writeln(konfirmasi)
}

$(document).on("click", "#pilih_gambar", function() {
    var file = $(this).parents().find(".file");
    file.trigger("click");
});

$('input[type="file"]').change(function(e) {
    var fileName = e.target.files[0].name;
    $("#file").val(fileName);

    var reader = new FileReader();
    reader.onload = function(e) {
        // get loaded data and render thumbnail.
        document.getElementById("preview").src = e.target.result;
    };
    // read the image file as a data URL.
    reader.readAsDataURL(this.files[0]);
});
</script>