<?php 

include 'conexion.php';
$sql="SELECT habitacion.id,habitacion.fky_tih,habitacion.pre_hab,habitacion.des_hab,habitacion.sta_hab,tipo_hab.cod_tih,tipo_hab.nom_tih FROM habitacion,tipo_hab WHERE tipo_hab.cod_tih=habitacion.fky_tih";
$hab=mysqli_query($cone,$sql);



 ?>