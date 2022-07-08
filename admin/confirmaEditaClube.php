<?php
include_once ("includes/body.inc.php");
global $con;
$id=intval($_POST['id']);
$nome=addslashes($_POST['nomeClube']);
$ano=intval($_POST['anoClube']);
$estadio=addslashes($_POST['estadioClube']);
$fundadores=addslashes($_POST['fundadoresClube']);
$sql="update clubes set clubeNome='$nome', clubeAnoFundacao=$ano, 
clubeEstadio='$estadio', clubeFundadores='$fundadores' ";
if($_FILES['logoClube']['name']==''){
    ;
}else{
    $urlImagem='images/ClubesNovo/'.$_FILES['logoClube']['name'];
    copy($_FILES['logoClube']['tmp_name'],'../'.$urlImagem);
    $sql.=", clubeLogoURL='$urlImagem'";
}




$sql.=" where clubeId=$id";
mysqli_query($con,$sql);
header("location:listaClubes.php");
?>
