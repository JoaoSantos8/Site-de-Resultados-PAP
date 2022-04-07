<?php
include_once ("includes/body.inc.php");
global $con;

$clubeCasaId=intval($_POST['clubeCasaId']);
$clubeForaId=intval($_POST['clubeForaId']);
$data=addslashes($_POST['dataJogo']);
$hora=addslashes($_POST['horaJogo']);
$sql="Insert into jogos values(0,'$clubeCasaId','$clubeForaId','$data','$hora')";
mysqli_query($con,$sql);
header("location:listaJogos.php");

?>
