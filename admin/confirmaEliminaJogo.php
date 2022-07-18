<?php
include_once ("includes/body.inc.php");
global $con;
$id=intval($_POST['id']);
$sql="delete from jogos where JogoId=$id";
mysqli_query($con,$sql);
header("location:listaJogos.php");
?>
