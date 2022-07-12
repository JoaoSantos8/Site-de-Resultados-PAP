<?php

include_once ("includes/body.inc.php");
global $con;
$id=intval($_GET['id']);
drawTop(CLUBES);
$sql="select clubeId, clubeNome from clubes where clubeId=$id";
$result=mysqli_query($con,$sql);
$dados=mysqli_fetch_array($result);

// echo 'teste:'. mysqli_error($con);
// echo '#:'. mysqli_affected_rows($con);

?>
    <div class="container w-100">

        <table class="table table-striped table-hover ">
            <tr><td colspan="3">
                    <h4>Plantel do <small><?php echo $dados['clubeNome']?></small></h4>
                </td>
                <td colspan="2" align="right">
                    <a href="gerirJogadores.php?clubeId=<?php echo $id?>" class="btn-sm btn-success"><i class="bi bi-plus-circle"></i> Adicionar jogador</a>
                </td>
            </tr>
            <tr>
                <th style="width: 5%" class="text-center">
                    Número
                </th>
                <th style="width: 10%"   class="text-center">
                    Idade
                </th>
                <th style="width: 50%"   class="text-center">
                    Nome
                </th>
                <th style="width: 10%"   class="text-center">
                    Fotografia
                </th>

                <th style="width: 25%"  class="text-center">
                    Opções
                </th>
            </tr>

            <?php
            $sql="select * from jogadores inner join jogadorclubes on jogadorId=jogadorClubeJogadorId where jogadorClubeClubeId='$id' order by jogadorClubeNumero";
            $result=mysqli_query($con,$sql);
            while($dados=mysqli_fetch_array($result)){

                ?>
                <tr>
                    <td class="text-center">
                        <?php echo $dados['jogadorClubeNumero'];?>
                    </td>
                    <td class="text-center">
                        <?php echo idade($dados['jogadorDataNascimento']);?>
                    </td>
                    <td class="text-center">
                        <?php echo $dados['jogadorNome'];?>
                    </td>
                    <td  class="text-center">
                        <img width="60" src="../<?php echo $dados['jogadorFotoURL'];?>">
                    </td>
                    <td class="text-center">
                        <a href="editaJogador.php?cId=<?php echo $id?>&jId=<?php echo $dados['jogadorId'];?>" class="btn-sm btn-primary"><i class="bi bi-pencil"></i> Editar</a>
                        <a href="GerirEliminarJogador.php?cId=<?php echo $id?>&jId=<?php echo $dados['jogadorId'];?>"  class="btn-sm btn-danger"><i class="bi bi-trash"></i> Eliminar</span></a>
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