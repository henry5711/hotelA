<?php 

session_start();

 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Agregar usuarios</title>
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

  <form class="row g-3" action="../../backend/aggusu.php" method="POST">

    <!--primera fila-->
  <div class="col-md-3">
    <label for="nom1" class="form-label text-center">Primer nombre</label>
    <input type="text" class="form-control" id="nom1"  name="nom1" placeholder="Primer nombre" maxlength="30" required>
  </div>
  <div class="col-md-3">
    <label for="nom2" class="form-label text-center">Segundo nombre</label>
    <input type="text" class="form-control" id="nom2"  name="nom2" placeholder="Segundo nombre" maxlength="30" required>
  </div>
  <div class="col-md-3">
    <label for="ape1" class="form-label text-center">Primer apellido</label>
    <input type="text" class="form-control" id="ape1"  name="ape1" placeholder="Primer apellido" maxlength="30" required>
  </div>
  <div class="col-md-3">
    <label for="ape2" class="form-label text-center">Segundo apellido</label>
    <input type="text" class="form-control" id="ape2"  name="ape2" placeholder="Segundo apellido" maxlength="30" required>
  </div>

  <!--segunda fila-->
  <div class="col-md-3">
    <label for="ced" class="form-label text-center">Cedula</label>
    <input type="text" class="form-control" id="ced"  name="ced" placeholder="Cedula" maxlength="8" required>
  </div>
  <div class="col-md-3">
    <label for="correo" class="form-label">Email</label>
    <input type="email" class="form-control" id="correo"  name="correo" placeholder="example@gmail.com" maxlength="50">
  </div>
  <div class="col-md-3">
    <label for="tel1" class="form-label">Telefono movil</label>
    <input type="text" class="form-control" id="tel1"  name="tel1" placeholder="00000000000" maxlength="11" required>
  </div>
  <div class="col-md-3">
    <label for="tel2" class="form-label">Telefono fijo</label>
    <input type="text" class="form-control" id="tel2"  name="tel2" placeholder="00000000000" maxlength="11">
  </div>

  <!--tercera fila-->
  <div class="col-md-4">
    <label for="fky_tiu" class="form-label">Tipo de usuario</label>
    <select id="fky_tiu"  name="fky_tiu" class="form-select" required>
      <?php
      require '../../backend/extipousuario.php'; 
      while($tiu=mysqli_fetch_array($tus))
      {
       ?>
      <option value="<?php echo $tiu['cod_tiu'] ?>"><?php echo $tiu['nom_tiu'] ?></option>
    <?php } ?>
    </select>
  </div>

  <div class="col-md-4">
    <label for="usu" class="form-label">Nombre de usuario</label>
    <input type="text" class="form-control" id="usu"  name="usu" placeholder="usuarioejemplo" maxlength="30" required>
  </div>

  <div class="col-md-4">
    <label for="pass" class="form-label">Contraseña</label>
    <input type="password" class="form-control" id="pass"  name="pass" placeholder="********" maxlength="30" required>
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




  