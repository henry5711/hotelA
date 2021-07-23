<?php

session_start();

 


if ($_SESSION['cedula']!=null) {
  




?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Agregar bienes</title>
	
  <link rel="stylesheet" href="../../css/all.css">
  
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="../css/bootstrap-grid.css">
  <link rel="stylesheet" type="text/css" href="../css/bootstrap-reboot.css">
  <link rel="stylesheet" type="text/css" href="../css/bootstrap-utilities.css">
  <link rel="stylesheet" type="text/css" href="../css/formularios.css">
  <link rel="stylesheet" type="text/css" href="../css/consultas.css">
  <link rel="stylesheet" type="text/css" href="../css/logos.css">

 <script type="text/javascript">
  $('.custom-file-input').on('change', function(event) {
    let inputFile = event.currentTarget;
    $(inputFile).parent()
        .find('.custom-file-label')
        .html(inputFile.files[0].name);
}); </script>

</head>
<body>
	<?php include 'naprue.php'; ?>



<!--donde va toda la info o central de la pagina      -->
<section class="separador" >
  <table class="table table-borderless table-striped table-active">
    
      
    
      <tr>
        <td colspan="12" align="center" class="table-borderless n "><h4><b class="text-white">Migracion</b></h4></td>
      </tr>
    </table>
	<div class="container formula">
		
	<?php echo "<form method='POST' action='../../backend/migracion.php?ced=$_SESSION[cedula]' class='was-validated' novalidate  enctype='multipart/form-data'>";  ?>
	
  <div class="input-group mb-3">
  <div class="custom-file">
    <input type="file" class="custom-file-input" id="inputGroupFile02" name="excel" id="excel">
    <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Archivo</label>
  </div>
  <div class="input-group-append">
  <button type="submit" id="enviar" name="enviar" class="btn btn-primary">Subir</button>
  </div>
</div>
 <script>
            $('#inputGroupFile02').on('change',function(){
                //get the file name
                let fileName = $(this).val();
                //replace the "Choose a file" label
                $(this).next('.custom-file-label').html(fileName);
            })
        </script>
    

    	
 
  


</form>
</div>
</section>



<script src="../js/bootstrap.js" type="text/javascript" charset="utf-8" async defer></script>
  <script src="../js/all.js" type="text/javascript" charset="utf-8" async defer></script>
</body>
</html>

<?php 

}


else
{
  echo "holis";
}



?>