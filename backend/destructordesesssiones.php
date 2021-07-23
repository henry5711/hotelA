<?php 
include 'conexion.php';


session_start();

$des=session_destroy();


if ($des)
{
	echo "<script>location.href='../index.php';</script>";
}

else 
{
	echo "<script>alert('no se puede cerrar la session')</script>";
}


 ?>