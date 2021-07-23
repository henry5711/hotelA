<?php 
include 'conexion.php';

$ser=$_POST['fky_ser'];
$cod=$_REQUEST['cod'];
$sqo="SELECT ocupada.id FROM ocupada WHERE ocupada.fky_hab=$cod and ocupada.sta_ocu='A'";
$id=mysqli_query($cone,$sqo);
$sqs="SELECT servicio.can_ser FROM `servicio` WHERE id='$ser';";
$ise=mysqli_query($cone,$sqs);
while($d=mysqli_fetch_array($id) and $se=mysqli_fetch_array($ise))
{
   $h=$d['id'];
   $se=$se['can_ser'];
   $se=intval($se);
   $se=$se-1;
   $up="UPDATE `servicio` SET `can_ser` = '$se' WHERE `servicio`.`id` = '$ser';";
   $sql="INSERT INTO `detalle_ocup` (`cod`, `id`, `fky_ser`) VALUES (NULL, '$h', '$ser');";
   $aggr=mysqli_query($cone,$sql);
   $ups=mysqli_query($cone,$up);


if ($aggr && $ups) {
   echo "<script>location.href='../fronentd/admin/chser.php?cod=$cod';</script>";
}

else
{
    echo "<script>
    alert('No se registro el servicio a la habitacion');
    location.href='../fronentd/admin/agghser.php?cod=$cod';</script>";
}

}






 ?>