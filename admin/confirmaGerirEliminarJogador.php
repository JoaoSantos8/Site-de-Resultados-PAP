<?php
include_once ("includes/body.inc.php");
global $con;
$id=intval($_POST['id']);
$sql="delete from jogadores inner join jogadorclubes on jogadorId=jogadorClubeJogadorId where jogadorId=$id";
mysqli_query($con,$sql);
header("location:listaJogadores.php");
?>