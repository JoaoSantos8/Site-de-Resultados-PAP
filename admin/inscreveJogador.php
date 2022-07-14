<?php
include_once ("includes/body.inc.php");
global $con;
//var_dump($_POST);

$id=intval($_POST['clubeId']);
$num=count($_POST['jogador']);
$sql="insert into jogadorclubes values ";
$txt="";
for($i=0;$i<$num;$i++){
    $txt.="($id,".$_POST['jogador'][$i].",1,".$_POST['numero'][$i].")";
    if($i+1<$num)
        $txt.=",";
}
$sql.=$txt;
mysqli_query($con,$sql);
header("location:gerirPlantel.php?id=$id");

?>
