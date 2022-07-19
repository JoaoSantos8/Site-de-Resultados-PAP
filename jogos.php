<?php
include_once("includes/body.inc.php");
global $con;
drawTop(HOME);

?>
    <section class="page-title" style="background-image:url(images/background/background.png);">
        <div class="auto-container">
            <h1>Jogos do Campeonato</h1>
        </div>
    </section>
    <!--End Page Title-->
	<section class="services-section-two">
		<div class="auto-container">
            <div class="lower-section"  style="padding-top: 10px;">
                <div class="text" ><table id="tabelaJogos" class="table">
                        <?php
                        //var_dump($_POST);
                        $sql="select max(jogoJornada) as mx from jogos";
                        $res=mysqli_query($con,$sql);
                        $dados=mysqli_fetch_array($res);
                        $max=$dados['mx'];
                        if(isset($_POST['jornada'])) {
                            $jornada=$_POST['jornada'];
                        }else{

                            $jornada=$max;
                        }
                        ?>
                        <thead>
                        <tr>
                            <th colspan="4"><font color="black">
                                    <form action="" id="filtro" method="post">
                                    <select name="jornada" onchange="$('#filtro').submit();">
                                    <?php
                                    for($i=1;$i<=$max;$i++){
                                        ?>
                                        <option <?php if($i==$jornada)  echo "selected "?>  value="<?php echo $i?>"> <?php echo $i."ª jornada"?></option>
                                        <?php
                                    }
                                    ?>
                                    </select>
                                    </form>
                                   </font></th>
                        </tr>
                        <tr>
                            <th style="width: 20%" scope="col"><font color="black"><b> Data</b></font></th>
                            <th colspan="3" style="width: 75%" scope="col"><font color="black"><b>Jogo</b></font></th>
                        </tr>

                        </thead>
                        <tbody>
                        <?php

                        $sql="select jogos.* 
                                        ,resultadoGolosCasa
                                        ,resultadoGolosFora
                                        ,casa.clubeNome as casa
                                        ,fora.clubeNome as fora
                                        ,casa.clubeLogoURL as casaURL
                                        ,fora.clubeLogoURL as foraURL
                                        from jogos inner join clubes as casa on casa.clubeId=jogoCasaClubeId 
                                        inner join clubes as fora on fora.clubeId=jogoForaClubeId
                                        inner join resultados on jogoId=resultadoJogoId
                                        where jogoJornada=$jornada";
                        $res=mysqli_query($con,$sql);
                        $i=1;
                        while($dados=mysqli_fetch_array($res)){
                            $boldCasaIni="";
                            $boldCasaFim="";
                            $boldForaIni="";
                            $boldForaFim="";
                            if($dados['resultadoGolosCasa']>$dados['resultadoGolosFora']){
                                $boldCasaIni="<font color='black'><strong>";
                                $boldCasaFim="</strong></font>";
                            }
                            if($dados['resultadoGolosCasa']<$dados['resultadoGolosFora']){
                                $boldForaIni="<font color='black'><strong>";
                                $boldCasaFim="</strong></font>";
                            }
                            ?>
                            <tr>
                                <td class="text-center" ><?php echo $dados['jogoData']?></td>
                                <td class="text-right" ><?php echo $boldCasaIni.$dados['casa'].$boldCasaFim ?> <img style="height: 40px" src="<?php echo $dados['casaURL']?>"> </td>
                                <td style="width: 5%" class="text-center"><?php echo $dados['resultadoGolosCasa']."-".$dados['resultadoGolosFora']?></td>
                                <td class="text-left" ><img style="height: 40px" src="<?php echo $dados['foraURL']?>"> <?php echo $boldForaIni.$dados['fora'].$boldForaFim ?></td>
                            </tr>
                            <?php
                            $i++;
                        }
                        ?>
                        </tbody>
                    </table></div>


            </div>
		</div>

	</section>
	<!--End Services Section Two-->



<?php
    drawBottom();
?>