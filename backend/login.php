<?php 
include 'conexion.php';

	if(isset($_POST["enviar"])){
		$usuario=$_REQUEST["usu"];
		$password=$_REQUEST["pass"];

		$sql="SELECT * FROM `usuario` WHERE nom_usu='$usuario' AND pass_usu='$password'";

		$vali=mysqli_query($cone,$sql);
		 $NUM=MYSQLI_NUM_ROWS($vali);
		 
		 while ($ex=mysqli_fetch_array($vali)) {
		 	
              //aqui busca al admin
		 	if ($ex['fky_tiu']=="u01") {
		 		 if($NUM>0){
				 	session_start();
				 	echo "<script>alert('Bienvenido administrador')</script>";
				 

				 	$_SESSION['nivel']=1;
				    $_SESSION['cedula']=$ex['fky_per'];
				    $_SESSION['nombreusuario']=$ex['nom_usu'];
				    echo "<script>location.href='../fronentd/admin/prinadmin.php';</script>";



				 }
		 	}
             //aqui busca al subadmin
		 	elseif ($ex['fky_tiu']=="u02") {
		 		 if($NUM>0){
				 	session_start();
				 	echo "<script>alert('Bienvenido departamento de bienes')</script>";
				 

				 	$_SESSION['nivel']=2;
				     $_SESSION['cedula']=$ex['fky_per'];
				    $_SESSION['nombreusuario']=$ex['nom_usu'];
				    echo "<script>location.href='../frontend/bienes/principalbienes.php';</script>";



				 }
		 		
		 	}
                 
                 //aqui busca usuarios comunes

		 	elseif ($ex['fky_tiu']=="u03") {
		 		 if($NUM>0){
				 	session_start();
				 	echo "<script>alert('Bienvenido usuario')</script>";
				 

				 	$_SESSION['nivel']=3;
				     $_SESSION['cedula']=$ex['fky_per'];
				    $_SESSION['nombreusuario']=$ex['nom_usu'];
				    
                    echo "<script>location.href='../frontend/usu/principaladmin.php';</script>";


				 }
		 		
		 	}

		 	elseif($ex['fky_tiu']=="u04"){
		 
		 		 if($NUM>0){
				 	session_start();
				 	echo "<script>alert('Bienvenido usuario')</script>";
				 
                    $sqlre="SELECT * FROM `personas` WHERE ced_per='$ex[fky_per]'";
				 	$_SESSION['nivel']=4;
				  $_SESSION['cedula']=$ex['fky_per'];
				    $_SESSION['nombreusuario']=$ex['nom_usu'];
				    $c=mysqli_query($cone,$sqlre);
				    while ($cx=mysqli_fetch_array($c)) {
				    	 echo "<script>location.href='../frontend/repa/principaladmin.php?are=$cx[fky_areu]'</script>";


				    }
				   


				 }
		 	
		 	}


	
		 }//esta cierra el while


		 	
		 	

		 

            if ($NUM==0) {
		 		
				 	echo "<script>alert('Usuario no existente')</script>";
				 

				 	
				    echo "<script>location.href='../index.php';</script>";
	
		 	}
		}


		else{
			echo 'no se recibe informacion';
		}




 ?>