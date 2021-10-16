<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Bootstrap 5-->
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
    <title>Genta | Home</title>
    
    <!--CSS Aos.Init()-->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- JS Aos.Init() -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

</head>
<body>
  <!-- navbar -->
  <!-- logo-->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid" data-aos="fade-up">
        <a class="navbar-brand" href="#">
            <img src="assets/logo-genta.png" alt="logo-genta" width="auto" height="35">
        </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 ">
          <li class="nav-item">
            <a class="nav-link page-scroll" href="#home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link page-scroll" href="#visionMission">Visi Misi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link page-scroll" href="#aibers">Aibers</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link page-scroll" href="#pantun">Pantun</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  
    <div id="home">
      <div class="container" data-aos="fade-up">
        <h1 class="text-center">Genta Aibers</h1>
        <!-- Jangan lupa buat audionya autoplay!!! -->
        <audio controls loop controlsList="nodownload noplaybackrate" class="volume" id="audio text-center">
          <source src="assets/Lindsey Stirling  Carol of the Bells Official Video.mp3" type="audio/mpeg">
        </audio>
        <p>
         <?php
            date_default_timezone_set("Asia/Jakarta");
            function timeNow(){
            $hourNow = date("H");
            if($hourNow<"12"){
                return  "Good Morning! :D";
            }else if($hourNow<"16"){
                return  "Good afternoon! ;)";
            }else if($hourNow<"18"){
                return  "Good evening! :|";
            }else 
                return  "Good night! <3";
            };
            echo timeNow();
          ?></p> 
      </div>
    </div>

    <!-- <div id="visionMission visiMisi">
      <div class="d-flex">
        <div class="vision">
          <h1>Visi</h1>
          <ol>
            <li>Menjadi tempat perkumpulan aib no.1 di Divisi IT</li>
            <li>Menjadi salah satu produk bagi genta.petra.ac.id, yaitu album-aib.genta.petra.ac.id</li>
          </ol>
        </div>
        <div class="mission">
          <h1>Misi</h1>
          <ol>
            <li>Menyebarkan foto aib bagi yang membutuhkan</li>
            <li>Menjadi ajang pameran foto aib IT di seluruh dunia</li>
            <li>Menjadi ajang pencarian foto aib</li>
          </ol>
        </div>
      </div>
    </div> -->
    <div id="visionMission">
      <div class="container-fluid mt-1">
        <div class="row mb-6">
            <section class="col-lg-6">
                <div class="vision text-center" data-aos="fade-up">
                  <h1 id="visi-misi"><b>Visi</b></h1>
                    <h2 style="font-size: 18px;"><b>1. Menjadi tempat perkumpulan aib no.1 di Divisi IT</b><h2>
                    <h2 style="font-size: 18px;"><b>2. Menjadi salah satu produk bagi genta.petra.ac.id, yaitu album-aib.genta.petra.ac.id</b><h2>
                </div>
            </section>
            <section class="col-lg-6">
                <div class="mission text-center" data-aos="fade-up">
                  <h1><b>Misi</b></h1>
                    <h2 style="font-size: 18px;"><b>1. Menyebarkan foto aib bagi yang membutuhkan</b></h2>
                    <h2 style="font-size: 18px;"><b>2. Menjadi ajang pameran foto aib IT di seluruh dunia</b></h2>
                    <h2 style="font-size: 18px"><b>3. Menjadi ajang pencarian foto aib</b></h2>
                </div>
            </section>
          </div>
        </div>
    </div>

    <div id="aibers" class="aib-section">
      <div class="container">

        <div class="info" data-aos="fade-up">
          <h2>Kumpulan Aib</h2>
          <h1>Aib Genta</h1>
        </div>

        <div class="aib-tabs" data-aos="fade-up">
						<button type="button" class="aib-tab-item active" data-target="#bph_division">BPH & Koor & Wakor Division</button>
						<button type="button" class="aib-tab-item" data-target="#lfc_division">Layout & Foton & CC Division</button>
				</div>

        <!-- BPH Division -->
				<div class="row mb-6 aib-tab-content active" id="bph_division">
				
					<!-- Aib Amelia -->
					<div class="aib-item col-lg-6">
						<div class="aib-item-title" data-aos="fade-right">
							<img src="assets/kumpulan_aib/bph_division/amelia.jpg" alt="Amelia">
							<h3>Amelia</h3>
						</div>
					</div>

          <!-- Aib Cimei -->
					<div class="aib-item col-lg-6">
						<div class="aib-item-title" data-aos="fade-left">
							<img src="assets/kumpulan_aib/bph_division/ce_cimei.jpg" alt="Cimei">
							<h3>Cimei</h3>
						</div>
					</div>
        
          <!-- Aib Akang -->
					<div class="aib-item col-lg-6">
						<div class="aib-item-title" data-aos="fade-right">
							<img src="assets/kumpulan_aib/bph_division/akang.jpg" alt="Akang">
							<h3>Akang</h3>
						</div>
					</div>
          
          <!-- Aib Radam -->
					<div class="aib-item col-lg-6">
						<div class="aib-item-title" data-aos="fade-left">
							<img src="assets/kumpulan_aib/bph_division/radam.jpg" alt="Radam">
							<h3>Radam</h3>
						</div>
					</div>

           <!-- Aib Wendy -->
					<div class="aib-item col-lg-6">
						<div class="aib-item-title" data-aos="fade-right">
							<img src="assets/kumpulan_aib/bph_division/wendy.jpg" alt="Wendy">
							<h3>Wendy</h3>
						</div>
					</div>
          
          <!-- Aib Nyaw -->
					<div class="aib-item col-lg-6">
						<div class="aib-item-title" data-aos="fade-left">
							<img src="assets/kumpulan_aib/bph_division/nyaw.jpg" alt="Nyaw">
							<h3>Nyaw</h3>
						</div>
					</div>

          <!-- Aib Nyaw1 -->
					<div class="aib-item col-lg-6">
						<div class="aib-item-title" data-aos="fade-right">
							<img src="assets/kumpulan_aib/bph_division/nyaw1.jpg" alt="Nyaw">
							<h3>Nyaw</h3>
						</div>
					</div>

          <!-- Aib Sasa -->
					<div class="aib-item col-lg-6">
						<div class="aib-item-title" data-aos="fade-left">
							<img src="assets/kumpulan_aib/bph_division/ce_sasa.png" alt="Sasa">
							<h3>Sasa</h3>
						</div>
					</div>

          <!-- Aib Kelvin -->
					<div class="aib-item col-lg-6">
						<div class="aib-item-title" data-aos="fade-right">
							<img src="assets/kumpulan_aib/bph_division/kelvin.jpg" alt="Kelvin">
							<h3>Kelvin</h3>
						</div>
					</div>

          <!-- Aib Jexi -->
					<div class="aib-item col-lg-6">
						<div class="aib-item-title" data-aos="fade-left">
							<img src="assets/kumpulan_aib/bph_division/ce_jexi.jpg" alt="Jexi">
							<h3>Jexi</h3>
						</div>
					</div>

          <!-- Aib Vanjo -->
					<div class="aib-item col-lg-6">
						<div class="aib-item-title" data-aos="fade-right">
							<img src="assets/kumpulan_aib/bph_division/vanjo.jpg" alt="Vanjo">
							<h3>Vanjo</h3>
						</div>
					</div>
          
          <!-- Aib Dandan -->
					<div class="aib-item col-lg-6">
						<div class="aib-item-title" data-aos="fade-left">
							<img src="assets/kumpulan_aib/bph_division/dandan.jpg" alt="Dandan">
							<h3>Dandan</h3>
						</div>
					</div>

          <!-- Aib Ichak -->
					<div class="aib-item col-lg-6">
						<div class="aib-item-title" data-aos="fade-right">
							<img src="assets/kumpulan_aib/bph_division/ichak.jpg" alt="Ichak">
							<h3>Ichak</h3>
						</div>
					</div>

				</div>

        <!-- LFC Division -->
				<div class="row mb-6 aib-tab-content" id="lfc_division">
				
					<!-- Aib Sherlyn -->
					<div class="aib-item col-lg-6">
						<div class="aib-item-title" data-aos="fade-right">
							<img src="assets/kumpulan_aib/lfc_division/fotcet_sherlyn.png" alt="aib Sherlyn">
							<h3>Sherlyn</h3>
						</div>
					</div>

          <!-- Aib Audi -->
          <div class="aib-item col-lg-6">
						<div class="aib-item-title" data-aos="fade-left">
              <img src="assets/kumpulan_aib/lfc_division/Audi.jpg" alt="aib Audi">
							<h3>Audi W</h3>
						</div>
					</div>

          <!-- Aib Mareta -->
          <div class="aib-item col-lg-6">
						<div class="aib-item-title" data-aos="fade-right">
              <img src="assets/kumpulan_aib/lfc_division/Mareta.jpg" alt="aib Mareta">
							<h3>Mareta E</h3>
						</div>
					</div>

          <!-- Aib Calista -->
          <div class="aib-item col-lg-6">
						<div class="aib-item-title" data-aos="fade-left">
              <img src="assets/kumpulan_aib/lfc_division/calista.jpg" alt="aib Calista">
							<h3>Calista M</h3>
						</div>
					</div>
        
				</div>
      </div>
    </div>
      
    <div class="special-edition">
      <div class="youtube-info" data-aos="fade-down">
        <h2>special edition</h2>
      </div>

      <!--Ce Radam-->
      <div data-aos="fade-up">
        <iframe height="auto" width="auto"
          src="https://www.youtube.com/embed/1nT19Wrws_M">
        </iframe>
      </div>

      <!--Ce Cimei-->
      <div data-aos="fade-up">
        <iframe height="auto" width="auto"
          src="https://www.youtube.com/embed/uTuZLRSayoE">
        </iframe>
      </div>

      <!--Winston-->
      <div data-aos="fade-up">
        <iframe height="auto" width="auto"
          src="https://www.youtube.com/embed/U4bay2UxMPo">
        </iframe>
      </div>
    </div>
    <div class="pantoon text-center" id="pantun" data-aos="zoom-in">
      <h1 class="teks-utama mb-5"><b>Pantun</b></h1>
      <p><b>Masak beras ketan</b></p>
      <p><b>Tak perlu dimakan</b></p>
      <p><b>Ayo kawan-kawan</b></p>
      <p><b>Kepakkan sayap ke GENTA-AN</b></p>
  </div>
</body>

<footer class="container-fluid">
  <p>
    Copyright &copy; 2021 Divisi IT GENTA | All Rights Reserved.
  </p>
</footer>
<!-- JavaScript Bundle with Popper -->
<script src="script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>