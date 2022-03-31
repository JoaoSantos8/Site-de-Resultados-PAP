<?php

include_once ("includes/body.inc.php");
global $con;
drawTop();
$sql="select * from jogadores";
$result=mysqli_query($con,$sql);

?>
    <div class="container w-100">
        <h1>Futebol</h1>




    </div>
<?php
drawBottom();
?>