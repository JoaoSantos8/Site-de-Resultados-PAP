<?php
include_once ("includes/body.inc.php");
global $con;
$titulo=addslashes($_POST['tituloNoticia']);
$data=addslashes($_POST['dataNoticia']);


if($_FILES['fotoNoticia']['name']==''){
    $urlImagem='images/semImagem.png';
}else{
    $urlImagem='images/jogadores/'.$_FILES['fotoNoticia']['name'];
    copy($_FILES['fotoNoticia']['tmp_name'],'../'.$urlImagem);
}

$descricao=addslashes($_POST['descricaoNoticia']);


$sql="Insert into noticias values(0,'$titulo','$data','$urlImagem','$descricao')";
mysqli_query($con,$sql);
header("location:listaNoticias.php");
?>
