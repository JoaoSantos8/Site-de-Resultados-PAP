<?php
include_once("includes/body.inc.php");
global $con;
drawTop(HOME);
$idClube=intval($_GET['id']);
$sql="select *
 from clubes
 where clubeId=$idClube";
$res=mysqli_query($con,$sql);
$dadosC=mysqli_fetch_array($res);
?>
    <section class="page-title" style="background-image:url(images/background/background.png);">
    <div class="auto-container">
        <h1>Detalhes do Clube</h1>
    </div>
</section>
	<!--End Main Header -->
	<div style="padding-top: 50px; padding-bottom: 50px;">
		<div class="text-center"><img src="<?php echo $dadosC['clubeLogoURL'] ?>"></div><p><p>
		<div class="text-center" style="height: 130px">
			<font class="text-center" color="black" size="4"><b>Nome completo do clube:</b></font><font class="texto" size="3">&nbsp;&nbsp;&nbsp;<?php echo $dadosC['clubeNome'] ?></font><br><br>
			<font class="text-center" color="black" size="4"><b>Ano de fundação do clube:</b></font><font class="texto" size="3">&nbsp;&nbsp;&nbsp;<?php echo $dadosC['clubeAnoFundacao'] ?></font><br><br>
			<font class="text-center" color="black" size="4"><b>Fundador do Clube:</b></font><font class="texto" size="3">&nbsp&nbsp;&nbsp;<?php echo $dadosC['clubeFundadores'] ?></font><br><br>
			<font class="text-center" color="black" size="4"><b>Estádio:</b></font><font class="texto" size="3">&nbsp&nbsp;&nbsp;<?php echo $dadosC['clubeEstadio'] ?></font><br><br>
		</div></div>
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
                $sql="select * from jogadorclubes inner join jogadores on jogadorId=jogadorClubeJogadorId
                        where jogadorClubeClubeId=$idClube";
                $res=mysqli_query($con,$sql);
                $dados=mysqli_fetch_array($res);
                while($dados=mysqli_fetch_array($res)){
                    ?>
                    <tr>
                        <td align="center"><font color="black" size="4px"><?php echo $dados['jogadorClubeNumero'] ?></font></td>
                        <td align="center"><img src="<?php echo $dados['jogadorFotoURL'] ?>"></td>
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