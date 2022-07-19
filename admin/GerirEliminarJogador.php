<?php

include_once ("includes/body.inc.php");
global $con;
$id=intval($_GET['id']);
drawTop(JOGADORES);
$sql="select * from jogadorClubes inner join jogadores on jogadorClubeJogadorId=jogadorId  inner join clubes on clubeId=jogadorClubeClubeId where jogadorClubeClubeId=ClubeId and jogadorClubeJogadorId=$id";
$result=mysqli_query($con,$sql);
$dados=mysqli_fetch_array($result);
?>
<div class="container w-100">
    <h1>Retirar jogador do clube</h1>
    <form action="confirmaGerirEliminarJogador.php" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="nomeJogador" class="form-label">Nome</label>
            <input readonly type="text" class="form-control" id="nomeJogador" name="nomeJogador" value="<?php echo $dados['jogadorNome'] ?>"></div>
            <div><input readonly type="text" class="form-control" id="nomeJogador" name="nomeJogador" value="<?php echo idade($dados['jogadorDataNascimento']);?>">
        </div><br>
        <div class="mb-3">
            <img src="../<?php echo $dados['jogadorFotoURL'] ?>">
        </div>
        <div class="mb-3">
            <input type="hidden" name="jogadorId" value="<?php echo $dados['jogadorClubeJogadorId'];?>">
            <input type="hidden" name="clubeId" value="<?php echo $dados['jogadorClubeClubeId'];?>">
            <input type="submit" class="btn-sm btn-danger" value="Retirar">
            <button onclick="history.back();" type="button" class="btn-sm btn-secondary"> Voltar </button>

        </div>

    </form>
</div>
<?php
drawBottom();
?>