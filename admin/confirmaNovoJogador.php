<?php
include_once ("includes/body.inc.php");
global $con;
$nome=addslashes($_POST['nomeJogador']);


if($_FILES['fotoJogador']['name']==''){
    $urlImagem='images/semImagem.png';
}else{
    $urlImagem='images/jogadores/'.$_FILES['fotoJogador']['name'];
    copy($_FILES['fotoJogador']['tmp_name'],'../'.$urlImagem);
}
$idClube=intval($_POST['clubeId']);


$sql="Insert into jogadores values(0,'$nome','$urlImagem','$idClube')";
mysqli_query($con,$sql);
header("location:gerirPlantel.php?id=$idClube");
?>
