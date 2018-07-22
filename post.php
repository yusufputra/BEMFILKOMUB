
      <section id="about" class="about-section">
		 <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section-title">
                        <h2>Information</h2>
                    </div>
                </div>
            </div>
            <div class="text-center margin-top-10 margin-bottom-50">
                <div class="row">
	 <?php
        $id = $_GET['kategori'];
        $query = "SELECT * FROM mainwebpost WHERE kategori='$id'";
        $sql = mysqli_query($conn, $query);
        $sql_result = $sql->fetch_all();
        $rows = $sql->num_rows;
        // echo "<pre>";
        // echo var_dump($sql_result);
        // echo "<pre>";
        $i=0;
        while ($i < $rows) {
            $id = $sql_result[$i][0];
            $nama = $sql_result[$i][1];
            $tanggal = $sql_result[$i][3];
            $gambar = $sql_result[$i][5];
        
       echo " 
	<div class='col-md-4'>
	 <div class='col-sm-12'>
	 <div class='card'>
      
      <div class='fakeimg' style='height:200px;'>
	  <a href='postView.php?id=".$id."'><img src='img/".$gambar."' class='img-post'/></a></div>
	  <h2 style='font-size:120%'>".$nama."</h2>
      <h5 style='font-size:80%'>".$tanggal."</h5>
      </div>
      </div>
	</div>
        "; $i++;}
        ?>
        
				
					</div>
                </div>
            </div>
			</section>
		
       <!-- Footer Start -->
    