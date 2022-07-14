<?php
include_once ("includes/body.inc.php");
global $con;
$id=intval($_POST['id']);
$data=addslashes($_POST['dFoto']);

$sql="update galeria set galeriaData='$data' ";
if($_FILES['fotoGaleria']['name']==''){
    ;
}else{
    $urlImagem='images/galeria/'.$_FILES['fotoGaleria']['name'];
    copy($_FILES['fotoGaleria']['tmp_name'],'../'.$urlImagem);
    $sql.=", galeriaFotoURL='$urlImagem'";
}




$sql.=" where galeriaId=$id";
mysqli_query($con,$sql);
header("location:listaGaleria.php");
?>
