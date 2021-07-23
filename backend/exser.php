<?php 

include 'conexion.php';
$sql="SELECT servicio.id,servicio.nom_se,servicio.fky_tse,servicio.pre_ser,servicio.can_ser,servicio.sta_ser,tipo_servicio.id,tipo_servicio.nom_tse FROM servicio,tipo_servicio WHERE tipo_servicio.id=servicio.fky_tse";
$cser=mysqli_query($cone,$sql);



 ?>