<?php 
include 'conexion.php';

$cod=$_REQUEST['cod'];
$art=$_POST['fky_art'];

$sql="INSERT INTO `detalle_habi` (`id`, `fky_hab`, `fky_art`) VALUES (NULL, '$cod', '$art');";


$aggr=mysqli_query($cone,$sql);

if ($aggr) {
   echo "<script>location.href='../fronentd/admin/chart.php?cod=$cod';</script>";
}

else
{
    echo "<script>
    alert('No se guardo el articulo en la habitacion');
    location.href='../fronentd/admin/agghart.php';</script>";
}




 ?>