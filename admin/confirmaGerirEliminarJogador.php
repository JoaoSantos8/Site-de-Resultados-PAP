<?php
include_once ("includes/body.inc.php");
global $con;
$id=intval($_POST['id']);
$sql="select jogadorClubeClubeId from jogadorClubes where jogadorClubeJogadorId=$id";
$sql="delete from jogadorClubes where jogadorClubeJogadorId=$id";


mysqli_query($con,$sql);
header("location:gerirPlantel.php?id=$idC");
?>