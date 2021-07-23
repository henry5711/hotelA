<?php 

session_start();

 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Agregar servicios</title>
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

  <form class="row g-3" action="../../backend/aggser.php" method="POST">

    <!--primera fila-->
  <div class="col-md-6">
    <label for="id" class="form-label text-center">Codigo de servicio</label>
    <input type="text" class="form-control" id="id"  name="id" placeholder="Codigo de servicio" maxlength="8" required>
  </div>

  <div class="col-md-6">
    <label for="fky_tse" class="form-label">Tipo de servicio</label>
    <select id="fky_tse"  name="fky_tse" class="form-select" required>
      <?php
      require '../../backend/tiposer.php'; 
      while($tiu=mysqli_fetch_array($tse))
      {
       ?>
      <option value="<?php echo $tiu['id'] ?>"><?php echo $tiu['nom_tse'] ?></option>
    <?php } ?>
    </select>
  </div>

  <div class="col-md-6">
    <label for="nom" class="form-label text-center">Nombre del servicio</label>
    <input type="text" class="form-control" id="nom"  name="nom" placeholder="Nombre del servicio" maxlength="30" required>
  </div>
  <div class="col-md-6">
    <label for="pre" class="form-label text-center">Precio del servicio</label>
    <input type="number" class="form-control" id="pre"  name="pre" placeholder="precio" required>
  </div>

  <!--segunda fila-->
  <div class="col-md-6">
    <label for="can" class="form-label text-center" style="margin-top: 6px; margin-left: 500px;">Cantidad</label>
    <input type="number" class="form-control" id="can"  name="can" placeholder="Cantidad" required style=" margin-left: 300px;">
  </div>
 
  <div class="col-12 pt-4" align="center">
    <button type="submit" class="btn-lg btn-dark col-7" id="enviar"  name="enviar" >Registrar <i class="fas fa-user-edit"></i></button>
  </div>
</form>
</div>
<script src="../js/bootstrap.js" type="text/javascript" charset="utf-8" async defer></script>
<script src="../js/eje.js" type="module"></script>
<script type="text/javascript" src="../js/all.js"></script>

</body>
</html>




  