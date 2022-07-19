<?php
include_once ("includes/body.inc.php");
global $con;

$jogoId=intval($_POST['jogoId']);
$ClubeCasa=intval($_POST['casaId']);
$ClubeFora=intval($_POST['foraId']);
$GolosCasa=intval($_POST['resultadoCasa']);
$GolosFora=intval($_POST['resultadoFora']);

$sql="update resultados
set resultadoGolosCasa=$GolosCasa
, resultadoGolosFora=$GolosFora where resultadoJogoId=$jogoId";
mysqli_query($con,$sql);
if(mysqli_affected_rows($con)==0){
    $sql="insert into resultados values($jogoId,$GolosCasa,$GolosFora)";
    mysqli_query($con,$sql);
}else{
    if(mysqli_affected_rows($con)==1){
        $sql="delete from pontos where pontosJogoId=$jogoId";
        mysqli_query($con,$sql);
    }
}


if($GolosCasa > $GolosFora){
            $sql="insert into pontos values(0,$jogoId,$ClubeCasa,'V',3)";
            mysqli_query($con,$sql);
            $sql="insert into pontos values(0,$jogoId,$ClubeFora,'D',0)";
            mysqli_query($con,$sql);
}

if($GolosCasa < $GolosFora){
            $sql="insert into pontos values(0,$jogoId,$ClubeCasa,'D',0)";
            mysqli_query($con,$sql);
            $sql="insert into pontos values(0,$jogoId,$ClubeFora,'V',3)";
            mysqli_query($con,$sql);
}

if($GolosCasa == $GolosFora){
            $sql="insert into pontos values(0,$jogoId,$ClubeCasa,'E',1)";
            mysqli_query($con,$sql);
            $sql="insert into pontos values(0,$jogoId,$ClubeFora,'E',1)";
            mysqli_query($con,$sql);
}

header("location:listaJogos.php");
?>
