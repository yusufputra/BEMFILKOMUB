<?php
include "koneksi.php";
$id = $_GET['id'];
$query = "DELETE FROM `mainwebpost` WHERE `id` = '$id'";
$query_res = mysqli_query($conn, $query);

echo "<script>
          
          window.location.href = 'inputberita.php?page=see&deleted';
              </script>";

?>