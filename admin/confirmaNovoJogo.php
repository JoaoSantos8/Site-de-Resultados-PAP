<?php
include_once ("includes/body.inc.php");
global $con;
$nomeCasa=addslashes($_POST['clubeCasa']);
$nomeFora=addslashes($_POST['clubeFora']);
$Data=addslashes($_POST['Data']);
$Hora=addslashes($_POST['Hora']);




$sql="Insert into jogos values(0,'$nomeCasa','$nomeFora','$Data','$Hora')";
mysqli_query($con,$sql);
header("location:listaJogos.php");
?>
