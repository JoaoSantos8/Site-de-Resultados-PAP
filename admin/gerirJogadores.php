<?php

include_once ("includes/body.inc.php");
global $con;
drawTop(JOGADORES);
$id=intval($_GET['clubeId']);
$sql="select clubeId, clubeNome from clubes where clubeId=$id";
$result=mysqli_query($con,$sql);
$dadosClube=mysqli_fetch_array($result);


$sql="select * from jogadores where jogadorId not in (select jogadorClubeJogadorId from jogadorclubes)";
$result=mysqli_query($con,$sql);


// echo 'teste:'. mysqli_error($con);
// echo '#:'. mysqli_affected_rows($con);

?>
    <div class="container w-100">
        <h1>Lista de Jogadores</h1>
        <table class="table table-striped table-hover ">

            <tr>
                <td colspan="5" align="right">
                    <a href="#" onclick="$('#listaForm').submit();" class="btn-sm btn-success"><i class="bi bi-plus-circle"></i> Confirma atribuição</a>
                </td>
            </tr>
            <tr>
                <th style="width: 5%" class="text-center">
                    #
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
                    Número
                </th>
            </tr>
            <form id="listaForm" action="inscreveJogador.php" method="post">
            <?php
            $i=0;
            while($dados=mysqli_fetch_array($result)){
                $i++;
                ?>
                <tr>
                    <td class="text-center">
                        <?php echo $i;?>
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
                        <input type="checkbox" name="jogador[]" value="<?php echo $dados['jogadorId']?>">

                        <input size="5" type="text" name="numero<?php echo $dados['jogadorId']?>" >
                    </td>
                </tr>
                <?php
            }
            ?>
                <input type="hidden" name="clubeId" value="<?php echo $id?>">
            </form>
        </table>




    </div>
<?php
drawBottom();
?>