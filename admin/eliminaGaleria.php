<?php

include_once ("includes/body.inc.php");
global $con;
$id=intval($_GET['id']);
drawTop(JOGADORES);
$sql="select * from galeria where galeriaId=$id";
$result=mysqli_query($con,$sql);
$dados=mysqli_fetch_array($result);
?>
<div class="container w-100">
    <h1>Elimina Foto</h1>
    <form action="confirmaEliminaFoto.php" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <img src="../<?php echo $dados['galeriaFotoURL'] ?>">
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