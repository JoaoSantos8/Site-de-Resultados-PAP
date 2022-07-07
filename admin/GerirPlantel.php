<?php

include_once ("includes/body.inc.php");
global $con;
$id=intval($_GET['id']);
drawTop(JOGADORES);
$sql="select * from clubes where clubeId=$id";
$result=mysqli_query($con,$sql);
$dadosclube=mysqli_fetch_array($result);

// echo 'teste:'. mysqli_error($con);
// echo '#:'. mysqli_affected_rows($con);

?>
    <div class="container w-100">
        <h1><?php echo $dadosclube['clubeNome']?></h1>
        <h4>Lista de Clubes</h4>
        <table class="table table-striped table-hover ">
            <tr>
                <td colspan="4" align="right">
                    <a href="novoJogador.php" class="btn-sm btn-success"><i class="bi bi-plus-circle"></i> Novo Jogador</a>
                </td>
            </tr>
            <tr>
                <th style="width: 10%" class="text-center">
                    Id
                </th>
                <th style="width: 50%"   class="text-center">
                    Nome
                </th>
                <th style="width: 20%"   class="text-center">
                    Fotografia
                </th>
                <th style="width: 20%"  class="text-center">
                    Opções
                </th>
            </tr>

            <?php
            $sql="select * from jogadores where jogadorClubeId='$id'";
            $result=mysqli_query($con,$sql);
            while($dados=mysqli_fetch_array($result)){

                ?>
                <tr>
                    <td class="text-center">
                        <?php echo $dados['jogadorId'];?>
                    </td>
                    <td class="text-center">
                        <?php echo $dados['jogadorNome'];?>
                    </td>
                    <td  class="text-center">
                        <img width="60" src="../<?php echo $dados['jogadorFotoURL'];?>">
                    </td>
                    <td class="text-center">
                        <a href="editaJogador.php?id=<?php echo $dados['jogadorId'];?>" class="btn-sm btn-primary"><i class="bi bi-pencil"></i> Editar</a>
                        <a href="eliminaJogador.php?id=<?php echo $dados['jogadorId'];?>"  class="btn-sm btn-danger"><i class="bi bi-trash"></i> Eliminar</span></a>
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