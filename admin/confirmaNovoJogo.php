<?php
include_once ("includes/body.inc.php");
global $con;
$nomeCasa=addslashes($_POST['clubeCasa']);
$nomeFora=addslashes($_POST['clubeFora']);
$Data=addslashes($_POST['Data']);
$Hora=addslashes($_POST['Hora']);

if($_FILES['fotoVisitado']['name']==''){
    $urlImagem='images/semImagem.png';
}else{
    $urlImagem='images/ClubesNovo/'.$_FILES['fotoVisitado']['name'];
    copy($_FILES['fotoVisitado']['tmp_name'],'../'.$urlImagem);
}
if($_FILES['fotoVisitante']['name']==''){
    $urlImagem='images/semImagem.png';
}else{
    $urlImagemm='images/ClubesNovo/'.$_FILES['fotoVisitante']['name'];
    copy($_FILES['fotoVisitante']['tmp_name'],'../'.$urlImagemm);
}


$sql="Insert into jogos values(0,'$nomeCasa','$nomeFora','$Data','$Hora','$urlImagem','$urlImagemm')";
mysqli_query($con,$sql);
header("location:listaJogos.php");
?>
