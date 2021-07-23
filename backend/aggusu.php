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
	$fky_tiu=$_POST["fky_tiu"];
	$usuario=$_POST["usu"];
	$password=$_POST["pass"];
	$sta="A";

       //insertando personas
	$sql="INSERT INTO `personas` (`ced_per`, `nom1_per`, `nom2_per`, `ape1_per`, `ape2_per`, `tel1_per`, `tel2_per`, `cor_per`, `sta_per`) VALUES ('$ced', '$nom1', '$nom2', '$ape1', '$ape2', '$tel1', '$tel2', '$cor', '$sta');";
	//insertando usuario
	$sql1="INSERT INTO `usuario` (`nom_usu`, `pass_usu`, `fky_per`, `fky_tiu`, `sta_usu`) VALUES ('$usuario', '$password', '$ced', '$fky_tiu', 'A');";

	$ip=mysqli_query($cone,$sql);
	$iu=mysqli_query($cone,$sql1);

	if ($ip && $iu) {
		echo "<script>location.href='../fronentd/admin/cusu.php';</script>";
	}
	else
	{
		echo"<script>alert ('registro erroneo');</script>";
           echo "<script>location.href='../fronentd/admin/aggusu.php';</script>";
	}
}

 ?>