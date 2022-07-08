<?php
include_once ("config.inc.php");
$con=mysqli_connect(HOST,USER,PWD,DATABASE);

function idade($data){
    $timeStamp=strtotime($data);
    $ano=intval(date("Y",$timeStamp));
    $mes=date("m",$timeStamp);
    $dia=date("d",$timeStamp);
    $anoD=intval(date("Y"));
    $mesD=intval(date("m"));
    $diaD=intval(date("d"));
    return (($mes==$mesD && $dia <= $diaD)||($mes<$mesD)?$anoD-$ano:$anoD-$ano-1);
}


function drawTop($menu=HOME,$page=''){
    ?>
    <!doctype html>
    <html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <title>Site de Resultados</title>
        <script src="js/common.js"></script>
        <script>
            $('document').ready(function (){
            <?php
                if($page=='nj' || $page=='ej'){
                ?>
                $('#clubesCasa').change(function (){
                    fillClubs('clubesFora',this.value);
                    $('#clubesFora').prop('disabled',false);
                });
                <?php
                }
                if($page!='ej')
                    echo "fillClubs('clubesCasa',0);";
                ?>
            })

        </script>


    </head>
    <body>
    <div class="container w-100">
    <h1>Site de resultados</h1>
    <ul class="nav nav-pills nav-justified">
        <li class="nav-item">
            <a class="nav-link <?php echo ($menu==HOME?" active ":"");?>" href="index.php">Pagina principal</a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?php echo ($menu==CLUBES?" active ":"");?>" href="listaClubes.php">Lista de clubes</a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?php echo ($menu==JOGADORES?" active ":"");?>" href="listaJogadores.php">Lista jogadores</a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?php echo ($menu==JOGOS?" active ":"");?>" href="listaJogos.php">Lista jogos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?php echo ($menu==Noticias?" active ":"");?>" href="listaNoticias.php">Lista Noticias</a>
        </li>
    </ul>
    <div class="mt-5">

    </div>
    <?php
}
function drawBottom(){
    ?>
    </div> <!-- container principal -->
    </body>
    </html>
    <?php
}

?>