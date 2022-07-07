<?php

include_once ("includes/body.inc.php");
global $con;
drawTop(CLUBES);
$sql="select * from clubes";
$result=mysqli_query($con,$sql);


// echo 'teste:'. mysqli_error($con);
// echo '#:'. mysqli_affected_rows($con);

?>
    <div class="container w-100">
        <h1>Lista de Clubes</h1>
        <table class="table table-striped table-hover ">
            <tr>
                <td colspan="4" align="right">
                    <a href="novoClube.php" class="btn-sm btn-success"><i class="bi bi-plus-circle"></i> Novo Clube</a>
                </td>
            </tr>
            <tr>
                <th style="width: 5%" class="text-center">
                    Id
                </th>
                <th style="width: 40%"   class="text-center">
                    Nome
                </th>
                <th style="width: 10%"   class="text-center">
                    LogoTipo
                </th>
                <th style="width: 30%"  class="text-center">
                    Opções
                </th>
            </tr>

            <?php

            while($dados=mysqli_fetch_array($result)){

                ?>
                <tr>
                    <td class="text-center">
                        <?php echo $dados['clubeId'];?>
                    </td>
                    <td class="text-center">
                        <?php echo $dados['clubeNome'];?>
                    </td>
                    <td  class="text-center">
                        <img width="60" src="../<?php echo $dados['clubeLogoURL'];?>">
                    </td>
                    <td class="text-center">
                        <a href="GerirPlantel.php?id=<?php echo $dados['clubeId'];?>" class="btn-sm btn-warning"><i class="bi bi-person"></i> Plantel</a>
                        <a href="editaClube.php?id=<?php echo $dados['clubeId'];?>" class="btn-sm btn-primary"><i class="bi bi-pencil"></i> Editar</a>
                        <a href="eliminaClube.php?id=<?php echo $dados['clubeId'];?>"  class="btn-sm btn-danger"><i class="bi bi-trash"></i> Eliminar</span></a>
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