<?php

include_once ("includes/body.inc.php");
global $con;
$id=intval($_GET['id']);
drawTop(JOGADORES);
$sql="select * from jogadores where jogadorId=$id";
$result=mysqli_query($con,$sql);
$dados=mysqli_fetch_array($result);
?>
<div class="container w-100">
    <h1>Edita Jogador</h1>
    <form action="confirmaEliminaJogador.php" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="nomeJogador" class="form-label">Nome</label>
            <input readonly type="text" class="form-control" id="nomeJogador" name="nomeJogador" value="<?php echo $dados['jogadorNome'] ?>">
        </div>
        <div class="mb-3">
            <img src="../<?php echo $dados['jogadorFotoURL'] ?>">
        </div>
        <div class="mb-3">
            <input type="submit" class="btn-sm btn-danger" value="Confirma">
            <a href="listaJogadores.php" ><button class="btn-sm btn-secondary">Voltar</button> </a>

        </div>
        <input type="hidden" name="id" value="<?php echo $id?>">
    </form>
</div>
<?php
drawBottom();
?>