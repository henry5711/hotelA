<?php
  
   include '../PHPExcel-1.8/Classes/PHPExcel/IOFactory.php';
	include 'conexion.php';
	
    
	if (substr($_FILES['excel']['name'],-3))
	{
		$fecha		= date("Y-m-d");
		$carpeta 	= "../excel/";
		$excel  	= $fecha."-".$_FILES['excel']['name'];
		
		$destino= "$carpeta"."$excel";
	


		move_uploaded_file($_FILES['excel']['tmp_name'], $destino);
		
		
          $objPHPExcel =PHPExcel_IOFactory::load($destino);
          //Asigno la hoja de calculo activa
	      $objPHPExcel->setActiveSheetIndex(0);
	//Obtengo el numero de filas del archivo
	  $numRows = $objPHPExcel->setActiveSheetIndex(0)->getHighestRow();
			for ($i = 2; $i <= $numRows; $i++) {
		
		$cod = $objPHPExcel->getActiveSheet()->getCell('A'.$i)->getCalculatedValue();
		$tha = $objPHPExcel->getActiveSheet()->getCell('B'.$i)->getCalculatedValue();
		$pre = $objPHPExcel->getActiveSheet()->getCell('C'.$i)->getCalculatedValue();
		$des = $objPHPExcel->getActiveSheet()->getCell('D'.$i)->getCalculatedValue();
		
		
		$sql = "INSERT INTO `habitacion` (`id`, `fky_tih`, `pre_hab`, `des_hab`, `sta_hab`) VALUES ('$cod', '$tha', '$pre', '$des', 'A');";
		$c=mysqli_query($cone,$sql);
		
       
		
	}
					
         
		 if ($c) {
         	echo "<script>alert('La importacion de archivo subio satisfactoriamente')</script >";
         	  echo "<script>location.href='../fronentd/admin/migracion.php'</script>";
         } 
		
		   
		  
		  
		  
		
	
}


	
	
?>