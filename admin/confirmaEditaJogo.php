<?php
include_once ("includes/body.inc.php");
global $con;
$id=intval($_POST['id']);
$nomeCasa=addslashes($_POST['clubeVisitado']);
$nomeFora=addslashes($_POST['clubeVisitante']);
$Data=addslashes($_POST['Data']);
$Hora=addslashes($_POST['Hora']);

if($_FILES['fotoVisitado']['name']==''){
    ;
}else{
    $urlImagem='images/ClubesNovo/'.$_FILES['fotoVisitado']['name'];
    copy($_FILES['fotoVisitado']['tmp_name'],'../'.$urlImagem);
    $sql.=", jogoClubeCasaFotoURL='$urlImagem'";
}
if($_FILES['fotoVisitante']['name']==''){
    ;
}else{
    $urlImagemm='images/ClubesNovo/'.$_FILES['fotoVisitante']['name'];
    copy($_FILES['fotoVisitante']['tmp_name'],'../'.$urlImagemm);
    $sql.=", jogoClubeForaFotoURL='$urlImagemm'";
}

$sql="update jogos set values(0,'$nomeCasa','$nomeFora','$Data','$Hora','$urlImagem','$urlImagemm')";

$sql.=" where jogoId=$id";
mysqli_query($con,$sql);
header("location:listaJogos.php");
?>
