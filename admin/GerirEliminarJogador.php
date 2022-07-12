<?php

include_once ("includes/body.inc.php");
global $con;
$cId=intval($_GET['cId']);
$jId=intval($_GET['jId']);
drawTop(JOGADORES);
$sql="select * from jogadores where jogadorId=$jId";
$result=mysqli_query($con,$sql);
$dados=mysqli_fetch_array($result);
?>
<div class="container w-100">
    <h1>Detalhes do Jogador</h1>
    <form action="confirmaGerirEliminarJogador.php" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="nomeJogador" class="form-label">Nome</label>
            <input readonly type="text" class="form-control" id="nomeJogador" name="nomeJogador" value="<?php echo $dados['jogadorNome'] ?>">
        </div>
        <div class="mb-3">
            <img src="../<?php echo $dados['jogadorFotoURL'] ?>">
        </div>
        <div class="mb-3">
            <input type="submit" class="btn-sm btn-danger" value="Confirma">
            <button onclick="history.back();" type="button" class="btn-sm btn-secondary"> Voltar </button>

        </div>
        <input type="hidden" name="cId" value="<?php echo $cId?>">
        <input type="hidden" name="jId" value="<?php echo $jId?>">
    </form>
</div>
<?php
drawBottom();
?>