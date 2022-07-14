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
                $sql="select * from galeria order by galeriaData desc ";
                $res=mysqli_query($con,$sql);
                while($dados=mysqli_fetch_array($res)){
                    ?>
				<!--Poject Block Two-->
				<div class="gallery-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box">
						<figure class="image-box">
							<img src="<?php echo $dados['galeriaFotoURL']?>" alt="">
							<!--Overlay Box-->
							<div class="overlay-box">
								<div class="overlay-inner">
									<div class="content">
										<a href="<?php echo $dados['galeriaFotoURL']?>" data-fancybox="gallery" data-caption="Data da Foto:&nbsp;&nbsp;<?php echo $dados['galeriaData']?>" class="link"><span class="icon flaticon-plus-symbol"></span></a>
									</div>
								</div>
							</div>
						</figure>
					</div>
				</div>
				<?php } ?>
	</section>
	<!--End Gallery Page Section-->
<?php
drawBottom();
?>