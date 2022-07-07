<?php

include_once ("includes/body.inc.php");
global $con;
drawTop(JOGOS,'nj' );


?>
<div class="container form ">

    <h1>Novo Jogo</h1>
    <form action="confirmaNovoJogo.php" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="data" class="form-label">Data</label>
            <input type="date" class="form-control" id="data" name="dataJogo">
        </div>
            <div class="mb-3">
            <label for="data" class="form-label">Hora</label>
            <input type="time" class="form-control" id="hora" name="horaJogo">
        </div>
        <div class="mb-3">
            <label for="clube" class="form-label">Nome do clube - Casa</label>
            <select class="form-select" name="clubeCasaId" id="clubesCasa">


            </select>
        </div>
        <div class="mb-3">
            <label for="clube" class="form-label">Nome do clube - Fora</label>
            <select disabled class="form-select" name="clubeForaId" id="clubesFora">

            </select>
        </div>

        <div class="mb-3 text-end">
            <input type="submit" class="btn-sm btn-primary" value="Confirma">
        </div>
    </form>





</div>
<?php
drawBottom();
?>
