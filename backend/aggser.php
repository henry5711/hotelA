<?php 
include 'conexion.php';

$cod=$_POST['id'];
$ftse=$_POST['fky_tse'];
$nom=$_POST['nom'];
$pre=$_POST['pre'];
$can=$_POST['can'];

$sql="INSERT INTO `servicio` (`id`, `nom_se`, `fky_tse`, `pre_ser`, `can_ser`, `sta_ser`) VALUES ('$cod', '$nom', '$ftse', '$pre', '$can', 'A');";


$aggr=mysqli_query($cone,$sql);

if ($aggr) {
   echo "<script>location.href='../fronentd/admin/cser.php';</script>";
}

else
{
    echo "<script>
    alert('No se registro el servicio');
    location.href='../fronentd/admin/aggser.php';</script>";
}




 ?>