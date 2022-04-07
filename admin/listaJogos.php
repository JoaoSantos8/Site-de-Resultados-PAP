<?php

    include_once("includes/body.inc.php");
    global $con;
    drawTop(JOGOS );
    $sql="select jogos.* 
            ,casa.clubeNome as casa
            ,fora.clubeNome as fora
            ,casa.clubeLogoURL as casaURL
            ,fora.clubeLogoURL as foraURL
            from jogos inner join clubes as casa on casa.clubeId=jogoCasaClubeId 
            inner join clubes as fora on fora.clubeId=jogoForaClubeId ";
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
                <th style="width: 50%" class="text-center">
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
            <tr valign="middle">
                <td style="width: 10%" class="text-center">
                    <?php echo $dados['jogoId'];?>
                </td>
                <td width="30" style="padding-bottom: 12px; padding-top: 4px">
                    <img width="16" src="../<?php echo $dados['casaURL'];?>"> <span class="mt-5"> <?php echo $dados['casa']?></span>
                    <span>&nbsp;- &nbsp;</span>
                    <img width="16" src="../<?php echo $dados['foraURL'];?>"> <?php echo $dados['fora']?>
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