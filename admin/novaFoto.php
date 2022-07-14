<?php

include_once ("includes/body.inc.php");
global $con;
drawTop(GALERIA);
?>
<div class="container w-100">
    <h1>Nova Foto</h1>
    <form action="confirmaNovaFoto.php" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label class="form-label">Foto</label>
            <input type="file" class="form-control" name="fotoGaleria">
        </div>
       <div class="mb-3">
            <label class="form-label">Data da Foto</label>
            <input type="date" class="form-control" name="dFoto">
        </div>

        <div class="mb-3">
            <input type="submit" class="btn-sm btn-primary" value="Confirma">
        </div>
    </form>
</div>
<?php
drawBottom();
?>