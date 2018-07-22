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
        include "koneksi.php";

        $query = "SELECT * FROM mainwebpost";
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
	  <a href='?page=edit&id=".$id."'><img src='img/".$gambar."' class='img-post'/></a></div>
	  <h2>".$nama."</h2>
      <a href='delete.php?id=".$id."'>Delete</a>
      </div>
      </div>
	</div>
        "; $i++;}
        ?>
        
				
					</div>
                </div>
            </div>
			</section>