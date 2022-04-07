<?php
include_once ("includes/body.inc.php");
global $con;
$id=intval($_POST['id']);
$nomeCasa=addslashes($_POST['clubeVisitado']);
$nomeFora=addslashes($_POST['clubeVisitante']);
$Data=addslashes($_POST['Data']);
$Hora=addslashes($_POST['Hora']);

$sql="update jogos set jogoClubeCasa='$nomeCasa'";
$sql="update jogos set jogoClubeFora='$nomeFora'";
$sql="update jogos set jogoData='$Data'";
$sql="update jogos set jogoHora='$Hora'";


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

$sql="update jogos set jogoClubeCasaFotoURL='$urlImagem'";
$sql="update jogos set jogoClubeForaFotoURL='$urlImagemm'";

$sql.=" where jogoId=$id";
mysqli_query($con,$sql);
header("location:listaJogos.php");
?>
