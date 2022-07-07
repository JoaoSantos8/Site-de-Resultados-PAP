<?php
include_once ("includes/body.inc.php");
global $con;
$id=intval($_POST['idJogo']);
$casaId=intval($_POST['clubeCasaId']);
$foraId=addslashes($_POST['clubeForaId']);
$data=addslashes($_POST['dataJogo']);
$hora=addslashes($_POST['horaJogo']);

$sql="Update jogos set jogoData='$data', jogoHora='$hora', jogoCasaClubeId=$casaId, jogoForaClubeId=$foraId
 where jogoId=$id";
mysqli_query($con,$sql);
header("location:listaJogos.php");
?>
