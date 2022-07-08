<?php

    include_once("includes/body.inc.php");
    global $con;
    drawTop(Noticias );
    $sql="select * from Noticias";
    $result=mysqli_query($con,$sql);

?>
    <div class="container w-100">
        <h1>Lista de Noticias</h1>
        <table class="table table-striped table-hover ">
            <tr>
                <td colspan="7" align="right">
                    <a href="novaNoticia.php" class="btn-sm btn-success"><i class="bi bi-plus-circle"></i> Nova Noticia</a>
                </td>
            </tr>
            <tr>
                <th style="width: 5%" class="text-center">
                    Id
                </th>
                <th style="width: 15%" class="text-center">
                    Titulo
                </th>
                <th style="width: 15%" class="text-center">
                    Data
                </th>
                <th style="width: 20%" class="text-center">
                    Imagem
                </th>
                <th style="width: 30%" class="text-center">
                    Descrição
                </th>
                <th colspan="3" style="width: 35%" class="text-center">
                    Opções
                </th>
            </tr>
            <?php

            while($dados=mysqli_fetch_array($result)){

            ?>
            <tr>
                <td class="text-center">
                    <?php echo $dados['noticiaId'];?>
                </td>
                <td class="text-center">
                    <?php echo $dados['noticiaTitulo'];?>
                </td>
                <td class="text-center">
                    <?php echo $dados['noticiaData'];?>
                </td>
                <td  class="text-center">
                    <img width="60" src="../<?php echo $dados['noticiaFotoURL'];?>">
                </td>
                <td class="text-center">
                    <?php echo $dados['noticiaDescricao'];?>
                </td>
                <td class="text-center">
                    <a href="editaNoticia.php?id=<?php echo $dados['noticiaId'];?>" class="btn-sm btn-primary"><i class="bi bi-pencil"></i> Editar</a>
                    <a href="eliminaNoticia.php?id=<?php echo $dados['noticiaId'];?>"  class="btn-sm btn-danger"><i class="bi bi-trash"></i> Eliminar</span></a>
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