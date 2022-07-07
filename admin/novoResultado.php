<?php

include_once ("includes/body.inc.php");
global $con;
$idJogo=intval($_GET['id']);
drawTop(CLUBES);
$sql="select casa.clubeNome as cNome, fora.clubeNome as fNome  from clubes as casa inner join jogos on casa.clubeId=jogoCasaClubeId ";
$sql.=" inner join clubes as fora on fora.clubeId=jogoForaClubeId ";
$sql.=" where jogoId= $idJogo";
$result=mysqli_query($con,$sql);
$dados=mysqli_fetch_array($result);
?>
    <div class="container w-100">


        <h1>Jogo: </h1>
        <form action="confirmaNovoResultado.php" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col">
                    <label for="nomeCLube" class="form-label"><?php echo $dados['cNome']?></label>
                    <input type="text" class="form-control" id="nomeCLube" name="resultadoCasa">
                </div>
                <div class="col">
                    <label for="nomeCLube" class="form-label"><?php echo $dados['fNome']?></label>
                    <input type="text" class="form-control" id="nomeCLube" name="resultadoFora">
                </div>
            </div>




            <div class="mt-3">
                <input type="hidden" value="<?php echo $idJogo?>">
                <input type="submit" class="btn-sm btn-primary" value="Confirma">
            </div>
        </form>
    </div>
<?php
drawBottom();
?>