<?php

include_once ("includes/body.inc.php");
global $con;
$id=intval($_GET['id']);
drawTop(CLUBES);
$sql="select * from clubes where clubeId=$id";
$result=mysqli_query($con,$sql);
$dados=mysqli_fetch_array($result);
?>
<div class="container w-100">
    <h1>Edita Clube</h1>
    <form action="confirmaEditaClube.php" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="nomeCLube" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nomeCLube" name="nomeClube" value="<?php echo $dados['clubeNome'] ?>">
        </div>
        <div class="mb-3">
            <img width="60" src="../<?php echo $dados['clubeLogoURL'] ?>">
        </div>
        <div class="mb-3">
            <label for="nomeCLube" class="form-label">Ano de fundação</label>
            <input type="text" class="form-control" id="anoCLube" name="anoClube" value="<?php echo $dados['clubeAnoFundacao'] ?>">
        </div>
        <div class="mb-3">
            <label for="nomeCLube" class="form-label">Nome do estádio</label>
            <input type="text" class="form-control" id="estadioCLube" name="estadioClube" value="<?php echo $dados['clubeEstadio'] ?>">
        </div>
        <div class="mb-3">
            <label for="nomeCLube" class="form-label">Fundadores</label>
            <textarea class="form-control" id="fundadoresCLube" name="fundadoresClube"> <?php echo $dados['clubeFundadores'] ?></textarea>
        </div>
        <div class="mb-3">
            <label class="form-label">Logotipo</label>
            <input type="file" class="form-control" name="logoClube">
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