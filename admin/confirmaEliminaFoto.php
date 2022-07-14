<?php
include_once ("includes/body.inc.php");
global $con;
$id=intval($_POST['id']);
$sql="delete from galeria where galeriaId=$id";
mysqli_query($con,$sql);
header("location:listaGaleria.php");
?>
