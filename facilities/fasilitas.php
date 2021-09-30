<?php

include 'includes/data.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Events - Hogwarts Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  
  <!-- Favicons -->
  <link href="../assets/img/favicon.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Hogwarts - v4.1.0
  * Template URL: https://bootstrapmade.com/Hogwarts-free-education-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.php">Hogwarts</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.php" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a href="../index.php">Beranda</a></li>
          <li><a href="../about.php">Tentang</a></li>
          <li><a href="../trainers.php">Pendidik</a></li>
          <li><a class="active" href="fasilitas.php">fasilitas</a></li>

          <li class="dropdown"><a href="#"><span>lainnya</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="../history.php">History</a></li>
              </li>
              <li><a href="../vnm.php">Visi & Misi</a></li>
              <li><a href="../login.php">Siswa</a></li>
            </ul>
          </li>
          </li>
          <li><a href="../contact.php">Kontak</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="../regist.php" class="get-started-btn">Daftar Sekarang</a>
      <a href="../login.php" class="get-started-btn">Login</a>
    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>Fasilitas</h2>
        <p>"Fasilitas di sekolah ini cukup memadai untuk membantu kegiatan belajar seluruh siswa."</p>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- Main of Content -->
    
    <br>
    <br>
    <table class="table table-hover table-striped">
        <tr>
            <th>ID</th>
            <th>Image</th>
            <th>Fasilitas</th>
            <th>Keterangan</th>
            
            <th>Action</th>
        </tr>
<?php  		            
		
$query = "SELECT * FROM facilities ORDER BY id DESC ";

$result = mysqli_query($conn,$query);

if(mysqli_num_rows($result) > 0){
    
    while($row = mysqli_fetch_array($result)){
        
        $id    = $row['id'];
        $fasilitas  = $row['fasilitas'];
        $keterangan = $row['keterangan'];
        $image = $row['image'];

?>
        
        <tr>
            <td><?=$id; ?></td>
            <td>
               <img src= "<?= "images/".$image?>" alt="<?= $name ?>" class="thumbnail" width="500px" height="300px">
            </td>
            <td><?=$fasilitas; ?></td>
            <td><?=$keterangan; ?></td>
            
            <td><a href="update.php?update=<?php echo $id ?>" class="btn btn-success btn-sm" role="button">Update</a>
            <!--<a href="fasilitas.php?delete=<?php echo $id ?>" class="btn btn-danger btn-sm" id="delete" role="button">Delete</a></td>-->
        </tr>
<?php
    }
}  
        
    if(isset($_GET['delete'])){
        
        $id = $_GET['delete'];

        $image = "SELECT * FROM facilities WHERE id = $id";
        
        $query1 = mysqli_query($conn,$image);

        while($row = mysqli_fetch_array($query1))
        {
             $image= $row['image'];
        }

            unlink('images/'.$image);

        $query = "DELETE FROM facilities WHERE id = $id";
        
        $result = mysqli_query($conn,$query);
        
        if($result){

            header('location:fasilitas.php');
            
        }
    }    
         
?>

    </table>
</div>
<br />

<script>
    $(document).ready(function(){

        $('#delete').click(function(){
            if(!confirm("do you want to delete?"))
            {
                return false;
            }
            else
            {
                return true;
            }
        });


    });
</script>



    <!-- ======= Events Section ======= -->
    <!-- <section id="events" class="events">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-md-6 d-flex align-items-stretch">
            <div class="card">
              <div class="card-img">
                <img src="assets/img/acara1.png" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="">Peresmian Lapangan Quidditch Baru</a></h5>
                <p class="fst-italic text-center">Sunday, September 26th at 7:00 pm</p>
                <p class="card-text">Sekolah Hogwarts adalah sekolah pertama yang memiliki program cabang olah raga Quidditch di Indonesia, yang akan membuka atau meresmikan lapangan quidditch baru dan pertama di Indonesia</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch">
            <div class="card">
              <div class="card-img">
                <img src="assets/img/acara0.jpg" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="">Perlombaan Quidditch</a></h5>
                <p class="fst-italic text-center">Sunday, November 15th at 7:00 pm</p>
                <p class="card-text">Hogwarts telah memenangkan kejuaraan perlombaan quidditch internasional tingkat sekolah dasar di Britania Raya.</p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section> End Events Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>Hogwarts</span></strong>. All Rights Reserved
        </div>
        
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/aos/aos.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>
  <script src="../assets/vendor/purecounter/purecounter.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>

</html>