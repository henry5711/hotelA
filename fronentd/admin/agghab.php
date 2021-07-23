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

  <form class="row g-3" action="../../backend/agghab.php" method="POST">

    <!--primera fila-->
  <div class="col-md-3">
    <label for="id" class="form-label text-center">Numero de habitacion</label>
    <input type="number" class="form-control" id="id" name="id" placeholder="Numero" required>
  </div>

  <div class="col-md-3">
    <label for="fky_tih" class="form-label">Tipo de habitacion</label>
    <select id="fky_tih" name="fky_thi" class="form-select" required>
      <option>Seleccionar</option>
      <?php
      require '../../backend/extihab.php'; 
      while($tic=mysqli_fetch_array($chab))
      {
       ?>
      <option value="<?php echo $tic['cod_tih'] ?>"><?php echo $tic['nom_tih'] ?></option>
    <?php } ?>
    </select>
  </div>
  <div class="col-md-3">
    <label for="des" class="form-label text-center">Descripcion</label>
    <input type="text" class="form-control" id="des" name="des" placeholder="descripcion" maxlength="60">
  </div>
  <div class="col-md-3">
    <label for="pre" class="form-label text-center">Precio</label>
    <input type="number" class="form-control" id="precio" name="precio" placeholder="precio" required>
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




  