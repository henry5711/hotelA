<?php 
include 'conexion.php';
$hab=$_POST['hab'];
$cli=$_POST['cli'];
$feci=$_POST['feci'];
$fecf=$_POST['fecf'];

$sql="INSERT INTO `estancia` (`id`, `fky_hab`, `fky_cli`, `fec_ini`, `fec_fin`) VALUES ('', '$hab', '$cli', '$feci', '$fecf');";
$sql1="UPDATE `habitacion` SET `sta_hab` = 'R' WHERE `habitacion`.`id` = '$hab';";

$aggr=mysqli_query($cone,$sql);
$uphab=mysqli_query($cone,$sql1);

if($aggr && $uphab)
{
    echo "jejje";
}





 ?>