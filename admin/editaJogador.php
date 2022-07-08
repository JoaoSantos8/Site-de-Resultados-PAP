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
    <form action="confirmaEditaJogador.php" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="nomeJogador" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nomeJogador" name="nomeJogador" value="<?php echo $dados['jogadorNome'] ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Data de Nascimento</label>
            <input type="date" class="form-control" name="dnJogador" value="<?php echo $dados['jogadorDataNascimento'] ?>">
        </div>
        <div class="mb-3">
            <img src="../<?php echo $dados['jogadorFotoURL'] ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Foto</label>
            <input type="file" class="form-control" name="fotoJogador">
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