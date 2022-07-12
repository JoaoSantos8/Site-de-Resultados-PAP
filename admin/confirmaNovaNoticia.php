<?php
include_once ("includes/body.inc.php");
global $con;
$titulo=addslashes($_POST['tituloNoticia']);
$data=addslashes($_POST['dataNoticia']);
$descricao=addslashes($_POST['descricaoNoticia']);

if($_FILES['fotoNoticia']['name']==''){
    $urlImagem='images/semImagem.png';
}else{
    $urlImagem='images/noticias/'.$_FILES['fotoNoticia']['name'];
    copy($_FILES['fotoNoticia']['tmp_name'],'../'.$urlImagem);
}

$sql="Insert into noticias values(0,'$titulo','$data','$urlImagem','$descricao')";
mysqli_query($con,$sql);
header("location:listaNoticias.php");
?>
