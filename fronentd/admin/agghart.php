<?php 

session_start();

 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Agregar servicio a la habitacion</title>
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
  <div class="container pt-lg-5" style="margin-top: 20px; margin-bottom:40px; ">
   <h2 class="text-center" >Habitacion <?php echo $_REQUEST["cod"]; ?></h2>
  <form class="row g-3" action="../../backend/agghart.php?cod=<?php echo $_REQUEST["cod"]; ?>" method="POST">

   

  <div class="col-md-8" style="margin-left: 200px;" >
    <label for="fky_art" class="form-label" style="margin-left: 290px;">Articulo</label>
    <select id="fky_art" name="fky_art" class="form-select" required>
      <option>Seleccionar</option>
      <?php
      require '../../backend/exart.php'; 
      while($tic=mysqli_fetch_array($x))
      {
       ?>
      <option value="<?php echo $tic['cod_art'] ?>"><?php echo $tic['cod_art'];echo " " ; echo $tic['nom_art'];  ?></option>
    <?php } ?>
    </select>
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




  