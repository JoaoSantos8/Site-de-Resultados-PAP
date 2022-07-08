<?php

include_once ("includes/body.inc.php");
global $con;
drawTop(JOGADORES);
?>
<div class="container w-100">
    <h1>Novo Jogador</h1>
    <form action="confirmaNovoJogador.php" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="nomeJogador" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nomeJogador" name="nomeJogador">
        </div>
        <div class="mb-3">
            <label class="form-label">Foto</label>
            <input type="file" class="form-control" name="fotoJogador">
        </div>
       <div class="mb-3">
            <label class="form-label">Data de Nascimento</label>
            <input type="date" class="form-control" name="dnJogador">
        </div>

        <div class="mb-3">
            <input type="submit" class="btn-sm btn-primary" value="Confirma">
        </div>
    </form>
</div>
<?php
drawBottom();
?>