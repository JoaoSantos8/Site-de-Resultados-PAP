<?php
include_once ("includes/body.inc.php");
global $con;
$id=intval($_POST['id']);
$sql="delete from noticias where noticiaId=$id";
mysqli_query($con,$sql);
header("location:listaNoticias.php");
?>
