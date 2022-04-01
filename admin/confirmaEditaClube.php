<?php
include_once ("includes/body.inc.php");
global $con;
$id=intval($_POST['id']);
$nome=addslashes($_POST['nomeClube']);

$sql="update clubes set clubeNome='$nome'";
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
