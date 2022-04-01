<?php

include_once ("includes/body.inc.php");
global $con;
drawTop(CLUBES);
$sql="select * from clubes";
$result=mysqli_query($con,$sql);

?>
    <div class="container w-100">
        <h1>Novo Clube</h1>
        <form action="confirmaNovoClube.php" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="nomeCLube" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nomeCLube" name="nomeClube">
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