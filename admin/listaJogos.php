<?php

    include_once("includes/body.inc.php");
    global $con;
    drawTop(JOGOS );
    $sql="select max(jogoJornada) as mx from jogos";
    $res=mysqli_query($con,$sql);
    $dados=mysqli_fetch_array($res);
    $max=$dados['mx'];
    if(isset($_POST['jornada'])) {
        $jornada=$_POST['jornada'];
    }else{

        $jornada=$max;
    }

    $sql="select jogos.* 
            ,casa.clubeNome as casa
            ,fora.clubeNome as fora
            ,casa.clubeLogoURL as casaURL
            ,fora.clubeLogoURL as foraURL
            from jogos inner join clubes as casa on casa.clubeId=jogoCasaClubeId 
            inner join clubes as fora on fora.clubeId=jogoForaClubeId where jogoJornada=$jornada";
    $result=mysqli_query($con,$sql);

?>
    <div class="container w-100">
        <h1>Lista de Jogos</h1>
        <table class="table table-striped table-hover ">
            <tr>
                <td colspan="3">
                    <form id="filtro" action="" method="post">
                    <strong>Filtro: </strong>
                    <select name="jornada" onchange="$('#filtro').submit();">
                        <?php
                            for($i=1;$i<=$max;$i++){
                        ?>
                        <option <?php if($i==$jornada) echo "selected "?>value="<?php echo $i?>">Jornada <?php echo $i?></option>
                        <?php
                            }
                        ?>
                    </select>
                    </form>
                </td>
                <td colspan="5" align="right">
                    <a href="novoJogo.php" class="btn-sm btn-success"><i class="bi bi-plus-circle"></i> Novo Jogo</a>
                </td>
            </tr>
            <tr>
                <th style="width: 5%" class="text-center">
                    Id
                </th>
                <th style="width: 5%" class="text-center">
                    Jornada
                </th>
                <th style="width: 35%" class="text-center">
                    Clubes
                </th>
                <th style="width: 10%" class="text-center">
                    Data
                </th>
                <th style="width: 10%" class="text-center">
                    Hora
                </th>
                <th colspan="3" style="width: 35%" class="text-center">
                    Opções
                </th>
            </tr>
            <?php

            while($dados=mysqli_fetch_array($result)){
                $sql="select resultadoGolosCasa,resultadoGolosFora 
                    from resultados where resultadoJogoId=".$dados['jogoId'];
                $res=mysqli_query($con,$sql);
                $dadosRes=mysqli_fetch_array($res);
            ?>
            <tr valign="middle">
                <td style="width: 5%" class="text-center">
                    <?php echo $dados['jogoId'];?>
                </td>
                <td style="width: 5%" class="text-center">
                    <?php echo $dados['jogoJornada'];?>ª jorn.
                </td>
                <td  class="text-center" style="padding-bottom: 12px; padding-top: 4px">
                    <img width="16" src="../<?php echo $dados['casaURL'];?>"> <span class="mt-5">
                        <?php echo $dados['casa']; ?></span>
                    <span>&nbsp;- &nbsp;</span>
                    <img width="16" src="../<?php echo $dados['foraURL'];?>"> <?php echo $dados['fora']?>
                    <?php
                    if(mysqli_affected_rows($con)>0) {// há resultados
                        echo " (" . $dadosRes['resultadoGolosCasa'] . "-" . $dadosRes['resultadoGolosFora'] . ")";
                    }
                    ?>
                </td>

                <td class="text-center">
                    <?php echo $dados['jogoData'];?>
                </td>
                <td class="text-center">
                    <?php echo $dados['jogoHora'];?>
                </td>

                <td style="width: 12%;" class="text-center">
                    <a href="novoResultado.php?id=<?php echo $dados['jogoId'];?>" class="btn-sm btn-secondary"><i class="bi bi-dribbble"></i></i> Resultado</a>
                </td>
                <td style="width: 11%;" class="text-center">
                    <a href="editaJogo.php?id=<?php echo $dados['jogoId'];?>" class="btn-sm btn-primary"><i class="bi bi-pencil"></i> Editar</a>
                </td>
                <td  style="width: 12%;" class="text-center">
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