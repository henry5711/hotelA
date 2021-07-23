<?php 
include 'conexion.php';

$cod=$_POST['id'];
$tha=$_POST['fky_thi'];
$pre=$_POST['precio'];
$des=$_POST['des'];

$sql="INSERT INTO `habitacion` (`id`, `fky_tih`, `pre_hab`, `des_hab`, `sta_hab`) VALUES ('$cod', '$tha', '$pre', '$des', 'A');";


$aggr=mysqli_query($cone,$sql);

if ($aggr) {
   echo "<script>location.href='../fronentd/admin/verhab.php';</script>";
}

else
{
    echo "<script>
    alert('No se registro la habitacion');
    location.href='../fronentd/admin/agghab.php';</script>";
}




 ?>