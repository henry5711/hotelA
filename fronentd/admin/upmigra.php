<?php 

session_start();

 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Agregar habitaciones</title>
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


  <form class="row g-3" action="../../backend/migracion.php" method="POST" enctype="multipart/form-data">
  
  <div class="input-group mb-3">
  <input type="file" class="form-control" id="inputGroupFile02" name="excel">
  <label class="input-group-text" for="inputGroupFile02">Upload</label>
  <div class="input-group-append">
  <button type="submit" id="enviar" name="enviar" class="btn btn-primary">Subir</button>
  </div>
</div>
</form>
</div>
<script src="../js/bootstrap.js" type="text/javascript" charset="utf-8" async defer></script>
<script src="../js/eje.js" type="module"></script>
<script type="text/javascript" src="../js/all.js"></script>

</body>
</html>




  