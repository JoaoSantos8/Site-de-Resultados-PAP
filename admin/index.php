<?php

include_once ("includes/body.inc.php");
global $con;
drawTop(HOME);
$sql="select * from imoveltipos";
$result=mysqli_query($con,$sql);

?>
    <div class="container w-100">
        <h1>Futebol</h1>




    </div>
<?php
drawBottom();
?>