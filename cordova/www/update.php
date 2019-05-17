<?php
 include "db.php";
 if(isset($_POST['update']))
 {
 $id=$_POST['id'];    
 $Jenis=$_POST['Jenis'];
 $Nama=$_POST['Nama'];
 $Harga=$_POST['Harga'];
 $q=mysqli_query($con,"UPDATE `obat` SET `Jenis`='$Jenis',`Nama`='$Nama',`Harga`='$Harga' where `id`='$id'");
 if($q)
 echo "sukses";
 else
 echo "error";
 }
 ?>