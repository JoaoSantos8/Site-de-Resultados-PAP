<?php

include_once ("includes/body.inc.php");
global $con;
$id=intval($_GET['id']);
drawTop(JOGOS,'ej');
$sql="select * from jogos where jogoId=$id";
$result=mysqli_query($con,$sql);
$dados=mysqli_fetch_array($result);
var_dump($dados);
?>
    <div class="container form ">

        <h1>Edita Jogo</h1>
        <form action="confirmaEditaJogo.php" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="data" class="form-label">Data</label>
                <input type="date" class="form-control" id="data" name="dataJogo" value="<?php echo $dados['jogoData']?>">
            </div>
            <div class="mb-3">
                <label for="data" class="form-label">Hora</label>
                <input type="time" class="form-control" id="hora" name="horaJogo" value="<?php echo $dados['jogoHora']?>">
            </div>
            <div class="mb-3">
                <label for="clube" class="form-label">Nome do clube - Casa</label>
                <select class="form-select" name="clubeCasaId" id="clubesCasa">
                    <?php
                    $sql="Select clubeId, clubeNome from clubes ";
                    $res=mysqli_query($con,$sql);
                    echo "<option selected=\"\">Escolha o clube...</option>";
                    while($dadosC=mysqli_fetch_array($res)){
                        echo "<option ";
                        if($dadosC['clubeId']==$dados['jogoCasaClubeId'])
                            echo " selected ";
                        echo " value=\"".$dadosC['clubeId']."\">".$dadosC['clubeNome']."</option>";
                    }

                    ?>

                </select>
            </div>
            <div class="mb-3">
                <label for="clube" class="form-label">Nome do clube - Fora</label>
                <select class="form-select" name="clubeForaId" id="clubesFora">
                    <?php
                    $sql="Select clubeId, clubeNome from clubes ";
                    $res=mysqli_query($con,$sql);
                    echo "<option selected=\"\">Escolha o clube...</option>";
                    while($dadosC=mysqli_fetch_array($res)){
                        echo "<option ";
                        if($dadosC['clubeId']==$dados['jogoForaClubeId'])
                            echo " selected ";
                        echo " value=\"".$dadosC['clubeId']."\">".$dadosC['clubeNome']."</option>";
                    }
                    ?>
                </select>
            </div>

            <div class="mb-3 text-end">
                <input type="hidden" name="idJogo" value="<?php echo $id?>">
                <input type="submit" class="btn-sm btn-primary" value="Confirma">
            </div>
        </form>





    </div>
<?php
drawBottom();
?>