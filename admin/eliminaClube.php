<?php

include_once ("includes/body.inc.php");
global $con;
$id=intval($_GET['id']);
drawTop(CLUBES);
$sql="select * from clubes where clubeId=$id";
$result=mysqli_query($con,$sql);
$dados=mysqli_fetch_array($result);
?>
<div class="container w-100">
    <h1>Elimina Clube</h1>
    <form action="confirmaEliminaClube.php" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="nomeJogador" class="form-label">Nome</label>
            <input readonly type="text" class="form-control" id="nomeJogador" name="nomeClube" value="<?php echo $dados['clubeNome'] ?>">
        </div>
        <div class="mb-3">
            <img width="60" src="../<?php echo $dados['clubeLogoURL'] ?>">
        </div>
        <div class="mb-3">
            <input type="submit" class="btn-sm btn-danger" value="Confirma">
            <button onclick="history.back();" type="button" class="btn-sm btn-secondary"> Voltar </button>

        </div>
        <input type="hidden" name="id" value="<?php echo $id?>">
    </form>
</div>
<?php
drawBottom();
?>