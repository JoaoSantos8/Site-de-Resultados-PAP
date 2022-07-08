<?php

include_once ("includes/body.inc.php");
global $con;
drawTop(CLUBES);

?>
    <div class="container w-100">
        <h1>Novo Clube</h1>
        <form action="confirmaNovoClube.php" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="nomeCLube" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nomeCLube" name="nomeClube">
            </div>
            <div class="mb-3">
                <label for="nomeCLube" class="form-label">Ano de fundação</label>
                <input type="text" class="form-control" id="anoCLube" name="anoClube">
            </div>
            <div class="mb-3">
                <label for="nomeCLube" class="form-label">Nome do estádio</label>
                <input type="text" class="form-control" id="estadioCLube" name="estadioClube">
            </div>
            <div class="mb-3">
                <label for="nomeCLube" class="form-label">Fundadores</label>
                <textarea class="form-control" id="fundadoresCLube" name="fundadoresClube"></textarea>
            </div>
            <div class="mb-3">
                <label class="form-label">Logotipo</label>
                <input type="file" class="form-control" name="logoClube">
            </div>

            <div class="mb-3">
                <input type="submit" class="btn-sm btn-primary" value="Confirma">
            </div>
        </form>
    </div>
<?php
drawBottom();
?>