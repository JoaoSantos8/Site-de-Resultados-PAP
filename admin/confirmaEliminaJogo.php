<?php
include_once ("includes/body.inc.php");
global $con;
$idJogo=intval($_POST['id']);
$sql="delete from jogos where jogoId=$idJogo";
mysqli_query($con,$sql);
$sql="delete from resultados where resultadoJogoId=$idJogo";
//mysqli_query($con,$sql);
//$sql="delete from pontos where pontosJogoId=$idJogo";
mysqli_query($con,$sql);
//die($sql);
header("location:listaJogos.php");
?>
