<?php
include_once ("includes/body.inc.php");
global $con;
$id=intval($_POST['jogadorId']);
$idc=intval($_POST['clubeId']);

$sql="delete from jogadorClubes where jogadorClubeJogadorId=$id";


mysqli_query($con,$sql);
//die($sql);
header("location:gerirPlantel.php?id=$idc");
?>