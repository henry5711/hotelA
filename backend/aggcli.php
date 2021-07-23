<?php 
include 'conexion.php';
if (isset($_POST["enviar"])) {
	$ced=$_POST["ced"];
	$nom1=$_POST["nom1"];
	$nom2=$_POST["nom2"];
	$ape1=$_POST["ape1"];
	$ape2=$_POST["ape2"];
	$cor=$_POST["correo"];
	$tel1=$_POST["tel1"];
	$tel2=$_POST["tel2"];
	$fky_tcli=$_POST["fky_tcli"];
	$pais=$_POST["pais"];
	$pro=$_POST["pro"];
	$acompa=$_POST['aco'];
	$sta="A";

       //insertando personas
	$sql="INSERT INTO `personas` (`ced_per`, `nom1_per`, `nom2_per`, `ape1_per`, `ape2_per`, `tel1_per`, `tel2_per`, `cor_per`, `sta_per`) VALUES ('$ced', '$nom1', '$nom2', '$ape1', '$ape2', '$tel1', '$tel2', '$cor', '$sta');";
	//insertando usuario
	$sql1="INSERT INTO `cliente` (`fky_per`, `fky_tcli`, `ciu_cli`, `pro_cli`, `aco_cli`, `sta_cli`) VALUES ('$ced', '$fky_tcli', '$pais', '$pro','$acompa', 'A');";

	$ip=mysqli_query($cone,$sql);
	$iu=mysqli_query($cone,$sql1);

	if ($ip && $iu) {
		echo "<script>location.href='../fronentd/admin/cclientes.php';</script>";
	}
	else
	{
		echo"<script>alert ('registro erroneo');</script>";
           echo "<script>location.href='../fronentd/admin/cclientes.php';</script>";
	}
}

 ?>