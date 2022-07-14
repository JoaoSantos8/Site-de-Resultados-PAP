<?php
include_once("includes/body.inc.php");
global $con;
drawTop(HOME);
?>
<section class="page-title" style="background-image:url(images/background/.png)">
    <div class="auto-container">
        <h1></h1>
    </div>
</section>
	<!--End Main Header -->
	<div style="padding-top: 50px; padding-bottom: 50px;">
        <?php
        $id=intval($_GET['id']);
        $sql="select clubeNome, clubeLogoURL, clubeAnoFundacao, clubeFundadores, clubeEstadio from clubes where clubeId='$id'";
        $res=mysqli_query($con,$sql);
        $dados=mysqli_fetch_array($res)
        ?>
        <head>
            <title>Soccer Santos | Perfil do  <?php echo $dados['clubeNome'] ?> </title>
        </head>
		<div style="margin-bottom: 40px; padding-left: 35%"><img src="<?php echo $dados['clubeLogoURL'] ?>"></div><p><p>
		<div style="padding-left: 35%">
			<font size="18px" color="black">Detalhes do clube</font><p><p>
			<font color="black"><b>Nome Completo do Clube:</b></font><font class="texto">&nbsp;&nbsp;&nbsp;<?php echo $dados['clubeNome'] ?></font><p>
			<font color="black"><b>Ano De Fundação do clube:</b></font><font class="texto">&nbsp;&nbsp;&nbsp;<?php echo $dados['clubeAnoFundacao'] ?></font><p>
			<font color="black"><b>Fundador do Clube:</b></font><font class="texto">&nbsp&nbsp;&nbsp;<?php echo $dados['clubeFundadores'] ?></font><p>
			<font color="black"><b>Estádio:</b></font><font class="texto">&nbsp&nbsp;&nbsp;<?php echo $dados['clubeEstadio'] ?></font><p>
		</div></div>
<font size="5px" color="black" style="width: 100%"><b><marquee direction="right" behavior="alternate" style="height: 50px" ><div style="position: absolute; top: 20px; height: 50px; vertical-align: middle;">Jogadores do <?php echo $dados['clubeNome']?></div></marquee></b></font>
	<div style="padding-top: 30px">
	<div class="TabelaJogadores">
			<table class="table" style="border-top-left-radius:10px; border-top-right-radius:10px; border-bottom-left-radius:10px; border-bottom-right-radius:10px;">
				<thead style=" background-color:#7c7b7b;">
				<tr>
					<th scope="col" style="border-top-left-radius:10px; border: 0px; padding-right: 10px; padding-left: 10px; padding-bottom: 5px; padding-top: 5px; vertical-align: middle"><font color="white" ><div style="width: 100%;">Número de jogador</div></font></th>
					<th scope="col" text-align="center" style="padding-right: 10px; padding-left: 10px; padding-bottom: 5px; padding-top: 5px; border: 0px;  vertical-align: middle;"><font color="white"><div style="width: 100%;">Foto</div></font></th>
					<th scope="col" text-align="center" style="border: 0px; vertical-align: middle;"><font color="white"><div style="width: 100%;">Nome do jogador</div></font></th>
					<th scope="col" text-align="center" style="border-top-right-radius:10px; border: 0px; vertical-align: middle;"><font color="white"><div style="width: 100%;">Idade</div></font></th>
				</tr>
				</thead>
				<tbody>
                <?php
                $sql="select * from jogadores inner join jogadorclubes where jogadorId=jogadorClubeJogadorId";
                $res=mysqli_query($con,$sql);
                while($dados=mysqli_fetch_array($res)){
                    ?>
				<tr>
					<th align="center"><font color="black" size="4px"> 99 </font></th>
					<td align="center"><img src="<?php echo $dados['jogadorFotoURL'] ?>""></td>
					<td align="center"><font color="black" size="4px"><?php echo $dados['jogadorNome'] ?></font></td>
					<td align="center"><font color="black" size="4px"><?php echo idade($dados['jogadorDataNascimento']);?></font></td>
				</tr>
                    <?php
                }
                    ?>
				</tbody>
			</table>
		</div>
	</div>
<?php
drawBottom();
?>