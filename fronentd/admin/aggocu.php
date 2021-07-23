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


  <form class="row g-3" action="../../backend/aggocup.php?cod=<?php echo $_REQUEST["cod"]; ?>" method="POST">
  <h2 class="text-center" >Habitacion <?php echo $_REQUEST["cod"]; ?></h2>
    <!--primera fila-->
  <div class="col-md-8" style="margin-left: 200px;">
    <label for="ced" class="form-label text-center" style="margin-left: 350px;">Cliente</label>
    <input type="text" class="form-control" id="ced" name="ced" placeholder="Cedula de identidad" maxlength="9" required>
  </div>
 
  
  

  

  <div class="col-12 pt-4" align="center">
    <button type="submit" class="btn-lg btn-dark col-7" id="enviar" name="enviar">Guardar <i class="fas fa-save"></i></button>
  </div>
</form>
</div>
<script src="../js/bootstrap.js" type="text/javascript" charset="utf-8" async defer></script>
<script src="../js/eje.js" type="module"></script>
<script type="text/javascript" src="../js/all.js"></script>

</body>
</html>




  