<div class="row h-100">
		<div data-aos="fade-down">
				<div class="masthead">
					<div class="masthead-bg"></div>
					<div class="container-fluid h-100">
					<div class="row h-100">
						<div class="col-md-6 my-auto">
							<div class="masthead-content text-white py-5 py-md-0">
								<h1 class="mb-3 text-center">BEM FILKOM</h1>
								<h2 class="mb-3 text-center">Universitas Brawijaya</h2>
							</div>
						</div>
			
						<div class="col-md-6 my-auto">
							<img src="image/Logo BEM.png" style="width:100%">
						</div>
					</div>
				</div>
				</div>
		</div>
	</div>
	
	
    <!-- Place your code here-->

	<div class="row h-100 boutbem">
		<div class="filter-img">
			<div data-aos="fade-down">
				<div class="col-md-12 gap">
					<div class="container text-white">
							<center><h1 class="text-center">TENTANG BEM FILKOM 2018</h1></center>
					</div>				
				</div>	
			</div>
			
			<div data-aos="fade-up">
				<div class="col-md-12 gap-2">
					<div class="container bg-putih">
							<center><p>Badan Eksekutif Mahasiswa (BEM) Universitas Brawijaya merupakan sebuah lembaga eksekutif tingkat fakultas. Membawa istilah eksekutif, BEM FILKOM bertugas untuk menjalankan program-program kerja yang selaras dan mematuhi segala tata tertib yang telah ditetapkan oleh Dewan Perwakilan Mahasiswa (DPM), yang merupakan lembaga legislatif tingkat universitas. Dalam pendekatan kelembagaan, BEM FILKOM hadir untuk mempertanggungjawabkan hak yang seharusnya diterima oleh mahasiswa melalui kegiatan aktualasi diri kemahasiswaan. Sederhananya, setiap uang yang dibayarkan oleh mahasiswa kepada pihak fakultas termuat hak mahasiswa dalam kegiatan aktualisasi diri kehidupan kampus. Dalam level fakultas, BEM FILKOM hadir sebagai sarana untuk mempertanggungjawabkan hal tersebut.</p></center>
					</div>				
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-4">
			<div class="container">
				<div class="row">
						<div class="col-md-6">
							<div data-aos="zoom-in">
								<center><i class="ion-ios-briefcase icon"></i>
									<p>Kerja Professional Diiringi Kekeluargaan</p></center>
							</div>
						</div>
						<div class="col-md-6">
							<div data-aos="zoom-in">
								<center><i class="ion-ios-aperture icon"></i>
									<p>Sinergisme</p></center>
							</div>
						</div>	
				</div>
				<div class="row">
						<div class="col-md-12">
								<div data-aos="zoom-in"></div>
								<center><i class="ion-ios-lightbulb icon"></i>
								<p>Iklim Produktif dalam Inovasi</p></center>
						</div>
				</div>
				
			</div>
		</div>
		<div class="col-md-4">
			<div class="container">
					<img src="image/preswapres.png" width="100%" height="100%">
			</div>
		</div>
		<div class="col-md-4">
			<div class="container">
					<div class="row">
						<div class="col-md-6">
							<div data-aos="zoom-in">
								<center><i class="ion-android-star icon"></i>
									<p>Apresiatif</p></center>
							</div>
								
						</div>
						<div class="col-md-6">
							<div data-aos="zoom-in">
								<center><i class="ion-android-send icon"></i>
									<p>Advokasi Mandiri</p></center>
							</div>
						</div>
					</div>
					<div class="row">
							<div class="col-md-12">
								<div data-aos="zoom-in">
									<center><i class="ion-android-done-all icon"></i>
										<p>Aksi Nyata dalam Sosial Politik</p></center>
								</div>
							</div>
					</div>
					
					
			</div>
		</div>
	</div>

	<div class="row bg-blue">
		<div class="col-md-12 gap-title">
			<div class="container text-white">
				<div data-aos="fade-down">
					<center><h1 class="text-center">BEM ACTIVITY</h1></center>
				</div>
			</div>				
		</div>
		<div class="row text-center" style="width:90%;margin-left:auto;margin-right:auto;margin-bottom:3%">
            <?php
            $query      = "SELECT * FROM mainwebpost WHERE kategori='bemactivity'";
            $sql        = mysqli_query($conn, $query);
            $sql_result = $sql->fetch_all();
            $rows       = $sql->num_rows;
            $i=0;
            while ($i < 3 && $rows != 0) {
                $id = $sql_result[$i][0];
                $nama = $sql_result[$i][1];
                $tanggal = $sql_result[$i][3];
                $gambar = $sql_result[$i][5];
            
            echo " 
            <div class='col-md-4'>
				<div data-aos='zoom-in-up'>
					<div class='card'>
							<div class='container'>
									<div class='fakeimg' style='height:200px;'>
										<a href='?page=view&id=".$id."'><img src='image/".$gambar."' class='img-post'></a>
									</div>
									<h2 style='font-size:120%'>".$nama."</h2>
									<h5 style='font-size:80%'>".$tanggal."</h5>
							</div>					
						</div>
				</div>
			</div>";
            $i++;}
            ?>
			
			
		</div>
	</div>

	<div class="row bg-lemb">
			<div class="col-md-12 gap-title">
				<div class="container text-white">
						<center><h1 class="text-center">KELEMBAGAAN</h1></center>
				</div>				
			</div>
			<div class="row bg-putih text-center" style="width:90%;margin-left:auto;margin-right:auto;margin-bottom:3%">
				<div class="col-md-3">
					<img class="port-logo" src="image/LogoLembaga/logo-amd.png">
				</div>
				<div class="col-md-3">
					<img class="port-logo" src="image/LogoLembaga/logo-bios.png">
				</div>
				<div class="col-md-3">
					<img class="port-logo" src="image/LogoLembaga/logo-display.png">
				</div>
				<div class="col-md-3">
					<img class="port-logo" src="image/LogoLembaga/logo-himatekom.png">
				</div>
				<div class="col-md-3">
					<img class="port-logo" src="image/LogoLembaga/logo-hmif.png">
				</div>
				<div class="col-md-3">
					<img class="port-logo" src="image/LogoLembaga/logo-kbmsi.png">
				</div>
				<div class="col-md-3">
					<img class="port-logo" src="image/LogoLembaga/logo-krisma.png">
				</div>
				<div class="col-md-3">
					<img class="port-logo" src="image/LogoLembaga/logo-optiik.png">
				</div>
				<div class="col-md-6">
					<img class="port-logo" src="image/LogoLembaga/logo-poros.png">
				</div>
				<div class="col-md-6">
					<img class="port-logo" src="image/LogoLembaga/logo-raion.png">
				</div>

			</div>
			
	</div>