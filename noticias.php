<?php
include_once("includes/body.inc.php");
global $con;
drawTop(HOME);
?>
    <head>
        <title>Soccer Santos | Noticias</title>
    </head>
	<!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/NoticiasBack.png)">
    	<div class="auto-container">
        	<h1></h1>
        </div>
    </section>
    <!--End Page Title-->
	<section class="services-section-two">
		<div class="auto-container">
            <!--------------------------------- Noticias ----------------------------------------------->
            <div style="padding-top: 60px; padding-bottom: 30px"><font size="20px" color="#FF3300"><b style="margin-left: 525px"> Notícias </b></font></div>
            <div class="lower-section" style="padding-top: 10px;">
                <div class="row clearfix" style=" width: 1500px;" align="center">
                    <?php
                    $sql="select * from noticias";
                    $res=mysqli_query($con,$sql);
                    while($dados=mysqli_fetch_array($res)){
                    ?>
                        <a href="noticia.php?id=<?php echo $dados['noticiaId']?>">
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

	</section>
	<!--End Services Section Two-->



<?php
    drawBottom();
?>