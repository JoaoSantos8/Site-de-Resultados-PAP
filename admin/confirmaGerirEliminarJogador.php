<?php
include_once ("includes/body.inc.php");
global $con;
$cId=intval($_POST['cId']);
$jId=intval($_POST['jId']);

$sql="delete from jogadorClubes where jogadorClubeJogadorId=$jId and jogadorClubeClubeId=$cId";


mysqli_query($con,$sql);
header("location:gerirPlantel.php?id=$cId");
?>