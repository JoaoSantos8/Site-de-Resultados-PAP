<?php
include_once ("includes/body.inc.php");
global $con;

$clubeCasaId=intval($_POST['clubeCasaId']);
$clubeForaId=intval($_POST['clubeForaId']);
$data=addslashes($_POST['dataJogo']);
$hora=addslashes($_POST['horaJogo']);
$Ccasa=addslashes($_POST['cCasa']);
$Cfora=addslashes($_POST['cFora']);
$jornada=addslashes($_POST['jornadaJogo']);
$sql="Insert into jogos values(0,'$clubeCasaId','$clubeForaId','$data','$hora','$jornada')";
mysqli_query($con,$sql);
$idJogo=mysqli_insert_id($con);
$sql="Insert into resultados values('$idJogo','$Ccasa','$Cfora');";
mysqli_query($con,$sql);
header("location:listaJogos.php");

?>
