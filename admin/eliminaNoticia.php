<?php

include_once ("includes/body.inc.php");
global $con;
$id=intval($_GET['id']);
drawTop(Noticias);
$sql="select * from noticias where noticiaId=$id";
$result=mysqli_query($con,$sql);
$dados=mysqli_fetch_array($result);
?>
<div class="container w-100">
    <h1>Elimina Noticia</h1>
    <form action="confirmaEliminaNoticia.php" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="tituloNoticia" class="form-label">Nome</label>
            <input readonly type="text" class="form-control" id="tituloNoticia" name="tituloNoticia" value="<?php echo $dados['noticiaTitulo'] ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Data da Noticia</label>
            <input readonly type="date" class="form-control" name="dataNoticia" value="<?php echo $dados['noticiaData'] ?>">
        </div>
        <div class="mb-3">
            <img src="../<?php echo $dados['noticiaFotoURL'] ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Descrição da Noticia</label>
            <textarea readonly class="form-control" id="descricaoNoticia" name="descricaoNoticia"><?php echo $dados['noticiaDescricao'] ?></textarea>
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