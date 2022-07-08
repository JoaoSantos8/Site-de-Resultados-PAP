<?php

include_once ("includes/body.inc.php");
global $con;
drawTop(Noticias);
?>
<div class="container w-100">
    <h1>Nova Noticia</h1>
    <form action="confirmaNovaNoticia.php" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="tituloNoticia" class="form-label">Titulo da Noticia</label>
            <input type="text" class="form-control" id="tituloNoticia" name="tituloNoticia">
        </div>
        <div class="mb-3">
            <label class="form-label">Data da Noticia</label>
            <input type="date" class="form-control" name="dataNoticia">
        </div>
        <div class="mb-3">
            <label class="form-label">Foto</label>
            <input type="file" class="form-control" name="fotoNoticia">
        </div>
        <div class="mb-3">
            <label class="form-label">Descrição da Noticia</label>
            <textarea class="form-control" id="descricaoNoticia" name="descricaoNoticia"></textarea>
        </div>
        <div class="mb-3">
            <input type="submit" class="btn-sm btn-primary" value="Confirma">
        </div>
    </form>
</div>
<?php
drawBottom();
?>