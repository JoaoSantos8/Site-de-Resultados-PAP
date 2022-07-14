<?php

include_once ("includes/body.inc.php");
global $con;
$id=intval($_GET['id']);
drawTop(GALERIA);
$sql="select * from galeria where galeriaId=$id";
$result=mysqli_query($con,$sql);
$dados=mysqli_fetch_array($result);
?>
<div class="container w-100">
    <h1>Edita Foto</h1>
    <form action="confirmaEditaFoto.php" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label class="form-label">Data de Nascimento</label>
            <input type="date" class="form-control" name="dFoto" value="<?php echo $dados['galeriaData'] ?>">
        </div>
        <div class="mb-3">
            <img src="../<?php echo $dados['galeriaFotoURL'] ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Foto</label>
            <input type="file" class="form-control" name="fotoGaleria">
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