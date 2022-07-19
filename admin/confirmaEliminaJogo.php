<?php
include_once ("includes/body.inc.php");
global $con;
$id=intval($_POST['id']);
$sql="delete from jogos where jogoId=$id";
$sql="delete from resultados where resultadoJogoId=$id";
$sql="delete from pontos where pontosJogoId=$id";
mysqli_query($con,$sql);
header("location:listaJogos.php");
?>
