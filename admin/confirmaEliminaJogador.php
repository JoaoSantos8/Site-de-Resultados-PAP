<?php
include_once ("includes/body.inc.php");
global $con;
$id=intval($_POST['id']);
$sql="delete from jogadores where jogadorId=$id";
mysqli_query($con,$sql);
header("location:listaJogadores.php");
?>
