<?php
if(isset($_GET["Invoice_id"]))
{
    $id=$_GET["Invoice_id"];

    $h = "localhost";
    $un =  "root";
    $psw = "";
    $db = "taxi";
                                
    $con = new mysqli($h,$un,$psw,$db);

    $sql="DELETE FROM orderr WHERE Invoice_id=$id";
    $con->query($sql);

}

header("location:orderhistory.php");
exit;
?>