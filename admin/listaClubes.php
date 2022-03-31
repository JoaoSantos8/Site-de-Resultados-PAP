<?php

    include_once ("includes/body.inc.php");
    global $con;
    drawTop(CLUBES);
    $sql="select * from clubes";
    $result=mysqli_query($con,$sql);

?>
    <div class="container w-100">
        <h1>Lista de Clubes</h1>
        <table class="table table-striped table-hover ">
            <tr>
                <td colspan="3" align="right">
                    <a href="novoClube.php" class="btn-sm btn-success"><i class="bi bi-plus-circle"></i> Novo Clube</a>
                </td>
            </tr>
            <tr>
                <th style="width: 10%" class="text-center">
                    Id
                </th>
                <th style="width: 70%" class="text-center">
                    Nome
                <th class="text-center">
                    Opções
                </th>
            </tr>

            <?php

            while($dados=mysqli_fetch_array($result)){

            ?>
            <tr>
                <td class="text-center">
                    <?php echo $dados['distritoId'];?>
                </td>
                <td>
                    <?php echo $dados['distritoNome'];?>
                <td class="text-center">
                    <a href="editaDistrito.php?id=<?php echo $dados['distritoId'];?>" class="btn-sm btn-primary"><i class="bi bi-pencil"></i> Editar</a>
                    <a href="eliminaDistrito.php?id=<?php echo $dados['distritoId'];?>"  class="btn-sm btn-danger"><i class="bi bi-trash"></i> Eliminar</span></a>
                </td>
            </tr>
                <?php
            }
                ?>

        </table>




    </div>
<?php
    drawBottom();
?>