<?php
include_once("includes/body.inc.php");
global $con;
drawTop(HOME);
?>
	<!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/background.png);">
        <div class="auto-container">
            <h1>Plateis do campeonato</h1>
        </div>
    </section>
    <!--End Page Title-->
	<section class="services-section-two">
		<div class="auto-container">
			<div class="row clearfix">

				<!-- Services Block Two -->
				<p>
                    <?php
                    $sql="select clubeId, clubeNome, clubeLogoURL, ifnull(sum(pontosValor),0) as pts
                            from clubes left join pontos on clubeId=pontosClubeId
                            group by 1
                            order by pts desc, clubeNome asc;";
                    $res=mysqli_query($con,$sql);
                    $class=1;
                    while($dados=mysqli_fetch_array($res)){
                    ?>
                        <div class="services-block-two col-lg-3 col-md-6 col-sm-12">
                        <a href="perfil.php?id=<?php echo $dados['clubeId']?>" ><div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="icon-box">
                                <img src="<?php echo $dados['clubeLogoURL']?>">
                            </div>
                            <h3><font color="black"><?php echo alteraNome($dados['clubeNome'])?></font></h3>
                            <div >
                                <?php
                                   $sql="select pontosResultado from pontos inner join jogos on jogoId=pontosJogoId where pontosClubeId=".$dados['clubeId'];
                                   $sql.=" order by jogoJornada desc limit 5";
                                   $resV=mysqli_query($con,$sql);
                                   while($dadosV=mysqli_fetch_array($resV)){
                                       switch ($dadosV['pontosResultado']){
                                           case 'V':$cor='success'; break;
                                           case 'D':$cor='danger'; break;
                                           case 'E':$cor='warning'; break;
                                       }
                                ?>
                                    <span class="resultado bg-<?php echo $cor?>"><?php echo $dadosV['pontosResultado']?></span>
                               <?php
                                    }
                               ?>
                            </div>
                            <div class="text"><?php echo $class++?>º Classificado no campeonato português</div>
                        </div></a>
                        </div>
                    <?php
                    }
                    ?>

				</p>
				<!-------------------------------------------------------------------------------------------------------------------------- -->
			</div>
		</div>
	</section>
	<!--End Services Section Two-->



<?php
    drawBottom();
?>