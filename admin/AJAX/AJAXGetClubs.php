<?php
include_once("../includes/body.inc.php");
global $con;
$idClub=intval($_POST['clubId']);
$sql="Select clubeId, clubeNome from clubes where clubeId <> $idClub";
$res=mysqli_query($con,$sql);
echo "<option selected=\"\">Escolha o clube...</option>";
while($dados=mysqli_fetch_array($res)){
    echo "<option value=\"".$dados['clubeId']."\">".$dados['clubeNome']."</option>";
}



?>