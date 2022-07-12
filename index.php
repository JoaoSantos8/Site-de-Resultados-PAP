<?php
    include_once("includes/body.inc.php");
    global $con;
    drawTop(HOME);
?>
    <head>
        <title>Soccer Santos | Página Príncipal</title>
    </head>

	<!--Main Slider-->
	<section class="main-slider">

		<div class="main-slider-carousel owl-carousel owl-theme">

			<div class="slide" style="background-image:url(images/main-slider/image-1.jpg); background-repeat: no-repeat">
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
							<table class="table">
								<thead>
								<tr>
									<th scope="col"><font color="black"><b> Posição</b></font></th>
									<th scope="col"><font color="black"><b>Clube</b></font></th>
									<th scope="col"><font color="black"><b>Jogos</b></font></th>
									<th scope="col"><font color="black"><b>Vitórias</b></font></th>
									<th scope="col"><font color="black"><b>Pts</b></font></th>
								</tr>
								</thead>
								<tbody>
								<tr>
									<th scope="row"><font color="black"><b>1</b></font></th>
									<td class="1Pos"><img src="images/Clubes/Porto"></td>
									<td>22</td>
									<td>19</td>
									<td>60</td>
								</tr>
								<tr>
									<th scope="row"><font color="black"><b>2</b></font></th>
									<td class="2Pos"><img src="images/Clubes/Sporting"></td>
									<td>23</td>
									<td>17</td>
									<td>57</td>
								</tr>
								<tr>
									<th scope="row"><font color="black"><b>3</b></font></th>
									<td class="3Pos"><img src="images/Clubes/Benfica"></td>
									<td>23</td>
									<td>16</td>
									<td>51</td>
								</tr>
								<tr>
									<th scope="row"><font color="black"><b>4</b></font></th>
									<td class="4Pos"><img src="images/Clubes/Braga"></td>
									<td>22</td>
									<td>12</td>
									<td>41</td>
								</tr>
								</tbody>
							</table>
						</div>
					</div>

					<!--Taça da liga-->
					<div class="services-block col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
							<h3 align="Center"><a href="jogos.php" title="Clique para ir para os jogos!"><font color="#FF3300"><b>Jogos Campeonato</b></font></a></h3>
							<div class="text"><table class="table">
								<thead>
								<tr>
									<th colspan="5"><font color="black"; style="font-size: 15px"><b> Rodada 28 de 34 </b></font></th>
								</tr>
								</thead>
								<tbody>
								<tr>
									<td align="right" width="50px" style="
										padding-left: 0px;
										padding-right: 0px;
										padding-bottom: 0px;
										padding-top: 12px;">
										<img src="images/Clubes/Braga.png"><p><img src="images/Clubes/Benfica.png"></td>
									<td><font color="black"; style="font-size: 16px"> Braga <p> Benfica </font></td>
									<td align="right" style="padding-right: 0px"><font COLOR="black">     <br>         </font></td>
									<td  align="center"><font color="black"><div class="Hora"><b>Sexta, 1 de abril<br>20:15</b></div></font></td>
								</tr>
								<tr>
									<td align="right" width="50px" style="
										padding-left: 35px;
										padding-right: 0px;
										padding-bottom: 0px;
										padding-top: 12px;">
										<img src="images/Clubes/aroucaClube.png"><p><img src="images/Clubes/gilvicenteClube.png"></td>
									<td><font color="black"; style="font-size: 16px"> Arouca <p> Gil Vicente </font></td>
									<td align="right" style="padding-right: 0px"><font COLOR="black"> 2    <br>    1     </font></td>
									<td  align="center"><font color="black"><div class="Hora"><b>Sábado, 2 de Abril<br>18:00</b></div></font></td>
								</tr>
								</tbody>
							</table></div>
						</div>
					</div>
					<!--------------------------------- Noticias ----------------------------------------------->
					<div style="padding-top: 60px; padding-bottom: 30px"><font size="20px" color="#FF3300"><b style="margin-left: 525px"> Notícias </b></font></div>
                    <div class="row clearfix" style=" width: 1500px;" align="center">
                        <?php
                        $sql="select * from noticias order by noticiaData DESC ";
                        $res=mysqli_query($con,$sql);
                        while($dados=mysqli_fetch_array($res)){
                            ?>
                            <a href="noticia.php?id=<?php echo $dados['noticiaId']?>" style="padding-right: 20px;">
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
				</div>
			</div>
		</div></section>
</div>
<!--End Services Section-->

<!--Services Section Two-->
<section class="services-section-two">
	<div class="auto-container">
		<div class="row clearfix">
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
                                $sql="select pontosResultado from pontos where pontosClubeId=".$dados['clubeId'];
                                $sql.=" order by pontosJogoId desc limit 5";
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
			<!-------------------------------------------------------------------------------------------------------------------------- -->
		</div>
	</div>
	<button onclick="myFunction()" id="myBtn" style="background-color: #FF3300; position: absolute; left: 47.5%; width: 100px; height: 30px; color: white;" ><b>Ver Mais</b></button>
</section>
<!--End Services Section Two-->



<?php
    drawBottom();
?>