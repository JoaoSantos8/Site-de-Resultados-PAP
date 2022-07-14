<?php

include_once ("includes/body.inc.php");
global $con;
drawTop(JOGADORES);
$sql="select * from galeria";
$result=mysqli_query($con,$sql);


// echo 'teste:'. mysqli_error($con);
// echo '#:'. mysqli_affected_rows($con);

?>
    <div class="container w-100">
        <h1>Galeria de Fotos</h1>
        <table class="table table-striped table-hover ">
            <tr>
                <td colspan="4" align="right">
                    <a href="novaFoto.php" class="btn-sm btn-success"><i class="bi bi-plus-circle"></i> Nova Foto</a>
                </td>
            </tr>
            <tr>
                <th style="width: 10%" class="text-center">
                    Id
                </th>
                <th style="width: 20%"   class="text-center">
                    Fotografia
                </th>
                <th style="width: 10%"   class="text-center">
                    Data
                </th>
                <th style="width: 20%"  class="text-center">
                    Opções
                </th>
            </tr>

            <?php

            while($dados=mysqli_fetch_array($result)){

                ?>
                <tr>
                    <td class="text-center">
                        <?php echo $dados['galeriaId'];?>
                    </td>
                    <td  class="text-center">
                        <img width="60" src="../<?php echo $dados['galeriaFotoURL'];?>">
                    </td>
                    <td class="text-center">
                        <?php echo $dados['galeriaData'];?>
                    </td>
                    <td class="text-center">
                        <a href="editaGaleria.php?id=<?php echo $dados['galeriaId'];?>" class="btn-sm btn-primary"><i class="bi bi-pencil"></i> Editar</a>
                        <a href="eliminaGaleria.php?id=<?php echo $dados['galeriaId'];?>"  class="btn-sm btn-danger"><i class="bi bi-trash"></i> Eliminar</span></a>
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