<?php
include_once("includes/body.inc.php");
global $con;
drawTop(HOME);
?>

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
            <div class="lower-section" style="padding-top: 10px;">
                <div class="row clearfix" style=" width: 1500px;" align="center">
                    <?php
                    $id=intval($_GET['id']);
                    $sql="select noticiaTitulo, noticiaDescricao, noticiaData, noticiaFotoURL from noticias where noticiaId='$id'";
                    $res=mysqli_query($con,$sql);
                    $dados=mysqli_fetch_array($res)
                        ?>
                    <head>
                        <title>Soccer Santos | Noticia <?php echo $id ?> </title>
                    </head>
                        <figure class="figure" style="width: 1000px; border: 4px solid white; background-color: white; border-top-left-radius:10px; border-top-right-radius:10px; border-bottom-left-radius:10px; border-bottom-right-radius:10px;" >
                                <figcaption class="figure-caption" style=" padding-left: 5px; padding-right: 5px; padding-bottom: 7px; padding-top: 9px;"><font size="12px" color="black" style="width: 100%"><b><marquee direction="right" behavior="alternate" style="height: 50px"><div style="position: absolute; top: 20px;"><?php echo $dados['noticiaTitulo']?></div></marquee></b></font></figcaption>
                                <img src="<?php echo $dados['noticiaFotoURL']?>" class="figure-img img-fluid rounded" style="padding-top: 15px;">
                                <figcaption class="figure-caption" style=" padding-left: 5px; padding-right: 5px; padding-bottom: 7px; padding-top: 9px; border-top: 4px solid #FF3300">
                                <div align="right"><font color="black">Data: <?php echo $dados['noticiaData'] ?></font></div>
                                <br><font color="black"><?php echo $dados['noticiaDescricao']?></font></figcaption>
                        </figure>
                </div>
            </div>
        </div>
    </section>
    <!--End Services Section Two-->
<?php
drawBottom();
?>