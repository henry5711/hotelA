<?php 
include 'conexion.php';

$cod=$_POST['id'];
$nom=$_POST['nom'];
$pre=$_POST['precio'];


$sql="INSERT INTO `articulos` (`cod_art`, `nom_art`, `pre_art`, `sta_art`) VALUES ('$cod', '$nom','$pre', 'A');";


$aggr=mysqli_query($cone,$sql);

if ($aggr) {
   
   echo "<script>location.href='../fronentd/admin/cart.php';</script>";
}

else
{
    echo "<script>
    alert('No se registro el articulo');
    location.href='../fronentd/admin/aggart.php';</script>";
}




 ?>