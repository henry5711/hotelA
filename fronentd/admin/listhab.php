<?php 

session_start();
 
  if (!$_GET) {
  header('location:listhab.php?pagina=1');
}

 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Habitaciones</title>
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
        <td colspan="12" align="center" class="table-borderless bg-dark "><h4><b class="text-white">Consulta de habitaciones</b></h4></td>
      </tr>

      <tr id="elnegronolada" class="bg-light col-12">
        <td align="center" class="text-dark text-wrap  text-center"><b>Numero</b></td>
        <td align="center" class="text-dark text-wrap  text-center"><b>Tipo de habitacion</b></td>
        <td align="center" class="text-dark text-wrap  text-center"><b>Precio</b></td>
        <td align="center" class="text-dark text-wrap  text-center"><b>Descripcion</b></td>
        <td align="center" class="text-dark text-wrap  text-center"><b>Estado</b></td>
        <td align="center" class="text-dark text-wrap  text-center"><b>Opciones</b></td>
        <td align="center" class="text-dark text-wrap  text-center"><b>Editar</b></td>
        <td align="center" class="text-dark text-wrap  text-center"><b>Eliminar</b></td>

        </tr>


        <?php 
                include '../../backend/exhabti.php';
                include '../../backend/conexion.php';
           $sql="SELECT * FROM habitacion;";
          $tus=mysqli_query($cone,$sql);
          $bxpagi=5;
          $cfi=mysqli_num_rows($tus);
          $paginas=$cfi/$bxpagi;
          $paginas=ceil($paginas);
          if ($_GET['pagina']>$paginas || $_GET['pagina']<=0 ) {
             header('location:listhab.php?pagina=1');
          }
           $ini=($_GET['pagina']-1)*$bxpagi;
           $ehab="SELECT habitacion.id,habitacion.fky_tih,habitacion.pre_hab,habitacion.des_hab,habitacion.sta_hab,tipo_hab.cod_tih,tipo_hab.nom_tih FROM habitacion,tipo_hab WHERE tipo_hab.cod_tih=habitacion.fky_tih LIMIT $ini,5";
            $cbli=mysqli_query($cone,$ehab);

           while ($rhab=mysqli_fetch_array($cbli)) {
              if ($rhab['sta_hab']=="D")
              {

              }
              else
              {

           echo "

      <tr>
        <tr id='elnegronolada' class='bg-faded col-12'>
          <td align='center' class='text-dark'><b>$rhab[id]</b></td>
          <td align='center' class='text-dark'><b>$rhab[nom_tih]</b></td>
          <td align='center' class='text-dark'><b>$rhab[pre_hab]</b></td>
          <td align='center' class='text-dark'><b>$rhab[des_hab]</b></td>
       ";

                  if ($rhab['sta_hab']=="A") {
                    echo " <td align='center' class='text-success'><b>Disponible</b></td>
                    <td align='center' class='text-success'><b><a href='opcdisp.php?cod=$rhab[id]'>logo</a></b></td>";
                  }

                  elseif ($rhab['sta_hab']=="O") {
                    echo " <td align='center' class='text-warning'><b>Ocupada</b></td>
                     <td align='center' class='text-success'><b><a href='opcocup.php?cod=$rhab[id]'>logo</a></b></td>";
                  }

                  elseif ($rhab['sta_hab']=="M") {
                    echo " <td align='center' class='text-info'><b>Mantenimiento</b></td>
                     <td align='center' class='text-success'><b><a href='opcman.php?cod=$rhab[id]'>logo</a></b></td>";
                  }

                  elseif ($rhab['sta_hab']=="I") {
                    echo " <td align='center' class='text-danger'><b>Clausurada</b></td>
                     <td align='center' class='text-success'><b><a href='opccla.php?cod=$rhab[id]'>logo</a></b></td>";
                  }

       echo " <td align='center'><a href='editarusu.php?ced=".$rhab['id']."'><i class='fas fa-edit text-success'></a></i></td>
          <td align='center'><a href='../../backend/eliminarusu.php?ced=".$rhab['id']."'><i  class='fas fa-trash text-danger'></i></a></td>
        </tr>
             ";
      

  
  }//end else
} //end while
         ?>
  </table>
   <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
              <li class="page-item <?php echo $_GET['pagina']<=1? 'disabled' : ''  ?>">
              <a class="page-link" href="listhab.php?pagina=<?php echo $_GET['pagina']-1 ?>" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
              </a>
            </li>
            <?php 
            for ($i=0; $i <$paginas ; $i++): 
            ?>
            <li class="page-item <?php echo $_GET['pagina']==$i+1? 'active' : ''  ?>"><a class="page-link" href="listhab.php?pagina=<?php echo $i+1;  ?>"><?php echo $i+1;  ?></a></li>
            <?php endfor; ?>
            <li class="page-item <?php echo $_GET['pagina']>=$paginas? 'disabled' : ''  ?>">
      <a class="page-link" href="listhab.php?pagina=<?php echo $_GET['pagina']+1 ?>"  aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
          </ul>
          </nav>

          <a href="verhab.php">
    <button class="panel-btn2" type="button">
        <span>
            <i class="fas fa-eye text-light fa-lg"></i>
        </span>
      </button></a>
	
<script src="../js/bootstrap.js" type="text/javascript" charset="utf-8" async defer></script>
<script src="../js/eje.js" type="module"></script>
<script type="text/javascript" src="../js/all.js"></script>
</body>
</html>