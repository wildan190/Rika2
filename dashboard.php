<!DOCTYPE html>
<html lang="en">
<head>
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    
    <title>Dashboard</title>

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
      <style>
          body{
              padding: 5;
              margin: 10px;
              margin-bottom: 10px;
          }
      </style>
    
</head>
<body>

    <header>
        <!--Navbar-->
        <nav class="navbar navbar-expand-lg navbar-light bg-white">
            <div class="container-fluid">
                <button
                class="navbar-toggler"
                type="button"
                data-mdb-toggle="collapse"
                data-mdb-target="#navbarExample01"
                aria-controls="navbarExample01"
                aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarExample01">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" aria-current="page" href="dashboard.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                        <!--<li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>-->
                    </ul>
                </div>
            </div>

        </nav>
        <!--End Navbar-->

        
        <div class="p-5 text-center bg-light">
            <h1 class="mb-3">Dashboard</h1>
            <h4 class="mb-3">Selamat Datang di Dashboar Admin</h4>
        </div>
        
    </header> <br />

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <p>
                    <a href="tambah_siswa.php" class="btn btn-sq-lg btn-primary">
                        <i class="fa fa-table fa-5x"></i><br />
                        Pengaturan Data <br>Siswa
                    </a>
                    <a href="facilities/insert.php" class="btn btn-sq-lg btn-success">
                        <i class="fa fa-home fa-5x"></i><br />
                        Data Fasilitas <br>Sekolah
                    </a>
                    <a href="teacher/teacher.php" class="btn btn-sq-lg btn-info">
                        <i class="fa fa-user fa-5x"></i><br />
                        Tambah Data <br>Guru
                    </a>
                    <a href="signup.php" class="btn btn-sq-lg btn-danger">
                        <i class="fa fa-user fa-5x"></i><br />
                        Tambah Admin <br>Baru
                    </a>
                </p>
            </div>
        </div>
    </div>
    
    <br />
    <center><button type = "logout" class="btn btn-danger"><a style = "text-decoration:none; color:white;" href="index.php"</a>Logout</button></center>
    <br />
    <!-- ======= Footer ======= -->
  <footer id="footer">

<div class="container d-md-flex py-4">

  <div class="me-md-auto text-center text-md-start">
    <div class="copyright">
      &copy; Copyright <strong><span>Hogwarts</span></strong>. All Rights Reserved
    </div> 
  </div>
  <div class="social-links text-center text-md-right pt-3 pt-md-0">
    <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
    <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
    <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
    <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
    <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
  </div>
</div>
<div class="container">
    <div class="row">
      <div class="col-lg-5 col-md-6 footer-contact">
        <h3>Hogwarts</h3>
        <p>
        Jl. Jend. Sudirman No.Kav 54-55, RT.5/RW.3, Senayan, Kec. Kby. Baru, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12190<br><br>
          <strong>Phone:</strong> +62 85895555<br>
          <strong>Email:</strong> hogwardsacademy@hogwarts.edu.ac.id<br>
        </p>
      </div>
    </div>
</footer><!-- End Footer -->
    
</body>
</html>