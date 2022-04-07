<?php

include_once ("includes/body.inc.php");
global $con;
$id=intval($_GET['id']);
drawTop(JOGOS);
$sql="select * from jogos where jogoId=$id";
$result=mysqli_query($con,$sql);
$dados=mysqli_fetch_array($result);
?>
<div class="container w-100">
    <h1>Edita Clube</h1>
    <form action="confirmaEditaJogo.php" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="clubeVisitado" class="form-label">Clube visitado</label>
            <input type="text" class="form-control" id="clubeVisitado" name="clubeVisitado" value="<?php echo $dados['jogoClubeCasa'] ?>">
            <div class="mb-3">
                <input type="file" class="form-control" name="fotoVisitante">
                <img width="60" src="../<?php echo $dados['jogoClubeCasaFotoURL'] ?>">
            </div>
        </div>

        <div class="mb-3">
            <label for="clubeVisitante" class="form-label">Clube visitante</label>
            <input type="text" class="form-control" id="clubeVisitante" name="clubeVisitante" value="<?php echo $dados['jogoClubeFora'] ?>">
        <div class="mb-3">
            <input type="file" class="form-control" name="fotoVisitado">
            <img width="60" src="../<?php echo $dados['jogoClubeForaFotoURL'] ?>">
        </div>
        </div>
        <div class="mb-3">
            <label for="Data" class="form-label">Data</label>
            <input type="text" class="form-control" id="Data" name="Data" value="<?php echo $dados['jogoData'] ?>">
        </div>
        <div class="mb-3">
            <label for="Hora" class="form-label">Hora</label>
            <input type="text" class="form-control" id="Hora" name="Hora" value="<?php echo $dados['jogoHora'] ?>">
        </div>
        <div class="mb-3">
            <input type="submit" class="btn-sm btn-primary" value="Confirma">
        </div>
        <input type="hidden" name="id" value="<?php echo $id?>">
    </form>
</div>
<?php
drawBottom();
?>