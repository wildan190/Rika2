<?php
	//Koneksi Database
	$server = "localhost";
	$user = "root";
	$pass = "";
	$database = "hogwarts";

	$koneksi = mysqli_connect($server, $user, $pass, $database)or die(mysqli_error($koneksi));

	session_start();
	include("connection.php");
	include("functions.php");

	


	//jika tombol simpan diklik
	if(isset($_POST['bsimpan']))
	{
		//Pengujian Apakah data akan diedit atau disimpan baru
		if($_GET['hal'] == "edit")
		{
			//Data akan di edit
			$edit = mysqli_query($koneksi, "UPDATE grade1 set
											 	NoKK = '$_POST[tNoKK]',
											 	namasis = '$_POST[tnamasis]',
												alamat = '$_POST[talamat]',
											 	gender = '$_POST[tgender]',
												agama = '$_POST[tagama]',
												walsis = '$_POST[twalsis]',
												tgllhr = '$_POST[ttgllhr]'
											 WHERE id_tmhs = '$_GET[id]'
										   ");
			if($edit) //jika edit sukses
			{
				echo "<script>
						alert('Edit data suksess!');
						document.location='index.php';
				     </script>";
			}
			else
			{
				echo "<script>
						alert('Edit data GAGAL!!');
						document.location='index.php';
				     </script>";
			}
		}
		else
		{
			//Data akan disimpan Baru
			$simpan = mysqli_query($koneksi, "INSERT INTO grade1 (NoKK, namasis, alamat, gender, agama,walsis,tgllhr)
										  VALUES ('$_POST[tNoKK]', 
										  		 '$_POST[tnamasis]', 
										  		 '$_POST[talamat]', 
										  		 '$_POST[tgender]',
												 '$_POST[tagama]',
												 '$_POST[twalsis]',
												 '$_POST[ttgllhr]'
												  )
										 ");
			if($simpan) //jika simpan sukses
			{
				echo "<script>
						alert('Simpan data suksess!');
						document.location='tambah_siswa.php';
				     </script>";
			}
			else
			{
				echo "<script>
						alert('Simpan data GAGAL!!');
						document.location='tambah_siswa.php';
				     </script>";
			}
		}


		
	}


	//Pengujian jika tombol Edit / Hapus di klik
	if(isset($_GET['hal']))
	{
		//Pengujian jika edit Data
		if($_GET['hal'] == "edit")
		{
			//Tampilkan Data yang akan diedit
			$tampil = mysqli_query($koneksi, "SELECT * FROM grade1 WHERE id_tmhs = '$_GET[id]' ");
			$data = mysqli_fetch_array($tampil);
			if($data)
			{
				//Jika data ditemukan, maka data ditampung ke dalam variabel
				$vNoKK = $data['NoKK'];
				$vnamasis = $data['namasis'];
				$valamat = $data['alamat'];
				$vgender = $data['gender'];
				$vagama = $data['agama'];
				$vwalsis = $data['walsis'];
				$vtgllhr = $data['tgllhr'];
			}
		}
		else if ($_GET['hal'] == "hapus")
		{
			//Persiapan hapus data
			$hapus = mysqli_query($koneksi, "DELETE FROM grade1 WHERE id_tmhs = '$_GET[id]' ");
			if($hapus){
				echo "<script>
						alert('Hapus Data Suksess!!');
						document.location='tambah_siswa.php';
				     </script>";
			}
		}
	}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Hogwarts Cambdridge</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
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

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.php">Hogwarts</a></h1>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="active" href="index.php">Beranda</a></li>
          <li><a href="about.php">Tentang</a></li>
          <li><a href="trainers.php">Pendidik</a></li>
          <li><a href="facilities/fasilitas.php">fasilitas</a></li>
          <li><a href="pricing.php">Pricing</a></li>

          <li class="dropdown"><a href="#"><span>lainnya</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="history.php">History</a></li>
              </li>
              <li><a href="vnm.php">Visi & Misi</a></li>
              <li><a href="studentView.php">Siswa</a></li>
              
            </ul>
          </li>
          <li><a href="contact.php">Kontak</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="regist.php" class="get-started-btn">Daftar Sekarang</a>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-content-center align-items-center">
    <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
      <h1>Learning Today,<br>Leading Tomorrow</h1>
      <h2>Learn, Discover, Achieve</h2>
      <a href="about.php" class="btn-get-started">Lebih Lanjut</a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="assets/img/about.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>Keterangan mengenai sekolah modern Hogwarts Elementary.</h3>
            <p align="justify">Hogwarts Cambridge Academy School adalah sekolah swasta untuk anak laki-laki dan perempuan dari Prasekolah hingga Kelas 6. Dikelola oleh Warner Bros.

              Kurikulum Cambridge terutama merupakan dasar dari pengalaman belajar mengajar para siswa. Program ini memungkinkan siswa untuk menghadapi tantangan yang akan mereka temui di sini dan di luar negeri. SCS bertujuan untuk mengembangkan siswa menjadi warga dunia yang dapat mengekspresikan diri dalam lingkungan multibahasa dan multikultural. Tujuan dan persiapan Cambridge paling baik dijelaskan di bawah ini:
              
              "Program Cambridge mempersiapkan siswa untuk kehidupan - membantu mereka mengembangkan rasa ingin tahu yang terinformasi dan hasrat yang tak ada lama untuk belajar. Cambridge membantu siswa menjadi percaya diri, bertanggung jawab, reflektif, inovatif dan terlibat. Siap untuk mengatasi tuntutan dunia masa depan, mampu membentuk dunia yang lebih baik untuk masa depan. Itulah sebabnya kesuksesan dengan Cambridge membuka pintu bagi universitas-universitas terbaik di dunia - di AS, Inggris, Australia, Kanada, dan sekitarnya."
            </p>

          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts section-bg">
      <div class="container">

        <div class="row counters">

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="1232" data-purecounter-duration="1" class="purecounter"></span>
            <p>Murid</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="64" data-purecounter-duration="1" class="purecounter"></span>
            <p>Courses</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="42" data-purecounter-duration="1" class="purecounter"></span>
            <p>Acara</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
            <p>Pendidik</p>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="content">
              <h3>Why Choose Hogwarts?</h3>
              <p>
                Kurikulum Cambridge memiliki tujuan yang sangat luas. Dari sistem kurikulum ini ada hal-hal yang menjadi prioritas seperti pentingnya proses daripada hasil dan pengembangan minat. Di sistem kurikulum ini tiap perangkat pendidikan lebih ditekankan pada pengembangan minat dan bakat siswa sehingga ada penguasaan bidang secara mendalam.
              </p>
              <div class="text-center">
                <a href="about.php" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-8 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-receipt"></i>
                    <h4>Sistem Kurikulum dan Pendidikan</h4>
                    <p>Memiliki sistem pendidikan sekolah dasar terbaik didunia, dan melaksanakan beberapa program yang tidak ada di sekolah lain</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-cube-alt"></i>
                    <h4>Program</h4>
                    <p>Memiliki program yang dapat meningkatkan kreatifitas, semanat dan Minat Siswa.</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-images"></i>
                    <h4>Fasilitas</h4>
                    <p>Berbagai fasilitas lengkap yang tidak dimiliki sekolah lain seperti Laboratorium, Kolam Renang, Ruang Teater dan Sebagainya.</p>
                  </div>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
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
      </div>
    </div>

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
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>