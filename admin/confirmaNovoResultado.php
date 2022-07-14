<?php
include_once ("includes/body.inc.php");
global $con;

$jogoId=intval($_POST['jogoId']);
$ClubeCasa=intval($_POST['cId']);
$ClubeFora=intval($_POST['fId']);
$GolosCasa=intval($_POST['resultadoCasa']);
$GolosFora=intval($_POST['resultadoFora']);

$sql="update resultados
set resultadoGolosCasa=$GolosCasa
, resultadoGolosFora=$GolosFora inner join pontos where pontosJogoId=$jogoId and";

if($GolosCasa > $GolosFora){
            $sql.="set pontosResultado='V'
        , pontosValor=3
        where pontosJogoId=$jogoId and pontosClubeId=$ClubeCasa and 
        set pontosResultado='D'
        , pontosValor=0
        where pontosJogoId=$jogoId and pontosClubeId=$ClubeFora";
}
if($GolosCasa > $GolosFora){
    $sql.="set pontosResultado='V'
        , pontosValor=3
        where pontosJogoId=$jogoId and pontosClubeId=$ClubeFora and 
        set pontosResultado='D'
        , pontosValor=0
        where pontosJogoId=$jogoId and pontosClubeId=$ClubeCasa";
}
if($GolosCasa == $GolosFora){
    $sql.="set pontosResultado='E'
        , pontosValor=1
        where pontosJogoId=$jogoId";
}

/*set pontosResultado='V'
, pontosValor=3
where pontosJogoId=$jogoId and pontosClubeId=$ClubeCasa inner join pontos
set pontosResultado='D'
, pontosValor=0
where pontosJogoId=$jogoId and pontosClubeId=$ClubeFora";
mysqli_query($con,$sql);

/*
$sql="update resultados
set resultadoGolosCasa=10
, resultadoGolosFora=20";

mysqli_query($con,$sql);
/*
update pontos
set pontosResultado='V'
, pontosValor=3
where pontosJogoId=1 and pontosClubeId=1;
mysqli_query($con,$sql);



update pontos
set pontosResultado='D'
, pontosValor=0
where pontosJogoId=1 and pontosClubeId=10;

mysqli_query($con,$sql);
 */



header("location:listaClubes.php");
?>
