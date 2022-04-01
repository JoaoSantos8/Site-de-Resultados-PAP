<?php
include_once ("includes/body.inc.php");
global $con;
$id=intval($_POST['id']);
$nome=addslashes($_POST['nomeJogador']);

$sql="update jogadores set jogadorNome='$nome'";
if($_FILES['fotoJogador']['name']==''){
    ;
}else{
    $urlImagem='images/jogadores/'.$_FILES['fotoJogador']['name'];
    copy($_FILES['fotoJogador']['tmp_name'],'../'.$urlImagem);
    $sql.=", jogadorFotoURL='$urlImagem'";
}




$sql.=" where jogadorId=$id";
mysqli_query($con,$sql);
header("location:listaJogadores.php");
?>
