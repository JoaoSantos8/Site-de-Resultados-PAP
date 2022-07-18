<?php
include_once("includes/body.inc.php");
drawTop(HOME);
global $con;
$sql="Select clubes.clubeId
, clubeNome
, clubeLogoURL
,nJogos
,pontos
,ifnull(nVit,0) as nVit
,ifnull(nEmp,0) as nEmp
,ifnull(nDer,0) as nDer
,(gmC+gmF) as gMarcados
,(gsC+gsF) as gSofridos
from clubes left join (select clubeId, count(*) as nJogos, sum(pontosValor) as pontos
												from pontos inner join clubes on clubeId=pontosClubeId
												group by 1) as tabela1 on clubes.clubeId = tabela1.clubeId
						left join (select clubeId, count(*) as nVit
												from pontos inner join clubes on clubeId=pontosClubeId
												where pontosResultado='V' 
												group by 1) as tabela2 on clubes.clubeId = tabela2.clubeId
						left join (select clubeId, count(*) as nEmp
												from pontos inner join clubes on clubeId=pontosClubeId
												where pontosResultado='E' 
												group by 1) as tabela3 on clubes.clubeId = tabela3.clubeId
						left join (select clubeId, count(*) as nDer
												from pontos inner join clubes on clubeId=pontosClubeId
												where pontosResultado='D'
												group by 1) as tabela4 on clubes.clubeId = tabela4.clubeId				
						left join (select jogoCasaClubeId, sum(resultadoGolosCasa) as gmC
												from jogos inner join resultados on jogoId=resultadoJogoId
												group by 1) as tabela5 on clubes.clubeId = tabela5.jogoCasaClubeId
						left join (select jogoForaClubeId, sum(resultadoGolosFora) as gmF
												from jogos inner join resultados on jogoId=resultadoJogoId
												group by 1) as tabela6 on clubes.clubeId = tabela6.jogoForaClubeId
						left join (select jogoCasaClubeId, sum(resultadoGolosFora) as gsC
												from jogos inner join resultados on jogoId=resultadoJogoId
												group by 1) as tabela7 on clubes.clubeId = tabela7.jogoCasaClubeId
						left join (select jogoForaClubeId, sum(resultadoGolosCasa) as gsF
												from jogos inner join resultados on jogoId=resultadoJogoId
												group by 1) as tabela8 on clubes.clubeId = tabela8.jogoForaClubeId
order by pontos desc

";
$result=mysqli_query($con,$sql);
?>

    <section class="page-title" style="background-image:url(images/background/background.png); padding-bottom: 30px">
        <div class="auto-container">
            <h1>Classificação do Campeonato</h1>
        </div>
    </section>

		<table class="table" style=" border-top-left-radius:10px; border-top-right-radius:10px; border-bottom-left-radius:10px; border-bottom-right-radius:10px;margin-top: 60px;">
			<thead class="table-dark">
            <tr>
                <th scope="col" style="width: 8%; border-top-left-radius:10px; border-top: 0px">Posição</th>
                <th scope="col" colspan="2" style="width: 36%; padding-right: 90px; border-top: 0px"><font color="white"><b>Equipa</b></font></th>
                <th scope="col" width="30px" style="width: 8%;  border-top: 0px">Pts</th>
                <th scope="col" style=" width: 8%; border-top: 0px">Jogos</th>
                <th scope="col" style=" width: 8%; border-top: 0px">Vitórias</th>
                <th scope="col" style=" width: 8%; border-top: 0px">Empates</th>
                <th scope="col" style=" width: 8%; border-top: 0px">Derrotas</th>
                <th scope="col" style=" width: 8%; border-top: 0px">Golos Marcados</th>
                <th scope="col" style="	width: 8%; border-top-right-radius:10px; border-top: 0px">Golos Sofridos</th>
            </tr>
			</thead>
			<tbody>
            <?php
            $i=1;
            while($dados=mysqli_fetch_array($result)){
            ?>
			<tr>
				<th scope="row" ><font color="black"><b><?php echo $i++?></b></font></th>
				<td width="30px" align="right" style="padding-right: 0px; padding-left: 0px"><a href="#"><img src="<?php echo $dados['clubeLogoURL']?>" width="25px"; height="25px"></a></td>
				<td width="160px" align="left" style="padding-left: 8px; padding-top: 14px; padding-bottom: 10px"><a href="perfil.php?id=<?php echo $dados['clubeId']?>"><font color="black" size="4px"><b><?php echo $dados['clubeNome']?></b></font></a></td>
				<td align="center"><font color="black" size="4px"><b><?php echo $dados['pontos']?></b></font></td>
				<td align="center"><font color="black" size="4px"><b><?php echo $dados['nJogos']?></b></font></td>
				<td align="center"><font color="black" size="4px"><b><?php echo $dados['nVit']?></b></font></td>
				<td align="center"><font color="black" size="4px"><b><?php echo $dados['nEmp']?></b></font></td>
				<td align="center"><font color="black" size="4px"><b><?php echo $dados['nDer']?></b></font></td>
				<td align="center"><font color="black" size="4px"><b><?php echo $dados['gMarcados']?></b></font></td>
				<td align="center"><font color="black" size="4px"><b><?php echo $dados['gSofridos']?></b></font></td>
			</tr>
                <?php
            }
            ?>
		
			</tbody>
		</table>
	</section>
	<!--End Services page Section-->

<?php
drawBottom();
?>