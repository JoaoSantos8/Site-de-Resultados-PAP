<?php
    include_once("includes/body.inc.php");
    global $con;
    drawTop(HOME);
?>


	<!--Main Slider-->
	<section class="main-slider">

		<div class="main-slider-carousel owl-carousel owl-theme">

			<div class="slide" style="background-image:url(images/main-slider/image-1.jpg); background-repeat: no-repeat;">
				<div class="auto-container">
					<div class="content">
						<div class="rating">
							<span class="fa fa-soccer-ball-o"></span>
							<span class="fa fa-soccer-ball-o"></span>
							<span class="fa fa-soccer-ball-o"></span>
							<span class="fa fa-soccer-ball-o"></span>
							<span class="fa fa-soccer-ball-o"></span>
						</div>
						<h2>Os Teus Resultados <span>Desde 2022</span></h2>
					</div>
				</div>
			</div>

			<div class="slide" style="background-image:url(images/main-slider/image-2.jpg); background-repeat: no-repeat">
				<div class="auto-container">
					<div class="content">
						<div class="rating">
							<span class="fa fa-soccer-ball-o"></span>
							<span class="fa fa-soccer-ball-o"></span>
							<span class="fa fa-soccer-ball-o"></span>
							<span class="fa fa-soccer-ball-o"></span>
							<span class="fa fa-soccer-ball-o"></span>
						</div>
						<h2>Os Teus Resultados <span>Desde 2022</span></h2>
					</div>
				</div>
			</div>

		</div>
	</section>
	<!--End Main Slider-->

	<!--Services Section-->
	<section class="services-section">
		<div class="auto-container">

			<!--Upper Section-->
			<div class="upper-section">
				<div class="row clearfix">

					<!--Campeonato de portugal-->
					<div class="services-block col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
							<h3><a href="ClassiCampeonato.html"><font color="#FF3300"><b>Campeonato de Portugal</b></font> </a></h3>
							<table id="tabelaReduzida" class="table">
								<thead>
								<tr>
									<th style="width: 25%" scope="col"><font color="black"><b> Posição</b></font></th>
									<th style="width: 25%" scope="col"><font color="black"><b>Clube</b></font></th>
									<th style="width: 25%" scope="col"><font color="black"><b>Jogos</b></font></th>
									<th style="width: 25%" scope="col"><font color="black"><b>Pts</b></font></th>
								</tr>
								</thead>
								<tbody>
                                <?php

                                    $sql="select clubeLogoURL, count(*) as nJogos, sum(pontosValor) as total
                                        from pontos inner join clubes on clubeId=pontosClubeId
                                        group by 1
                                        order by total desc
                                        limit 5";
                                $res=mysqli_query($con,$sql);
                                $i=1;
                                while($dados=mysqli_fetch_array($res)){
                                    ?>
                                    <tr>
                                        <td class="text-center" ><b><?php echo $i ?></b></td>
                                        <td class="text-center" class="1Pos"><img style="height: 35px" src="<?php echo $dados['clubeLogoURL'] ?>"></td>
                                        <td class="text-center"><?php echo $dados['nJogos'] ?></td>
                                        <td class="text-center"><?php echo $dados['total'] ?></td>
                                    </tr>
                                    <?php
                                    $i++;
                                }
                                ?>
								</tbody>
							</table>
						</div>
					</div>

					<!--Taça da liga-->
					<div class="services-block col-lg-8 col-md-6 col-sm-12">
						<div class="inner-box wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
							<h3 align="Center"><a href="jogos.php" title="Clique para ir para os jogos!"><font color="#FF3300"><b>Última jornada</b></font></a></h3>
							<div class="text"><table id="tabelaReduzida" class="table">
                                    <?php
                                    $sql="select max(jogoJornada) from jogos";
                                    $res=mysqli_query($con,$sql);
                                    $dados=mysqli_fetch_array($res);
                                    $jornada=$dados[0];
                                    ?>
                                    <thead>
                                    <tr>
                                        <th colspan="4"><font color="black"><?php echo $jornada."ª jornada"?></font></th>
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
                                            $boldCasaIni="<strong>";
                                            $boldCasaFim="</strong>";
                                        }
                                        if($dados['resultadoGolosCasa']<$dados['resultadoGolosFora']){
                                            $boldForaIni="<strong>";
                                            $boldForaFim="</strong>";
                                        }

                                        ?>
                                        <tr>
                                            <td class="text-center" ><?php echo $dados['jogoData']?></td>
                                            <td class="text-right" ><?php echo $boldCasaIni.$dados['casa'].$boldCasaFim ?> <img style="height: 20px" src="<?php echo $dados['casaURL']?>"> </td>
                                            <td style="width: 5%" class="text-center"><?php echo $dados['resultadoGolosCasa']."-".$dados['resultadoGolosFora']?></td>
                                            <td class="text-left" ><img style="height: 20px" src="<?php echo $dados['foraURL']?>"> <?php echo $boldForaIni.$dados['fora'].$boldForaFim ?></td>
                                        </tr>
                                        <?php
                                        $i++;
                                    }
                                    ?>
                                    </tbody>
                                </table></div>
						</div>
					</div>
					<!--------------------------------- Noticias ----------------------------------------------->
					<div style="padding-top: 60px; padding-bottom: 30px"><font size="20px" color="#FF3300"><b style="margin-left: 525px"> Notícias </b></font></div>
					<div class="lower-section" style="padding-top: 10px;">
                        <div class="row clearfix" style=" width: 1500px;" align="center">
                            <?php
                            $sql="select * from noticias order by noticiaData desc LIMIT 6";
                            $res=mysqli_query($con,$sql);
                            while($dados=mysqli_fetch_array($res)){
                                ?>
                                <a href="noticia.php?id=<?php echo $dados['noticiaId']?>" style="padding-right: 20px">
                                    <figure class="figure" style="width: 400px; border: 4px solid white; background-color: white; border-top-left-radius:10px; border-top-right-radius:10px; border-bottom-left-radius:10px; border-bottom-right-radius:10px;" >
                                        <figcaption class="figure-caption" style=" padding-left: 5px; padding-right: 5px; padding-bottom: 7px; padding-top: 9px; border-bottom: 4px solid #FF3300"><font color="black"><b class="text-uppercase"><?php echo $dados['noticiaTitulo']?></b></font></figcaption>
                                        <img src="<?php echo $dados['noticiaFotoURL']?>" class="figure-img img-fluid rounded" style="padding-top: 5px;">
                                        <figcaption class="figure-caption" style=" padding-left: 5px; padding-right: 5px; padding-bottom: 7px; padding-top: 9px; border-top: 4px solid #FF3300"><font color="black"><?php echo resumo($dados['noticiaDescricao'],100)?></font></figcaption>
                                    </figure>
                                </a>
                                <?php
                            }
                            ?>
                            </div>
			</div>
		</div></section>
</div>
<!--End Services Section-->

<!--Services Section Two-->
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
                if($class==5){
                    ?>
                <span id="dots"></span>
            </div>
            <div id="more" class="row clearfix">
                        <?php
                }
            }
            ?>
            </div>
            </p>
            <!-------------------------------------------------------------------------------------------------------------------------- -->
        </div>
	</div>
    <button onclick="myFunction()" id="myBtn" style="background-color: #FF3300; position: absolute; left: 47.5%; width: 100px; height: 30px; color: white;" ><b>Ver Mais</b></button>
--></section>
<!--End Services Section Two-->



<?php
    drawBottom();
?>