<?php 

session_start();

 ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	
	<title>Habitaciones</title>
	<link rel="stylesheet" href="../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap-grid.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap-reboot.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap-utilities.css">
	<link rel="stylesheet" type="text/css" href="../css/estilocartas.css">
  <link rel="stylesheet" type="text/css" href="../css/do.css">
  <link rel="stylesheet" type="text/css" href="../css/all.css">
</head>
<body data-dark>
	<?php include 'navb.php';
  include 'menudesplegable.php'; ?>
	<div class="container">
		

	<div class="row row-cols-1 row-cols-md-3 g-4">

    <!-- carta AGG -->

    <?php  include '../../backend/exhabi.php'; 
              
  
              while($vc=mysqli_fetch_array($chab))
              { 
                if($vc['sta_hab']=="A")
                {
                 echo "<div class='col-2 pt-lg-5'>
                <a href='opcdisp.php?cod=$vc[id]'>
                <div class='card h-100'>
                 <img src='../img/agregar.jpg' class='card-img-top ' alt='clientes'>
                <div class='card-body bg-success'>
                <h5 class='card-title text-center'>Habitacion $vc[id] <i class='fas fa-door-open'></i></h5>
                </div>
                </div>
                </a>
                </div>";
                }

                if($vc['sta_hab']=="O")
                {
                  echo "<div class='col-2 pt-lg-5'>
                <a href='opcocup.php?cod=$vc[id]' title='Agregar Reservacion'>
                <div class='card h-100'>
                <img src='../img/agregar.jpg' class='card-img-top ' alt='clientes'>
                <div class='card-body bg-primary'>
                <h5 class='card-title text-center'>Habitacion $vc[id] <i class='fas fa-door-closed'></i></h5>
                </div>
                </div>
                </a>
                </div>";
                }

                if($vc['sta_hab']=="M")
                {
                 echo "<div class='col-2 pt-lg-5'>
                <a href='opcman.php?cod=$vc[id]' title='Agregar Reservacion'>
                <div class='card h-100'>
                <img src='../img/agregar.jpg' class='card-img-top ' alt='clientes'>
                <div class='card-body bg-warning'>
                <h5 class='card-title text-center'>Habitacion $vc[id] <i class='fas fa-exclamation-triangle'></i></h5>
                </div>
                </div>
                </a>
                </div>";
                }

                if($vc['sta_hab']=="I")
                {
                  echo "<div class='col-2 pt-lg-5'>
                <a href='opccla.php?cod=$vc[id]' title='Agregar Reservacion'>
                <div  class='card h-100'>
                 <img src='../img/agregar.jpg' class='card-img-top ' alt='clientes'>
                <div class='card-body bg-danger'>
                <h5 class='card-title text-center'>Habitacion $vc[id] <i class='fas fa-times-circle'></i></h5>
                </div>
                </div>
                </a>
                </div>";
                }
                
                          } 
          
           ?>
            
  

 </div>
    </div>
  
    <a href="listhab.php">
    <button class="panel-btn2" type="button">
        <span>
            <i class="fas fa-eye text-light fa-lg"></i>
        </span>
      </button></a>

<script src="../js/bootstrap.js" type="text/javascript" charset="utf-8" async defer></script>
<script src="../js/eje.js" type="module"></script>
<script type="text/javascript" src="../js/all.js"></script>


</body>
</html>