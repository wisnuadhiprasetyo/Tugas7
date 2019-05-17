<?php
 include "db.php";
 if(isset($_POST['insert']))
 {
 $Jenis=$_POST['Jenis'];
 $Nama=$_POST['Nama'];
 $Harga=$_POST['Harga'];
 $q=mysqli_query($con,"INSERT INTO `obat` (`Jenis`,`Nama`,`Harga`) VALUES ('$Jenis','$Nama','$Harga')");
 if($q)
  echo "success";
 else
  echo "error";
 }
 ?>