<?php

    include_once("includes/body.inc.php");
    global $con;
    $name=time();
    drawTop(JOGOS );
    $sql="select * from jogos";
    $result=mysqli_query($con,$sql);

?>
    <div class="container w-100">
        <h1>Lista de Jogos</h1>
        <table class="table table-striped table-hover ">
            <tr>
                <td colspan="8" align="right">
                    <a href="novoJogo.php" class="btn-sm btn-success"><i class="bi bi-plus-circle"></i> Novo Jogo</a>
                </td>
            </tr>
            <tr>
                <th  style="width: 10%" class="text-center">
                    Id
                </th>
                <th class="text-center">
                    Clubes
                </th>
                <th class="text-center">
                    Data
                </th>
                <th class="text-center">
                    Hora
                </th>
                <th class="text-center">
                    Opções
                </th>
            </tr>
            <?php

            while($dados=mysqli_fetch_array($result)){

            ?>
            <tr>
                <td  style="width: 10%" class="text-center">
                    <?php echo $dados['jogoId'];?>
                </td>
                <td class="text-center">
                    <?php echo $dados['jogoClubeCasa'];?><br>
                    <?php echo $dados['jogoClubeFora'];?>
                </td>
                <td class="text-center">
                    <?php echo $dados['jogoData'];?>
                </td>
                <td class="text-center">
                    <?php echo $dados['jogoHora'];?>
                </td>

                <td class="text-center">
                    <a href="editaJogo.php?id=<?php echo $dados['jogoId'];?>" class="btn-sm btn-primary"><i class="bi bi-pencil"></i> Editar</a>
                    <a href="eliminaJogo.php?id=<?php echo $dados['jogoId'];?>"  class="btn-sm btn-danger"><i class="bi bi-trash"></i> Eliminar</span></a>


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