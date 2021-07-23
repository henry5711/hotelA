<?php 

include 'conexion.php';

$sql="SELECT personas.ced_per,personas.nom1_per,personas.nom2_per,personas.ape1_per,personas.ape2_per,personas.tel1_per,personas.tel2_per,personas.cor_per,personas.sta_per,cliente.fky_per,cliente.fky_tcli,cliente.ciu_cli,cliente.pro_cli,cliente.aco_cli,cliente.sta_cli,tipo_cliente.id_tcli,tipo_cliente.nom_tcli FROM personas,cliente,tipo_cliente WHERE personas.ced_per=cliente.fky_per AND tipo_cliente.id_tcli=cliente.fky_tcli";

$ccli=mysqli_query($cone,$sql);



 ?>