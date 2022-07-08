<?php
include_once ("includes/body.inc.php");
global $con;
$id=intval($_POST['id']);
$titulo=addslashes($_POST['tituloNoticia']);
$data=addslashes($_POST['dataNoticia']);
$descricao=addslashes($_POST['descricaoNoticia']);
$sql="update noticias set noticiaTitulo='$titulo', noticiaData='$data' ";
if($_FILES['fotoNoticia']['name']==''){
    ;
}else{
    $urlImagem='images/jogadores/'.$_FILES['fotoNoticia']['name'];
    copy($_FILES['fotoNoticia']['tmp_name'],'../'.$urlImagem);
    $sql.=", noticiaFotoURL='$urlImagem'";
}
$sql.=", noticiaDescricao='$descricao'";
$sql.=" where noticiaId=$id";
mysqli_query($con,$sql);
header("location:listaNoticias.php");
?>
