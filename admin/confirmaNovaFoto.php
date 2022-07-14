<?php
include_once ("includes/body.inc.php");
global $con;
$nome=addslashes($_POST['nomeJogador']);
$data=addslashes($_POST['dFoto']);


if($_FILES['fotoGaleria']['name']==''){
    $urlImagem='images/semImagem.png';
}else{
    $urlImagem='images/galeria/'.$_FILES['fotoGaleria']['name'];
    copy($_FILES['fotoGaleria']['tmp_name'],'../'.$urlImagem);
}



$sql="Insert into galeria values(0,'$urlImagem','$data')";
mysqli_query($con,$sql);
header("location:listaGaleria.php");
?>
