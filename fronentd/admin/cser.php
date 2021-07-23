<?php 

session_start();
 
  if (!$_GET) {
  header('location:cser.php?pagina=1');
}

 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Servicio</title>
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
        <td colspan="12" align="center" class="table-borderless bg-dark "><h4><b class="text-white">Consulta de servicio</b></h4></td>
      </tr>

      <tr id="elnegronolada" class="bg-light col-12">
        <td align="center" class="text-dark text-wrap  text-center"><b>Codigo</b></td>
        <td align="center" class="text-dark text-wrap  text-center"><b>Nombre</b></td>
        <td align="center" class="text-dark text-wrap  text-center"><b>Tipo de servicio</b></td>
        <td align="center" class="text-dark text-wrap  text-center"><b>Precio</b></td>
        
        <td align="center" class="text-dark text-wrap  text-center"><b>Cantidad</b></td>
        <td align="center" class="text-dark text-wrap  text-center"><b>Estado</b></td>

        <td align="center" class="text-dark text-wrap  text-center"><b>Editar</b></td>
        <td align="center" class="text-dark text-wrap  text-center"><b>Eliminar</b></td>

        </tr>


        <?php 
                include '../../backend/exser.php';
                include '../../backend/conexion.php';
           $sql="SELECT servicio.id,servicio.nom_se,servicio.fky_tse,servicio.pre_ser,servicio.can_ser,servicio.sta_ser,tipo_servicio.id,tipo_servicio.nom_tse FROM servicio,tipo_servicio WHERE tipo_servicio.id=servicio.fky_tse";
          $tus=mysqli_query($cone,$sql);
          $bxpagi=5;
          $cfi=mysqli_num_rows($tus);
          $paginas=$cfi/$bxpagi;
          $paginas=ceil($paginas);
          if ($_GET['pagina']>$paginas || $_GET['pagina']<=0 ) {
             header('location:cser.php?pagina=1');
          }
           $ini=($_GET['pagina']-1)*$bxpagi;
           $usu="SELECT servicio.id,servicio.nom_se,servicio.fky_tse,servicio.pre_ser,servicio.can_ser,servicio.sta_ser,tipo_servicio.id,tipo_servicio.nom_tse FROM servicio,tipo_servicio WHERE tipo_servicio.id=servicio.fky_tse LIMIT $ini,5";
            $cbli=mysqli_query($cone,$usu);

           while ($rusu=mysqli_fetch_array($cser)) {
              

           echo "

      <tr>
        <tr id='elnegronolada' class='bg-faded col-12'>
          <td align='center' class='text-dark'><b>$rusu[id]</b></td>
          <td align='center' class='text-dark'><b>$rusu[nom_se]</b></td>
          <td align='center' class='text-dark'><b>$rusu[nom_tse]</b></td>
          <td align='center' class='text-dark'><b>$rusu[pre_ser]</b></td>
          
          <td align='center' class='text-dark'><b>$rusu[can_ser]</b></td>
          <td align='center' class='text-dark'><b>$rusu[sta_ser]</b></td>

          
            
          <td align='center'><a href='editarusu.php?ced=".$rusu['id']."'><i class='fas fa-edit text-success'></a></i></td>
          <td align='center'><a href='../../backend/eliminarusu.php?ced=".$rusu['id']."'><i  class='fas fa-trash text-danger'></i></a></td>
           

         
        
       ";
      

  
  
} //end while
         ?>
  </table>
   <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
              <li class="page-item <?php echo $_GET['pagina']<=1? 'disabled' : ''  ?>">
              <a class="page-link" href="cser.php?pagina=<?php echo $_GET['pagina']-1 ?>" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
              </a>
            </li>
            <?php 
            for ($i=0; $i <$paginas ; $i++): 
            ?>
            <li class="page-item <?php echo $_GET['pagina']==$i+1? 'active' : ''  ?>"><a class="page-link" href="cser.php?pagina=<?php echo $i+1;  ?>"><?php echo $i+1;  ?></a></li>
            <?php endfor; ?>
            <li class="page-item <?php echo $_GET['pagina']>=$paginas? 'disabled' : ''  ?>">
      <a class="page-link" href="cser.php?pagina=<?php echo $_GET['pagina']+1 ?>"  aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
          </ul>
          </nav>
	
<script src="../js/bootstrap.js" type="text/javascript" charset="utf-8" async defer></script>
<script src="../js/eje.js" type="module"></script>
<script type="text/javascript" src="../js/all.js"></script>
</body>
</html>