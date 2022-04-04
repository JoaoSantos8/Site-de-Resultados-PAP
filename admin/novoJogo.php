<?php

include_once ("includes/body.inc.php");
global $con;
drawTop(CLUBES);
$sql="select * from clubes";
$result=mysqli_query($con,$sql);

?>
    <div class="container w-100">
        <h1>Novo Clube</h1>
        <form action="confirmaNovoJogo.php" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="clubeCasa" class="form-label">Clube Visitado</label>
                <input type="text" class="form-control" id="clubeCasa" name="clubeCasa">
            </div>
            <div class="mb-3">
                <label for="clubeFora" class="form-label">Clube Visitante</label>
                <input type="text" class="form-control" id="clubeFora" name="clubeFora">
            </div>
            <div class="mb-3">
                <label for="Data" class="form-label">Data</label>
                <input type="text" class="form-control" id="Data" name="Data">
            </div>
            <div class="mb-3">
                <label for="Hora" class="form-label">Hora</label>
                <input type="text" class="form-control" id="Hora" name="Hora">
            </div>


            <div class="mb-3">
                <input type="submit" class="btn-sm btn-primary" value="Confirma">
            </div>
        </form>
    </div>
<?php
drawBottom();
?>