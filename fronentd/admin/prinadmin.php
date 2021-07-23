<?php 

session_start();

 ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	
	<title>Administrador</title>
	<link rel="stylesheet" href="../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap-grid.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap-reboot.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap-utilities.css">
	<link rel="stylesheet" type="text/css" href="../css/estilocartas.css">
  <link rel="stylesheet" type="text/css" href="../css/do.css">
  <link rel="stylesheet" type="text/css" href="../css/all.css">
</head>
<body data-dark>
	<?php include 'navb.php'; ?>
	<div class="container">
	<br>
  <h2 class="text-center" >Hotel Circulo Militar </h2>

	<div class="row row-cols-1 row-cols-md-3 g-4" style="padding-top: 50px;">
    <!-- carta clientes -->
    
  <div class="col-4">
    <a href="clientes.php" title="Clientes">
    <div class="card h-100">
      <img src="../img/clientes.jpg" class="card-img-top " alt="clientes">
      <div class="card-body">
        <h5 class="card-title text-center">Clientes</h5>
      </div>
    </div>
  </a>
  </div>
   
<!-- carta personal -->
  <div class="col-4">
    <a href="personal.php" title="Personal">
    <div class="card h-100">
      <img src="../img/empleados.jpg" class="card-img-top " alt="personal">
      <div class="card-body">
        <h5 class="card-title text-center">Personal</h5>
      </div>
    </div>
      </a>
  </div>

  <!-- carta habitacion -->
  <div class="col-4">
  <a href="habitaciones.php" title="Usuarios">
    <div class="card h-100">
      <img src="../img/habitacion.jpg" class="card-img-top" alt="habitaciones">
      <div class="card-body">
        <h5 class="card-title text-center">Habitaciones</h5>
      </div>
    </div>
    </a>
  </div>

  <!-- carta reservaciones -->
  <div class="col-4">
    <a href="reservas.php" title="reservaciones">
    <div class="card h-100">
      <img src="../img/reservacion.png" class="card-img-top " alt="reservaciones">
      <div class="card-body">
        <h5 class="card-title text-center">Reservaciones</h5>
      </div>
    </div>
      </a>
  </div>

  <div class="col-4">
    <a href="usuarios.php" title="Usuarios">
    <div class="card h-100">
      <img src="../img/usuarios.jpg" class="card-img-top " alt="Usuarios">
      <div class="card-body">
        <h5 class="card-title text-center">Usuarios</h5>
      </div>
    </div>
  </a>
  </div>
  <div class="col-4">
    <a href="cpago.php">
    <div class="card h-100">
      <img src="../img/pagos22.png" class="card-img-top " alt="reservaciones">
      <div class="card-body">
        <h5 class="card-title text-center">Pagos</h5>
      </div>
    </div>
    </a>
  </div>
  




<!-- Aqui  -->


<div class="col-4">
<a href="servicios.php" title="Usuarios">
    <div class="card h-100">
      <img src="../img/comida.jpg" class="card-img-top " alt="reservaciones">
      <div class="card-body">
        <h5 class="card-title text-center">Servicios</h5>
      </div>
    </div>
      </a>
  </div>

  <div class="col-4">
    <a href="migracion.php" title="Usuarios">
    <div class="card h-100">
      <img src="../img/migracion.jpg" class="card-img-top " alt="Usuarios">
      <div class="card-body">
        <h5 class="card-title text-center">Migracion</h5>
      </div>
    </div>
  </a>
  </div>
  <div class="col-4">
    <div class="card h-100">
      <img src="../img/reportes.jpg" class="card-img-top " alt="reservaciones">
      <div class="card-body">
        <h5 class="card-title text-center">Reportes</h5>
      </div>
    </div>
  </div>
</div>
<!-- Aqui debe ir el Footer -->

<!-- Footer -->
<footer class="page-footer font-small indigo">

  <!-- Footer Links -->
  <div class="container">

    <!-- Grid row-->
    <div class="row text-center d-flex justify-content-center pt-5 mb-3">

      <!-- Grid column -->
      <div class="col-md-2 mb-3">
        <h6 class="text-uppercase font-weight-bold">
          <a href="#!">About us</a>
        </h6>
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-2 mb-3">
        <h6 class="text-uppercase font-weight-bold">
          <a href="#!">Products</a>
        </h6>
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-2 mb-3">
        <h6 class="text-uppercase font-weight-bold">
          <a href="#!">Awards</a>
        </h6>
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-2 mb-3">
        <h6 class="text-uppercase font-weight-bold">
          <a href="#!">Help</a>
        </h6>
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-2 mb-3">
        <h6 class="text-uppercase font-weight-bold">
          <a href="#!">Contact</a>
        </h6>
      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row-->
    <hr class="rgba-white-light" style="margin: 0 15%;">

    <!-- Grid row-->
    <div class="row d-flex text-center justify-content-center mb-md-0 mb-4">

      <!-- Grid column -->
      <div class="col-md-8 col-12 mt-5">
        <p style="line-height: 1.7rem">Sed ut perspiciatis unde omnis iste natus error sit voluptatem
          accusantium doloremque laudantium, totam rem
          aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
          explicabo.
          Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur.</p>
      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row-->
    <hr class="clearfix d-md-none rgba-white-light" style="margin: 10% 15% 5%;">

    <!-- Grid row-->
    <div class="row pb-3">


    </div>
    <!-- Grid row-->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div  class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href="https://mdbootstrap.com/" > MDBootstrap.com</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->


</div>
</div>


<script src="../js/bootstrap.js" type="text/javascript" charset="utf-8" async defer></script>
<script src="../js/eje.js" type="module"></script>
<script type="text/javascript" src="../js/all.js"></script>
</body>
</html>