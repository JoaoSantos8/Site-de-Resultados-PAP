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
                    if($entry!="." && $entry!=".." )
                        echo '<img src="'.$path.'/'.$entry.'" width="300" style="padding-right: 15px; padding-bottom: 15px">';
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