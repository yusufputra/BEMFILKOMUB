

    <!-- Nilai Start -->
      <section id="about" class="about-section">
		 <div class="container">
            <div class="row gap-heading">
                <div class="col-sm-12">
                    <div class="section-title">
                        <h2 class="text-center">Information</h2>
                    </div>
                </div>
            </div>
            <div class="text-center margin-top-10 margin-bottom-50">
                <div class="row">
     <?php
        include "routes/Connection.php";
        $id = $_GET['id'];
        $query = "SELECT * FROM mainwebpost WHERE `id`='$id'";
        $sql = mysqli_query($conn, $query);
        $sql_result = $sql->fetch_all();
        $rows = $sql->num_rows;
        // echo "<pre>";
        // echo var_dump($sql_result);
        // echo "<pre>";
        $i=0;
        while ($i < $rows) {
            $nama = $sql_result[$i][1];
            $tanggal = $sql_result[$i][3];
            $gambar = $sql_result[$i][5];
            $isi = $sql_result[$i][4];
        
       echo " 
	<div class='col-md-12'></div>
	 <div class='col-md-12 col-sm-3'>
	 <div class='card'>
      
      <div class='fakeimg' style='height:200px;'>
	  <a href='inputberita.php'><img src='img/".$gambar."' class='img-post'/></a></div>
	  <h2>".$nama."</h2>
      <h5>".$tanggal."</h5>
      <p class='test'>".$isi."</p>
    </div>
	</div>
        "; $i++;}
        ?>
        
				
					</div>
                </div>
            </div>
			</section>
		
   