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
        <td colspan="12" align="center" class="table-borderless bg-dark "><h4><b class="text-white">Consulta de pagos</b></h4></td>
      </tr>

      <tr id="elnegronolada" class="bg-light col-12">
       
        <td align="center" class="text-dark text-wrap  text-center"><b>Ocupacion</b></td>
        
        <td align="center" class="text-dark text-wrap  text-center"><b>Cliente</b></td>
         <td align="center" class="text-dark text-wrap  text-center"><b>Habitacionn</b></td>
       
        <td align="center" class="text-dark text-wrap  text-center"><b>Total</b></td>
     

        </tr>


        <?php 
                include '../../backend/conexion.php';
                
           $sql="SELECT * FROM `chucuta`";
          $tus=mysqli_query($cone,$sql);
           while ($rusu=mysqli_fetch_array($tus)) {
             $sqoc="SELECT * FROM `ocupada` WHERE id='$rusu[ocupacion]'";
             $cp=mysqli_query($cone,$sqoc);
              while ($rocu=mysqli_fetch_array($cp)) {
           echo "

      <tr>
        <tr id='elnegronolada' class='bg-faded col-12'>
         
          
          <td align='center' class='text-dark'><b>$rusu[ocupacion]</b></td>
          
          <td align='center' class='text-dark'><b>$rocu[fky_cli]</b></td>
          <td align='center' class='text-dark'><b>$rocu[fky_hab]</b></td>
          <td align='center' class='text-dark'><b>$rusu[total]</b></td>
    
           

         
        
       ";
      }
} //end while
         ?>
  </table>


  <br><br><br>


   
	
<script src="../js/bootstrap.js" type="text/javascript" charset="utf-8" async defer></script>
<script src="../js/eje.js" type="module"></script>
<script type="text/javascript" src="../js/all.js"></script>
</body>
</html>