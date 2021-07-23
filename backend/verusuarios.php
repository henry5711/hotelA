<?php 
include 'conexion.php';

$sql="SELECT personas.ced_per,personas.nom1_per,personas.nom2_per,personas.ape1_per,personas.ape2_per,personas.tel1_per,personas.tel2_per,personas.cor_per,personas.sta_per,usuario.nom_usu,usuario.fky_per,usuario.fky_tiu,usuario.sta_usu,tipo_usuario.cod_tiu,tipo_usuario.nom_tiu FROM personas,usuario,tipo_usuario WHERE personas.ced_per=usuario.fky_per AND tipo_usuario.cod_tiu=usuario.fky_tiu";
$cusu=mysqli_query($cone,$sql);

 ?>