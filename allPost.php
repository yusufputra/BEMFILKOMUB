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
        include "Connection.php";
  //       $page = isset($_GET['halaman'])? (int)$_GET["halaman"]:1;
		// $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
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
            echo "<div class='col-md-12'>";
        for ($j=0; $j < 3; $j++) { 
        	if($sql_result[$i+$j][0]==null){
        		continue;
        	}else{
        		echo " 
		       
		       		<div class='col-md-4'>
				     <div class='col-sm-12'>
				     <div class='card'>
				      
				      <div class='fakeimg' style='height:200px;'>
				      <a href='postView.php?id=".$sql_result[$i+$j][0]."'><img src='img/".$sql_result[$i+$j][5]."' class='img-post'/></a></div>
				      <h2 style='font-size:120%'>".$sql_result[$i+$j][1]."</h2>
				      <h5  style='font-size:80%'>".$sql_result[$i+$j][3]."</h5>
				      </div>
				      </div>
				    </div>
				        
		    
		        ";
        	}
        }
        echo "</div>";
        $i+=3;}
        ?>
        <!-- <div class="col-md-12">
        	<ul class="pagination">
        		<?php
        		// if($rows / 12 !=0){
        		// 	for ($i=1; $i <= ($rows / 12)+1  ; $i++) { 
        		// 		echo "<li><a href='#'>$i</a></li>";
        		// 	}	
        		// }
        		?> 
			</ul>
        </div> -->
                
                    </div>
                </div>
            </div>
            </section>

