<?php
include_once("includes/body.inc.php");
global $con;
drawTop(HOME);
?>
    <section class="page-title" style="background-image:url(images/background/background.png);">
        <div class="auto-container">
            <h1>Fotos do campeonato</h1>
        </div>
    </section>
    <!--End Page Title-->
	
	<!--Gallery Page Section-->
	<section class="gallery-page-section">
		<div class="auto-container" style="padding-top: 30px">
			<div class="row clearfix">
            <?php
                $path="images/noticias";
                $d = dir($path);
                while (false !== ($entry = $d->read())) {
                    if($entry!=="." && $entry!==".." ){?>
                <div class="gallery-block col-lg-3 col-md-4 col-sm-10">
                    <div class="inner-box">
                        <figure class="image-box">
                        <?php echo '<img src="'.$path.'/'.$entry.'" width="300">';?>
                <div class="overlay-box">
                    <div class="overlay-inner">
                    <div class="content">
                        <?php echo '<a href="'.$path.'/'.$entry.'" data-fancybox="gallery" data-caption="" class="link"><span class="icon flaticon-plus-symbol"></span></a>';?>
                  </div>
                    </div>
                </div>
                    </figure>
                    </div>
                    </div>
                <?php
                    }
                }
                $d->close();
                ?>
            </div>
        </div>
	</section>
	<!--End Gallery Page Section-->
<?php
drawBottom();
?>



