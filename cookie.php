<?php 
$cor= $_GET["id"];
setcookie("corperso", "$cor", time()+172800);
header("Location:index.php");
?>