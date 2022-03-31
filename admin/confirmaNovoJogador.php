<?php
include_once ("includes/body.inc.php");
global $con;
$sql="Insert into jogadores values(0,'".$_POST['nomeJogador']."','".$_POST['tipoGenero']."')";
mysqli_query($con,$sql);
header("location:listaJogadores.php");
?>
