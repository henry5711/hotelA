<?php 

session_start();
 
  

 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Servicios habitacion</title>
	<link rel="stylesheet" href="../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap-grid.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap-reboot.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap-utilities.css">
	<link rel="stylesheet" type="text/css" href="../css/estilocartas.css">
	<link rel="stylesheet" type="text/css" href="../css/do.css">
	<link rel="stylesheet" type="text/css" href="../css/all.css">
</head>
<body>
	<?php include 'navb.php';
  include 'menudesplegable.php'; ?>

  <table class="table table-bordered table-striped table-active"  style="margin-top: 70px;">
  	<tr><!--la del titulo-->
        <td colspan="12" align="center" class="table-borderless bg-dark "><h4><b class="text-white">Consulta de servicios habitacion <?php echo $_REQUEST["cod"]; ?></b></h4></td>
      </tr>

      <tr id="elnegronolada" class="bg-light col-12">
       
        <td align="center" class="text-dark text-wrap  text-center"><b>Servicio</b></td>
        
        <td align="center" class="text-dark text-wrap  text-center"><b>Precio</b></td>
         <td align="center" class="text-dark text-wrap  text-center"><b>Tipo de servicio</b></td>
       
        <td align="center" class="text-dark text-wrap  text-center"><b>Editar</b></td>
        <td align="center" class="text-dark text-wrap  text-center"><b>Eliminar</b></td>

        </tr>


        <?php 
                include '../../backend/conexion.php';
                $w=$_REQUEST['cod'];
           $sql="SELECT servicio.id,servicio.nom_se,servicio.fky_tse,servicio.pre_ser,tipo_servicio.id,tipo_servicio.nom_tse,ocupada.id,ocupada.fky_cli,ocupada.fky_hab,detalle_ocup.cod,detalle_ocup.id,detalle_ocup.fky_ser FROM servicio,tipo_servicio,ocupada,detalle_ocup WHERE ocupada.fky_hab=$w AND ocupada.sta_ocu='A'AND ocupada.id=detalle_ocup.id AND tipo_servicio.id=servicio.fky_tse AND servicio.id=detalle_ocup.fky_ser ";
          $tus=mysqli_query($cone,$sql);

           while ($rusu=mysqli_fetch_array($tus)) {
             
           echo "

      <tr>
        <tr id='elnegronolada' class='bg-faded col-12'>
         
          
          <td align='center' class='text-dark'><b>$rusu[nom_se]</b></td>
          
          <td align='center' class='text-dark'><b>$rusu[pre_ser]</b></td>
          <td align='center' class='text-dark'><b>$rusu[nom_tse]</b></td>
        
          <td align='center'><a href='editarusu.php?ced=".$rusu['cod']."'><i class='fas fa-edit text-success'></a></i></td>
          <td align='center'><a href='../../backend/eliminarusu.php?ced=".$rusu['cod']."'><i  class='fas fa-trash text-danger'></i></a></td>
           

         
        
       ";
      
} //end while
         ?>
  </table>


  <br><br><br>
  <div class="btotal"><h3>Total= <?php  include '../../backend/conexion.php';
  $w=$_REQUEST['cod'];
  $sql="SELECT SUM(servicio.pre_ser) FROM servicio,tipo_servicio,ocupada,detalle_ocup WHERE ocupada.fky_hab=$w AND ocupada.sta_ocu='A'AND ocupada.id=detalle_ocup.id AND tipo_servicio.id=servicio.fky_tse AND servicio.id=detalle_ocup.fky_ser";
  $c=mysqli_query($cone,$sql);
    while($d=mysqli_fetch_array($c))
    {
      echo $d[0];
    } ?></h3></div>

     <a href="agghser.php?cod=<?php echo $_REQUEST["cod"]; ?>">
    <button class="panel-btn2" type="button">
        <span>
            <i class="fas fa-plus-circle text-light fa-lg"></i>
        </span>
      </button></a>
	
<script src="../js/bootstrap.js" type="text/javascript" charset="utf-8" async defer></script>
<script src="../js/eje.js" type="module"></script>
<script type="text/javascript" src="../js/all.js"></script>
</body>
</html>