<?php 

session_start();

 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Agregar Reservacion</title>
  <link rel="stylesheet" href="../css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="../css/bootstrap-grid.css">
  <link rel="stylesheet" type="text/css" href="../css/bootstrap-reboot.css">
  <link rel="stylesheet" type="text/css" href="../css/bootstrap-utilities.css">
  <link rel="stylesheet" type="text/css" href="../css/do.css">
  <link rel="stylesheet" type="text/css" href="../css/all.css">

</head>
<body data-dark>
  <?php include 'navb.php';
  include 'menudesplegable.php'; ?>
  <div class="container pt-lg-5" style="margin-top: 40px;">

  <form class="row g-3" action="../../backend/aggrever.php" method="POST">

    <!--primera fila-->
  <div class="col-md-3">
    <label for="hab" class="form-label">Habitacion</label>
    <select id="hab" name="hab" class="form-select" required>
      <option>Seleccionar</option>
      <?php
      require '../../backend/exhabi.php'; 
      while($tic=mysqli_fetch_array($chab))
      {
       ?>
      <option value="<?php echo $tic['id'] ?>"><?php echo $tic['id'] ?></option>
    <?php } ?>
    </select>
  </div>

  <div class="col-md-3">
    <label for="cli" class="form-label text-center">Cliente</label>
    <input type="text" class="form-control" id="cli" name="cli" placeholder="Cedula del cliente" maxlength="8" required>
  </div>
  <div class="col-md-3">
    <label for="fecf" class="form-label text-center">Fecha de inicio</label>
    <input type="date" class="form-control" id="feci" name="feci"  required>
  </div>
  <div class="col-md-3">
    <label for="fecf" class="form-label text-center">Fecha de fin</label>
    <input type="date" class="form-control" id="fecf" name="fecf" required>
  </div>


  <div class="col-12 pt-4" align="center">
    <button type="submit" class="btn-lg btn-dark col-7" id="enviar" name="enviar">Reservar <i class="fas fa-user-edit"></i></button>
  </div>
</form>
</div>
<script src="../js/bootstrap.js" type="text/javascript" charset="utf-8" async defer></script>
<script src="../js/eje.js" type="module"></script>
<script type="text/javascript" src="../js/all.js"></script>

</body>
</html>




  