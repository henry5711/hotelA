<?php 
include 'conexion.php'; 

$cod=$_GET["cod"];

$sql="UPDATE `habitacion` SET `sta_hab` = 'I' WHERE `habitacion`.`id` = $cod;";
$cr=mysqli_query($cone,$sql);

if ($cr) {
		echo "<script>location.href='../fronentd/admin/opccla.php?cod=$cod';</script>";
	}

else
{
	echo "<script>
	alert('No se puede clausurar la habitacion');
	location.href='../fronentd/admin/verhab.php';
	</script>";
}
?>