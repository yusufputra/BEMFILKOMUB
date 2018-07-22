<?php
  $id = $_GET['id'];
  $query = "SELECT * FROM mainwebpost WHERE `id` = '$id'";
  $sql = mysqli_query($conn, $query);
  $sql_result = $sql->fetch_all();
  $rows = $sql->num_rows;
  // echo "<pre>";
  // echo var_dump($sql_result);
  // echo "</pre>";
  if(isset($_POST['edit'])){
    $admin = $_SESSION['userSession'];
    $nama = $_POST['nama'];
    $kategori = $_POST['kategori'];
    $tanggal = $_POST['tanggal'];
    $isi = $_POST['isi'];

    $query = "UPDATE `mainwebpost` SET `nama`='$nama',`kategori`='$kategori',`tanggal`='$tanggal',`isi`='$isi',`admin`='$admin' WHERE `id` = '$id'";
    mysqli_query($conn, $query);

    // echo "<script type='text/javascript'>";
    // echo "setTimeout(function () { swal(
    //             'Sukses',
    //             'Data sudah di edit',
    //             'success'
    //           );";
    // echo "}, 1000);"
    // echo "window.location.href = 'inputberita.php?page=see'";
    // echo "</script>";

    echo "<script>
          
          window.location.href = 'inputberita.php?page=see&edited';
              </script>";

        
  }
?>
<form action="#" method="post" name="input" enctype="multipart/form-data">
    <table border="0" cellpadding="0" style="width: 700px;">
 <tr>
 <td colspan="2"><h2>Input Berita</h2>
 </td>
   </tr>
 <tr>
         <td width="200">Judul</td>
            <td> 
                <input class="validate" name="nama" id="nama" size="30" type="text" placeholder="Tulis disini" value="<?php echo $sql_result[0][1]; ?>" />

        </td>
        </tr>
<tr>
  <tr>
         <td>Kategori</td>
            <td>       
            <select name="kategori" id="kategori" class = "browser-default">
              <option value="<?php echo $sql_result[0][2]; ?>"><?php echo $sql_result[0][2]; ?></option>
              <option value="beasiswa">Beasiswa</option>
              <option value="lomba">Lomba</option>
              <option value="karir">Karir</option>
              <option value="filkomjuara">Filkom Juara</option>
              <option value="suarakp">Suara KP</option>
              <option value="bemactivity">BEM Activity</option>
            </select>
              <!-- <input name="kategori" size="30" type="text" placeholder="tambahkan lainnya"/></td> -->
<tr>
         <td>Tanggal</td>
            <td><input cols="30" name="tanggal" id="tanggal" class="datepicker" type="date" placeholder="Ketuk disini" value="<?php echo $sql_result[0][3]; ?>"></td>
        </tr>
<tr>
         <td>Isi Berita</td>
            <td> <textarea cols="50" name="isi" id="isi" rows="10" class="materialize-textarea"><?php echo $sql_result[0][4]; ?></textarea></td>
        </tr>
<tr>
        <!-- <td>Gambar</td>
            <td>
            <div class="file-field input-field">
            <div class="btn">
                <span>File</span>
                <input type="file" name="gambar" id="gambar">
            </div>
            <div class="file-path-wrapper">
                <input class="file-path validate" type="text">
            </div>
            </div>
            </td> -->
        </tr>
<tr>
         <td> </td>
            <td>

            <input class="waves-effect waves-light btn" name="edit" type="submit" value="edit" />

            <input class="waves-effect waves-light btn" name="reset" type="reset" value="Cancel" /></td>
        </tr>
</table>
</form>
